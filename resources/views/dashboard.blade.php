<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velex Dashboard</title>

    <!-- Bypasses Vite/npm and loads Tailwind directly in the browser -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-50 text-slate-900 antialiased font-sans flex min-h-screen">

    <!-- SIDEBAR NAVBAR -->
    <aside class="w-64 bg-slate-950 text-white flex flex-col justify-between p-6 shrink-0">
        <div>
            <!-- Logo Section -->
            <div class="flex items-center gap-2 mb-8 text-emerald-400 font-bold text-xl tracking-wider">
                🚲 VELEX
            </div>

            <!-- Mode Switcher -->
            <form action="/user/switch-mode" method="POST" class="mb-8">
                @csrf
                <button type="submit"
                    class="w-full bg-emerald-600 hover:bg-emerald-500 text-white text-xs font-bold py-3 px-4 rounded-xl flex items-center justify-between transition">
                    <span>SWITCH TO OWNER MODE</span>
                    <span>⇄</span>
                </button>
            </form>

            <!-- Navigation Links -->
            <!-- Navigation Links -->

            <nav class="space-y-1 px-2">
                <!-- Dashboard -->
                <a href="/dashboard"
                    class="flex items-center gap-4 px-4 py-3 rounded-xl text-sm font-semibold transition-all group {{ request()->is('dashboard') ? 'bg-[#1E293B] text-white border-l-4 border-[#10B981] pl-3' : 'text-[#8A94A6] hover:bg-[#111C2E] hover:text-white' }}">
                    <svg class="w-5 h-5 {{ request()->is('dashboard') ? 'text-[#10B981]' : 'text-[#475569] group-hover:text-[#94A3B8]' }}"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 15.75V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                    </svg>
                    <span>Dashboard</span>
                </a>

                <!-- Browse Motorbikes -->
                <a href="/catalog"
                    class="flex items-center gap-4 px-4 py-3 rounded-xl text-sm font-semibold transition-all group {{ request()->is('catalog') ? 'bg-[#1E293B] text-white border-l-4 border-[#10B981] pl-3' : 'text-[#8A94A6] hover:bg-[#111C2E] hover:text-white' }}">
                    <svg class="w-5 h-5 {{ request()->is('catalog') ? 'text-[#10B981]' : 'text-[#475569] group-hover:text-[#94A3B8]' }}"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="5.5" cy="17.5" r="2.5" />
                        <circle cx="18.5" cy="17.5" r="2.5" />
                        <path d="M15 6.5a2.5 2.5 0 0 0-2.5-2.5H9L6 11H3.5M12.5 4v11M18.5 15l-3.5-6H9.5" />
                    </svg>
                    <span>Browse Motorbikes</span>
                </a>

                <!-- Active Rides -->
                <a href="/booking"
                    class="flex items-center gap-4 px-4 py-3 rounded-xl text-sm font-semibold transition-all group {{ request()->is('booking') ? 'bg-[#1E293B] text-white border-l-4 border-[#10B981] pl-3' : 'text-[#8A94A6] hover:bg-[#111C2E] hover:text-white' }}">
                    <svg class="w-5 h-5 {{ request()->is('booking') ? 'text-[#10B981]' : 'text-[#475569] group-hover:text-[#94A3B8]' }}"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M13.19 8.688a4.5 4.5 0 0 1 1.242 7.244l-4.5 4.5a4.5 4.5 0 0 1-6.364-6.364l1.757-1.757m13.35-.622 1.757-1.757a4.5 4.5 0 0 0-6.364-6.364l-4.5 4.5a4.5 4.5 0 0 0 1.242 7.244" />
                    </svg>
                    <span>Active Rides</span>
                </a>

                <!-- Wallet -->
                <a href="/wallet"
                    class="flex items-center gap-4 px-4 py-3 rounded-xl text-sm font-semibold transition-all group {{ request()->is('wallet') ? 'bg-[#1E293B] text-white border-l-4 border-[#10B981] pl-3' : 'text-[#8A94A6] hover:bg-[#111C2E] hover:text-white' }}">
                    <svg class="w-5 h-5 {{ request()->is('wallet') ? 'text-[#10B981]' : 'text-[#475569] group-hover:text-[#94A3B8]' }}"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M2.25 8.25h19.5M2.25 9h19.5m-16.5 5.25h6m-6 2.25h3m-3.75 3h15a2.25 2.25 0 0 0 2.25-2.25V6.75A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25v10.5A2.25 2.25 0 0 0 4.5 19.5Z" />
                    </svg>
                    <span>Wallet</span>
                </a>

                <!-- Settings -->
                <a href="/settings"
                    class="flex items-center gap-4 px-4 py-3 rounded-xl text-sm font-semibold transition-all group {{ request()->is('settings') ? 'bg-[#1E293B] text-white border-l-4 border-[#10B981] pl-3' : 'text-[#8A94A6] hover:bg-[#111C2E] hover:text-white' }}">
                    <svg class="w-5 h-5 {{ request()->is('settings') ? 'text-[#10B981]' : 'text-[#475569] group-hover:text-[#94A3B8]' }}"
                        fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.43l-1.003.754c-.29.218-.44.573-.4.928a4.06 4.06 0 0 1 0 .252c-.04.354.11.71.4.928l1.003.754c.478.36.583 1.043.26 1.43l-1.296 2.247a1.125 1.125 0 0 1-1.37.49l-1.216-.456a1.125 1.125 0 0 0-1.076.124a6.57 6.57 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281a1.125 1.125 0 0 0-.644-.87a6.52 6.52 0 0 1-.22-.127a1.125 1.125 0 0 0-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.43l1.004-.754c.29-.218.44-.573.4-.928a4.036 4.036 0 0 1 0-.252c.04-.354-.11-.71-.4-.928l-1.004-.754a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.49l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128c.332-.183.582-.495.644-.869l.214-1.28Z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                    <span>Settings</span>
                </a>
            </nav>
        </div>

        <!-- User Profile Label -->
        <div class="text-sm font-semibold text-slate-400 pt-4 border-t border-slate-800">
            {{ auth()->user()->name ?? 'Guest' }} Rider
        </div>
    </aside>

    <!-- MAIN CONTENT SPACE -->
    <main class="flex-1 p-10 max-w-7xl mx-auto w-full">

        <!-- Header Section -->
        <header class="flex justify-between items-center mb-10">
            <div>
                <span class="text-xs font-bold text-emerald-600 tracking-widest uppercase">
                    RIDER STATUS: {{ $rider_status }}
                </span>
                <h1 class="text-3xl font-black text-slate-900 mt-1">Welcome Back, {{ $user_name }}!</h1>
                <p class="text-slate-500 text-sm font-medium">Ready for your next ride?</p>
            </div>
            <a href="/rent"
                class="bg-emerald-900 hover:bg-emerald-950 text-white text-sm font-bold py-3 px-6 rounded-xl flex items-center gap-2 shadow-md shadow-emerald-900/10 transition">
                Rent a Motorbike <span>➔</span>
            </a>
        </header>

        <!-- TOP CORE METRICS GRID -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <!-- Active Rides Card -->
            <div class="bg-white border border-slate-100 p-6 rounded-3xl shadow-sm">
                <div class="flex justify-between items-center mb-4">
                    <span
                        class="text-[10px] font-bold tracking-wider uppercase text-slate-400 bg-slate-50 px-2.5 py-1 rounded-full border border-slate-100">Real-Time</span>
                </div>
                <div class="text-4xl font-black text-slate-900">{{ $active_rides_count }}</div>
                <div class="text-xs font-bold text-slate-400 mt-1">Active Rides</div>
            </div>

            <!-- Current Balance Card -->
            <div class="bg-white border border-slate-100 p-6 rounded-3xl shadow-sm">
                <div class="flex justify-between items-center mb-4">
                    <span
                        class="text-[10px] font-bold tracking-wider uppercase text-slate-400 bg-slate-50 px-2.5 py-1 rounded-full border border-slate-100">Top
                        Up</span>
                </div>
                <div class="text-4xl font-black text-slate-900">${{ number_format($current_balance, 2) }}</div>
                <div class="text-xs font-bold text-slate-400 mt-1">Current Balance</div>
            </div>

            <!-- Lifetime Spend Card (Highlighted) -->
            <div class="bg-slate-900 border border-slate-900 p-6 rounded-3xl shadow-sm text-white">
                <div class="flex justify-between items-center mb-4">
                    <span
                        class="text-[10px] font-bold tracking-wider uppercase text-emerald-400 bg-white/10 px-2.5 py-1 rounded-full">📈
                        +12%</span>
                </div>
                <div class="text-4xl font-black text-white">${{ number_format($lifetime_spend, 2) }}</div>
                <div class="text-xs font-semibold text-slate-400 mt-1">Lifetime Spend</div>
            </div>
        </div>

        <!-- TWO-COLUMN FOOTER DISPLAY -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">

            <!-- Column 1 & 2: Live Tracking Dashboard -->
            <div class="lg:col-span-2">
                <h2 class="text-lg font-bold text-slate-900 mb-4">Live Tracking</h2>

                @if ($active_ride)
                    <div
                        class="bg-white border border-slate-100 p-4 rounded-3xl shadow-sm flex flex-col md:flex-row gap-5">
                        <!-- Simulated Map Block -->
                        <div class="w-full md:w-1/2 h-56 bg-slate-200 rounded-2xl relative flex flex-col justify-end p-3 overflow-hidden bg-cover bg-center"
                            style="background-image: url('https://placeholder.pics/svg/400x300/E2E8F0/64748B/Map%20View');">
                            <div
                                class="bg-white/95 backdrop-blur-sm shadow-sm rounded-xl p-3 text-[11px] font-bold text-slate-800 border border-slate-100">
                                📍 Currently at: <span
                                    class="text-slate-500 font-medium">{{ $active_ride['address'] }}</span>
                            </div>
                        </div>

                        <!-- Panel Metrics & Direct Operations -->
                        <div class="flex-1 flex flex-col justify-between py-1">
                            <div>
                                <div class="flex justify-between items-start">
                                    <div>
                                        <h3 class="text-lg font-extrabold text-slate-900 leading-tight">
                                            {{ $active_ride['bike_name'] }}</h3>
                                        <p class="text-[11px] font-bold text-slate-400 mt-0.5 uppercase tracking-wider">
                                            MODEL {{ $active_ride['model'] }} • LICENSE: {{ $active_ride['license'] }}
                                        </p>
                                    </div>
                                    <span
                                        class="bg-emerald-50 text-emerald-700 text-xs font-bold px-2.5 py-1 rounded-lg border border-emerald-100 shrink-0">
                                        🔋 {{ $active_ride['battery'] }}%
                                    </span>
                                </div>

                                <!-- Dynamic Warning Bar -->
                                <div
                                    class="mt-4 bg-amber-50 border border-amber-100 text-amber-900 p-3.5 rounded-2xl flex items-start gap-3">
                                    <span class="text-base mt-0.5">🕒</span>
                                    <div>
                                        <div class="text-[10px] font-bold tracking-wider text-amber-700 uppercase">Due
                                            Return</div>
                                        <div class="text-xs font-semibold mt-0.5 text-amber-900">
                                            {{ $active_ride['due_time'] }}</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Operation Buttons Form -->
                            <div class="grid grid-cols-2 gap-3 mt-4">
                                <form action="/api/rides/{{ $active_ride['id'] }}/extend" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="w-full bg-white border border-slate-200 hover:bg-slate-50 text-slate-800 font-bold py-3 px-4 rounded-xl text-xs tracking-wide transition">
                                        Extend Time
                                    </button>
                                </form>
                                <form action="/api/rides/{{ $active_ride['id'] }}/end" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-4 rounded-xl text-xs tracking-wide shadow-sm transition">
                                        End Ride
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @else
                    <div
                        class="bg-white border border-slate-100 rounded-3xl p-8 text-center text-slate-400 font-medium text-sm">
                        No active session running at the moment.
                    </div>
                @endif
            </div>

            <!-- Column 3: Recent Activity Lists -->
            <div>
                <h2 class="text-lg font-bold text-slate-900 mb-4">Recent Rides</h2>
                <div class="space-y-3 mb-6">
                    @foreach ($recent_rides as $ride)
                        <div
                            class="bg-white border border-slate-100 p-3 rounded-2xl shadow-sm flex items-center justify-between hover:border-slate-200 transition">
                            <div class="flex items-center gap-3">
                                <div
                                    class="w-12 h-12 bg-slate-100 rounded-xl flex items-center justify-center text-xl shrink-0">
                                    🏍️</div>
                                <div>
                                    <h4 class="text-sm font-bold text-slate-900">{{ $ride['name'] }}</h4>
                                    <p class="text-[11px] font-semibold text-slate-400 mt-0.5">{{ $ride['date'] }} •
                                        {{ $ride['duration'] }}</p>
                                </div>
                            </div>
                            <span
                                class="text-sm font-extrabold text-slate-800">${{ number_format($ride['cost'], 2) }}</span>
                        </div>
                    @endforeach
                </div>

                <!-- Promotion Card Placement -->
                <div class="bg-emerald-950 text-white p-5 rounded-3xl relative overflow-hidden shadow-sm">
                    <span
                        class="text-[9px] font-bold tracking-widest text-emerald-400 uppercase bg-white/10 px-2.5 py-1 rounded-full">Pro
                        Rider Offer</span>
                    <h3 class="text-base font-extrabold mt-3 leading-snug">Unlock Unlimited Weekends</h3>
                    <p class="text-xs text-slate-400 font-medium mt-1 leading-relaxed">Get 20% off all long-distance
                        rentals starting Friday evening.</p>

                    <form action="/offers/claim" method="POST" class="mt-4">
                        @csrf
                        <button type="submit"
                            class="w-full bg-white hover:bg-slate-50 text-emerald-950 font-bold py-2.5 px-4 rounded-xl text-xs tracking-wide transition">
                            Claim Offer
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </main>

</body>

</html>
