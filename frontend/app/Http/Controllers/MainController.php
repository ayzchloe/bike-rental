<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Offer;
use App\Models\Ride;
use App\Models\WalletTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    /**
     * Display the Dashboard.
     */
    public function dashboard()
    {
        $user = Auth::user();

        if (! $user) {
            return view('dashboard', [
                'user_name' => 'Guest',
                'rider_status' => 'ACTIVE',
                'active_rides_count' => 0,
                'current_balance' => 0.0,
                'lifetime_spend' => 0.0,
                'active_ride' => null,
                'recent_rides' => [],
            ]);
        }

        $activeRide = $user->activeRide();
        $activeRidesCount = $user->rides()->where('status', 'ACTIVE')->count();

        $activeRidePayload = null;
        if ($activeRide) {
            $activeRidePayload = [
                'id' => $activeRide->id,
                'bike_name' => $activeRide->bike->name,
                'model' => $activeRide->bike->model,
                'license' => $activeRide->bike->license,
                'battery' => $activeRide->bike->battery,
                'address' => $activeRide->bike->last_known_address ?? 'Location unavailable',
                'due_time' => $activeRide->due_at->format('g:i A'),
            ];
        }

        $recentRides = $user->rides()
            ->where('status', 'COMPLETED')
            ->with('bike')
            ->latest('ended_at')
            ->take(5)
            ->get()
            ->map(fn ($ride) => [
                'name' => $ride->bike->name,
                'date' => optional($ride->ended_at)->format('M d'),
                'duration' => $ride->started_at->diffForHumans($ride->ended_at, true),
                'cost' => (float) $ride->cost,
            ])
            ->all();

        return view('dashboard', [
            'user_name' => $user->name ?? 'Guest',
            'rider_status' => $user->rider_status,
            'active_rides_count' => $activeRidesCount,
            'current_balance' => (float) $user->current_balance,
            'lifetime_spend' => (float) $user->lifetime_spend,
            'active_ride' => $activeRidePayload,
            'recent_rides' => $recentRides,
        ]);
    }

    /**
     * Display the Catalog page, with optional search/sort/filter query params.
     */
    public function catalog(Request $request)
    {
        $user = Auth::user();

        $query = Bike::available();

        if ($search = $request->query('q')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('model', 'like', "%{$search}%")
                    ->orWhere('last_known_address', 'like', "%{$search}%");
            });
        }

        if ($model = $request->query('model')) {
            $query->where('model', $model);
        }

        match ($request->query('sort')) {
            'price_low' => $query->orderBy('hourly_rate', 'asc'),
            'price_high' => $query->orderBy('hourly_rate', 'desc'),
            'battery' => $query->orderBy('battery', 'desc'),
            default => $query->orderBy('name', 'asc'),
        };

        $bikes = $query->get();

        return view('catalog', [
            'bikes' => $bikes,
            'user_name' => $user->name ?? 'Guest',
            'rider_status' => $user->rider_status ?? 'ACTIVE',
            'favorite_bike_ids' => $user ? $user->favoriteBikes()->pluck('bikes.id')->all() : [],
            'available_models' => Bike::available()->distinct()->pluck('model'),
            'search_term' => $request->query('q', ''),
            'sort_by' => $request->query('sort', ''),
            'model_filter' => $request->query('model', ''),
        ]);
    }

    /**
     * POST /bikes/{bike}/favorite
     * Toggles a bike in the authenticated rider's favorites list.
     */
    public function toggleFavorite(Bike $bike)
    {
        $user = Auth::user();

        if (! $user) {
            return redirect()->route('login');
        }

        if ($user->favoriteBikes()->where('bikes.id', $bike->id)->exists()) {
            $user->favoriteBikes()->detach($bike->id);
        } else {
            $user->favoriteBikes()->attach($bike->id);
        }

        return back();
    }

    /**
     * POST /rides/start/{bike}
     * Starts a new ride on the given bike for the authenticated rider.
     */
    public function bookRide(Bike $bike)
    {
        $user = Auth::user();

        if (! $user) {
            return redirect()->route('login');
        }

        if ($user->activeRide()) {
            return back()->withErrors(['ride' => 'You already have an active ride. End it before starting another.']);
        }

        if ($bike->status !== 'AVAILABLE') {
            return back()->withErrors(['ride' => 'That bike is no longer available.']);
        }

        DB::transaction(function () use ($bike, $user) {
            Ride::create([
                'user_id' => $user->id,
                'bike_id' => $bike->id,
                'started_at' => now(),
                'due_at' => now()->addHour(),
                'cost' => (float) $bike->hourly_rate,
                'status' => 'ACTIVE',
            ]);

            $bike->status = 'RENTED';
            $bike->save();
        });

        return redirect()->route('dashboard')->with('status', "Ride started on {$bike->name}!");
    }

    /**
     * Display the Booking page.
     */
    public function booking()
    {
        $user = Auth::user();
        $rides = $user
            ? $user->rides()->with('bike')->latest('started_at')->get()
            : collect();

        return view('booking', ['rides' => $rides]);
    }

    /**
     * Display the Wallet page.
     */
    public function wallet()
    {
        $user = Auth::user();
        $transactions = $user
            ? $user->walletTransactions()->latest()->get()
            : collect();

        return view('wallet', [
            'current_balance' => $user ? (float) $user->current_balance : 0.0,
            'lifetime_spend' => $user ? (float) $user->lifetime_spend : 0.0,
            'transactions' => $transactions,
        ]);
    }

    /**
     * Display the Settings page with the rider's account info.
     */
    public function settings()
    {
        $user = Auth::user();

        if (! $user) {
            return redirect()->route('login');
        }

        return view('settings', ['user' => $user]);
    }

    /**
     * POST /settings/profile
     * Updates the authenticated user's name and email.
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        if (! $user) {
            return redirect()->route('login');
        }

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ]);

        $user->update($validated);

        return back()->with('status', 'Profile updated successfully.');
    }

    /**
     * POST /settings/password
     * Updates the authenticated user's password after verifying the current one.
     */
    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        if (! $user) {
            return redirect()->route('login');
        }

        $validated = $request->validate([
            'current_password' => 'required|string',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (! Hash::check($validated['current_password'], $user->password)) {
            return back()->withErrors(['current_password' => 'Your current password is incorrect.']);
        }

        $user->update(['password' => bcrypt($validated['password'])]);

        return back()->with('status', 'Password changed successfully.');
    }

    /**
     * Show the login form.
     */
    public function showLogin()
    {
        return view('login');
    }

    /**
     * Handle a login attempt.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'Those credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Log the user out.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('welcome');
    }

    /**
     * Show the registration form.
     */
    public function showRegister()
    {
        return view('register');
    }

    /**
     * Handle a new account registration.
     */
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = \App\Models\User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'account_mode' => 'RIDER',
            'rider_status' => 'ACTIVE',
            'current_balance' => 0,
            'lifetime_spend' => 0,
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()->route('dashboard');
    }

    /**
     * POST /user/switch-mode
     * Toggles account context between RIDER mode and OWNER mode.
     */
    public function switchMode()
    {
        $user = Auth::user();

        if (! $user) {
            return redirect()->route('welcome');
        }

        $user->account_mode = $user->account_mode === 'OWNER' ? 'RIDER' : 'OWNER';
        $user->save();

        return back()->with('status', "Switched to {$user->account_mode} mode.");
    }

    /**
     * POST /api/rides/{ride}/extend
     */
    public function extendRide(Request $request, Ride $ride)
    {
        abort_unless(Auth::id() === $ride->user_id, 403);

        if ($ride->status !== 'ACTIVE') {
            return back()->withErrors(['ride' => 'Ride is not active.']);
        }

        $minutes = (int) $request->input('minutes', 60);
        $ride->due_at = $ride->due_at->addMinutes($minutes);
        $ride->cost = $ride->calculateCost();
        $ride->save();

        return back()->with('status', 'Ride extended.');
    }

    /**
     * POST /api/rides/{ride}/end
     */
    public function endRide(Ride $ride)
    {
        abort_unless(Auth::id() === $ride->user_id, 403);

        if ($ride->status !== 'ACTIVE') {
            return back()->withErrors(['ride' => 'Ride is not active.']);
        }

        DB::transaction(function () use ($ride) {
            $ride->ended_at = now();
            $ride->cost = $ride->calculateCost();
            $ride->status = 'COMPLETED';
            $ride->save();

            $ride->bike->status = 'AVAILABLE';
            $ride->bike->save();

            $user = $ride->user;
            $user->current_balance = max(0, (float) $user->current_balance - (float) $ride->cost);
            $user->lifetime_spend = (float) $user->lifetime_spend + (float) $ride->cost;
            $user->save();

            WalletTransaction::create([
                'user_id' => $user->id,
                'ride_id' => $ride->id,
                'type' => 'RIDE_CHARGE',
                'amount' => -1 * (float) $ride->cost,
                'description' => "Ride charge for {$ride->bike->name}",
            ]);
        });

        return redirect()->route('dashboard')->with('status', 'Ride ended.');
    }

    /**
     * POST /offers/claim
     */
    public function claimOffer(Request $request)
    {
        $user = Auth::user();

        if (! $user) {
            return redirect()->route('welcome');
        }

        $code = $request->input('code', 'WEEKEND20');
        $offer = Offer::where('code', $code)->first();

        if (! $offer || $offer->isExpired()) {
            return back()->withErrors(['offer' => 'This offer is no longer available.']);
        }

        if ($offer->claimedBy()->where('user_id', $user->id)->exists()) {
            return back()->withErrors(['offer' => 'You already claimed this offer.']);
        }

        $offer->claimedBy()->attach($user->id, ['claimed_at' => now()]);

        return back()->with('status', "Offer '{$offer->title}' claimed!");
    }
}
