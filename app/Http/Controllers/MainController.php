<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Display the Dashboard.
     */
    public function dashboard()
    {
        // Fetch the logged-in user details
        $user = auth()->user();

        // Fallbacks protect your template if variables are missing
        $user_name = $user ? $user->name : 'Guest';

        // Sets a default status; adjust this if you pull it from a database column later
        $rider_status = $user && isset($user->rider_status) ? $user->rider_status : 'Active';

        // Stat Card Counters & Values
        $active_rides_count = 0;
        $current_balance = 0.00;
        $total_rides_count = 0;
        $lifetime_spend = 0.00;

        // Live Tracking Section
        $active_ride = null;

        // History Tables & Lists (Adding collection/array fallbacks to catch any final errors)
        $recent_rides = collect();
        $notifications = collect();

        return view('dashboard', compact(
            'user_name',
            'rider_status',
            'active_rides_count',
            'current_balance',
            'total_rides_count',
            'lifetime_spend',
            'active_ride',
            'recent_rides',
            'notifications'
        ));
    }

    /**
     * Display the Catalog page.
     */
    public function catalog()
    {
        return view('catalog');
    }

    /**
     * Display the Booking page.
     */
    public function booking()
    {
        return view('booking');
    }

    /**
     * Display the Wallet page.
     */
    public function wallet()
    {
        return view('wallet');
    }

    /**
     * Optional Authentication Methods
     */
    public function showLogin()
    {
        return view('welcome'); // Or your custom login view if you make one later
    }

    public function login(Request $request)
    {
        // Add authentication handling logic here later
    }

    public function logout()
    {
        // Add session clearing logic here later
        return redirect()->route('welcome');
    }
}
