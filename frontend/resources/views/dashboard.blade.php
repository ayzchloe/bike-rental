<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Velex Dashboard</title>

    <!-- Bypasses Vite/npm and loads Tailwind directly in the browser -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            theme: {
                extend: {
                    "colors": {
                        "on-primary-container": "#f5fff6",
                        "surface-container-low": "#f2f4f6",
                        "secondary-fixed": "#dbe1ff",
                        "on-surface": "#191c1e",
                        "tertiary-fixed-dim": "#73d6d4",
                        "outline-variant": "#bdcac0",
                        "background": "#f7f9fb",
                        "surface-container-high": "#e6e8ea",
                        "surface": "#f7f9fb",
                        "tertiary-container": "#008281",
                        "secondary-container": "#d8deff",
                        "on-secondary-container": "#5a627e",
                        "on-surface-variant": "#3e4942",
                        "surface-dim": "#d8dadc",
                        "primary-fixed": "#8ef7c4",
                        "secondary": "#565d79",
                        "on-tertiary-fixed": "#00201f",
                        "primary-fixed-dim": "#72daa9",
                        "on-primary-fixed-variant": "#005236",
                        "on-secondary-fixed": "#131a33",
                        "primary-container": "#00855b",
                        "on-primary": "#ffffff",
                        "inverse-surface": "#2d3133",
                        "on-error": "#ffffff",
                        "secondary-fixed-dim": "#bec5e5",
                        "primary": "#006947",
                        "on-error-container": "#93000a",
                        "on-secondary-fixed-variant": "#3e4660",
                        "surface-container": "#eceef0",
                        "error-container": "#ffdad6",
                        "surface-container-highest": "#e0e3e5",
                        "on-tertiary-container": "#f3fffe",
                        "on-primary-fixed": "#002113",
                        "surface-variant": "#e0e3e5",
                        "tertiary": "#006766",
                        "outline": "#6e7a72",
                        "on-secondary": "#ffffff",
                        "tertiary-fixed": "#90f3f1",
                        "inverse-primary": "#72daa9",
                        "on-tertiary": "#ffffff",
                        "error": "#ba1a1a",
                        "inverse-on-surface": "#eff1f3",
                        "surface-bright": "#f7f9fb",
                        "surface-container-lowest": "#ffffff",
                        "on-tertiary-fixed-variant": "#00504f",
                        "on-background": "#191c1e",
                        "surface-tint": "#006c49"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    "spacing": {
                        "base": "4px",
                        "lg": "24px",
                        "sm": "8px",
                        "xl": "40px",
                        "container-max": "1280px",
                        "xs": "4px",
                        "gutter": "24px",
                        "md": "16px"
                    },
                    "fontFamily": {
                        "headline-xl": ["Hanken Grotesk"],
                        "body-lg": ["Work Sans"],
                        "label-sm": ["JetBrains Mono"],
                        "body-sm": ["Work Sans"],
                        "headline-lg": ["Hanken Grotesk"],
                        "label-md": ["JetBrains Mono"],
                        "headline-md": ["Hanken Grotesk"],
                        "headline-lg-mobile": ["Hanken Grotesk"],
                        "body-md": ["Work Sans"]
                    },
                    "fontSize": {
                        "headline-xl": ["48px", {
                            "lineHeight": "56px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "700"
                        }],
                        "body-lg": ["18px", {
                            "lineHeight": "28px",
                            "fontWeight": "400"
                        }],
                        "label-sm": ["12px", {
                            "lineHeight": "14px",
                            "fontWeight": "500"
                        }],
                        "body-sm": ["14px", {
                            "lineHeight": "20px",
                            "fontWeight": "400"
                        }],
                        "headline-lg": ["32px", {
                            "lineHeight": "40px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "label-md": ["14px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.05em",
                            "fontWeight": "500"
                        }],
                        "headline-md": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "600"
                        }],
                        "headline-lg-mobile": ["24px", {
                            "lineHeight": "32px",
                            "fontWeight": "700"
                        }],
                        "body-md": ["16px", {
                            "lineHeight": "24px",
                            "fontWeight": "400"
                        }]
                    }
                }
            }
        }
    </script>
    <link
        href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@600;700&family=Work+Sans:wght@400;500&family=JetBrains+Mono:wght@500&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0"
        rel="stylesheet">
</head>

<body class="bg-background font-body-md text-on-surface antialiased">

    <!-- SIDEBAR NAVBAR (matches catalog page) -->
    <aside class="fixed left-0 top-0 h-full w-[280px] bg-[#0B132B] text-white z-50 flex flex-col shadow-xl">
        <div class="px-lg py-xl flex items-center gap-md">
            <span class="material-symbols-outlined text-primary text-[32px]">two_wheeler</span>
            <span class="font-headline-md text-headline-md tracking-tighter uppercase">VELEX</span>
        </div>

        <!-- Mode Switcher -->
        <div class="px-md mb-lg">
            <form action="{{ route('user.switch-mode') }}" method="POST">
                @csrf
                <button type="submit"
                    class="w-full bg-[#0F8A5F] hover:bg-primary-container text-white py-sm px-md rounded-lg flex items-center justify-between transition-colors group">
                    <div class="flex flex-col items-start">
                        <span class="font-label-sm text-label-sm opacity-80 uppercase tracking-widest">Switch To</span>
                        <span class="font-label-md text-label-md font-bold">OWNER MODE</span>
                    </div>
                    <span class="material-symbols-outlined transition-transform group-hover:rotate-180">sync_alt</span>
                </button>
            </form>
        </div>

        <nav class="flex-1 px-base">
            <!-- Current Page Highlight: Dashboard -->
            <a aria-current="page" href="{{ route('dashboard') }}"
                class="flex items-center px-lg py-md mb-xs transition-all font-body-md bg-white/5 border-l-4 border-primary text-white">
                <span class="material-symbols-outlined mr-md">grid_view</span>Dashboard
            </a>

            <!-- Browse Motorbikes -->
            <a href="{{ route('catalog.index') }}"
                class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md">
                <span class="material-symbols-outlined mr-md">motorcycle</span>Browse Motorbikes
            </a>

            <!-- Active Rides -->
            <a href="{{ route('booking.index') }}"
                class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md">
                <span class="material-symbols-outlined mr-md">route</span>Active Rides
            </a>

            <!-- Wallet -->
            <a href="{{ route('wallet.index') }}"
                class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md">
                <span class="material-symbols-outlined mr-md">account_balance_wallet</span>Wallet
            </a>

            <!-- Settings -->
            <a href="{{ route('settings.index') }}"
                class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md {{ request()->routeIs('settings') ? 'text-white bg-white/10' : '' }}">
                <span class="material-symbols-outlined mr-md">settings</span>Settings
            </a>
        </nav>

        <!-- User Profile Footer -->
        <div class="mt-auto p-lg bg-black/20">
            <div class="flex items-center gap-md mb-md">
                <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center shrink-0">
                    <span class="material-symbols-outlined text-on-primary text-[20px]">person</span>
                </div>
                <div class="flex-1 min-w-0">
                    <div class="font-headline-md text-[16px] truncate">{{ $user_name }}</div>
                    <div class="font-label-sm text-label-sm text-white/40 uppercase tracking-wider">
                        {{ ucfirst(strtolower($rider_status)) }} Rider</div>
                </div>
                <button class="material-symbols-outlined text-white/60 hover:text-white">more_vert</button>
            </div>
        </div>
    </aside>

    <!-- MAIN CONTENT SPACE (offset by fixed sidebar width) -->
    <div class="pl-[280px] min-h-screen flex flex-col bg-slate-50 text-slate-900">
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
                <a href="{{ route('catalog.index') }}"
                    class="bg-primary-container hover:bg-primary text-on-primary font-bold py-3 px-6 rounded-xl flex items-center gap-2 transition-colors">
                    Rent a Motorbike
                    <span class="material-symbols-outlined">arrow_forward</span>
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
                <div class="lg:col-span-2" id="active-rides">
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
                                            <p
                                                class="text-[11px] font-bold text-slate-400 mt-0.5 uppercase tracking-wider">
                                                MODEL {{ $active_ride['model'] }} • LICENSE:
                                                {{ $active_ride['license'] }}
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
                                            <div class="text-[10px] font-bold tracking-wider text-amber-700 uppercase">
                                                Due
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
                                        <p class="text-[11px] font-semibold text-slate-400 mt-0.5">{{ $ride['date'] }}
                                            •
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
                        <p class="text-xs text-slate-400 font-medium mt-1 leading-relaxed">Get 20% off all
                            long-distance
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
    </div>

</body>

</html>
