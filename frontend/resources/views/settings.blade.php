<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velex | Settings</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet">
</head>

<body class="bg-slate-50 text-slate-900 antialiased font-sans">

    <aside class="fixed left-0 top-0 h-full w-[280px] bg-[#0B132B] text-white z-50 flex flex-col shadow-xl">
        <div class="px-6 py-8 flex items-center gap-3">
            <span class="material-symbols-outlined text-emerald-400 text-[32px]">two_wheeler</span>
            <span class="font-bold text-2xl tracking-tighter uppercase">VELEX</span>
        </div>

        <div class="px-4 mb-6">
            <form action="{{ route('user.switch-mode') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full bg-[#0F8A5F] hover:bg-emerald-600 text-white py-2 px-4 rounded-lg flex items-center justify-between transition-colors group">
                    <div class="flex flex-col items-start">
                        <span class="text-xs opacity-80 uppercase tracking-widest">Switch To</span>
                        <span class="text-sm font-bold">{{ $user->account_mode === 'OWNER' ? 'RIDER MODE' : 'OWNER MODE' }}</span>
                    </div>
                    <span class="material-symbols-outlined transition-transform group-hover:rotate-180">sync_alt</span>
                </button>
            </form>
        </div>

        <nav class="flex-1 px-2 space-y-1">
            <a href="{{ route('dashboard') }}" class="flex items-center px-6 py-3 text-white/60 hover:text-white transition-all">
                <span class="material-symbols-outlined mr-4">grid_view</span>Dashboard
            </a>
            <a href="{{ route('catalog.index') }}" class="flex items-center px-6 py-3 text-white/60 hover:text-white transition-all">
                <span class="material-symbols-outlined mr-4">motorcycle</span>Browse Motorbikes
            </a>
            <a href="{{ route('dashboard') }}#active-rides" class="flex items-center px-6 py-3 text-white/60 hover:text-white transition-all">
                <span class="material-symbols-outlined mr-4">route</span>Active Rides
            </a>
            <a href="{{ route('wallet.index') }}" class="flex items-center px-6 py-3 text-white/60 hover:text-white transition-all">
                <span class="material-symbols-outlined mr-4">account_balance_wallet</span>Wallet
            </a>
            <a aria-current="page" href="{{ route('settings.index') }}"
                class="flex items-center px-6 py-3 bg-white/5 border-l-4 border-emerald-400 text-white">
                <span class="material-symbols-outlined mr-4">settings</span>Settings
            </a>
        </nav>

        <div class="mt-auto p-6 bg-black/20">
            <div class="flex items-center gap-3 mb-3">
                <div class="w-10 h-10 rounded-full bg-emerald-500 flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-white text-[20px]">person</span>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="text-[16px] font-bold truncate">{{ $user->name }}</div>
                    <div class="text-xs text-white/40 uppercase tracking-wider">{{ ucfirst(strtolower($user->rider_status)) }} Rider</div>
                </div>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="w-full text-left text-xs text-white/50 hover:text-white transition-colors flex items-center gap-2 px-1">
                    <span class="material-symbols-outlined text-[16px]">logout</span> Log out
                </button>
            </form>
        </div>
    </aside>

    <div class="pl-[280px] min-h-screen">
        <main class="max-w-3xl mx-auto py-16 px-10">
            <h1 class="text-3xl font-black mb-1">Account Settings</h1>
            <p class="text-slate-500 mb-10">Manage your Velex rider profile.</p>

            @if (session('status'))
                <div class="bg-emerald-50 border border-emerald-200 text-emerald-700 text-sm font-semibold rounded-xl p-4 mb-6">
                    {{ session('status') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="bg-red-50 border border-red-200 text-red-700 text-sm font-semibold rounded-xl p-4 mb-6 space-y-1">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <!-- Read-only overview -->
            <div class="bg-white border border-slate-200 rounded-2xl p-8 space-y-6 mb-8">
                <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                    <span class="text-sm font-semibold text-slate-500 uppercase tracking-wider">Account Mode</span>
                    <span class="text-slate-900 font-medium">{{ ucfirst(strtolower($user->account_mode)) }}</span>
                </div>
                <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                    <span class="text-sm font-semibold text-slate-500 uppercase tracking-wider">Rider Status</span>
                    <span class="text-slate-900 font-medium">{{ ucfirst(strtolower($user->rider_status)) }}</span>
                </div>
                <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                    <span class="text-sm font-semibold text-slate-500 uppercase tracking-wider">Wallet Balance</span>
                    <span class="text-slate-900 font-medium">${{ number_format($user->current_balance, 2) }}</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-sm font-semibold text-slate-500 uppercase tracking-wider">Member Since</span>
                    <span class="text-slate-900 font-medium">{{ $user->created_at->format('M Y') }}</span>
                </div>
            </div>

            <!-- Edit Profile -->
            <div class="bg-white border border-slate-200 rounded-2xl p-8 mb-8">
                <h2 class="text-lg font-bold mb-4">Edit Profile</h2>
                <form action="{{ route('settings.profile') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Name</label>
                        <input type="text" name="name" value="{{ old('name', $user->name) }}" required
                            class="w-full mt-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-emerald-500">
                    </div>
                    <div>
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Email</label>
                        <input type="email" name="email" value="{{ old('email', $user->email) }}" required
                            class="w-full mt-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-emerald-500">
                    </div>
                    <button type="submit"
                        class="bg-emerald-600 hover:bg-emerald-500 text-white font-bold py-3 px-6 rounded-xl text-sm transition">
                        Save Profile
                    </button>
                </form>
            </div>

            <!-- Change Password -->
            <div class="bg-white border border-slate-200 rounded-2xl p-8">
                <h2 class="text-lg font-bold mb-4">Change Password</h2>
                <form action="{{ route('settings.password') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Current Password</label>
                        <input type="password" name="current_password" required
                            class="w-full mt-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-emerald-500">
                    </div>
                    <div>
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">New Password</label>
                        <input type="password" name="password" required
                            class="w-full mt-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-emerald-500">
                    </div>
                    <div>
                        <label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Confirm New Password</label>
                        <input type="password" name="password_confirmation" required
                            class="w-full mt-1 bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-emerald-500">
                    </div>
                    <button type="submit"
                        class="bg-slate-900 hover:bg-slate-800 text-white font-bold py-3 px-6 rounded-xl text-sm transition">
                        Update Password
                    </button>
                </form>
            </div>
        </main>
    </div>

</body>

</html>
