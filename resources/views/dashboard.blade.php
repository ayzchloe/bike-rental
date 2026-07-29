<html lang="en"><head><meta charset="utf-8"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config={theme:{extend:{"colors":{"on-primary-container":"#f5fff6","surface-container-low":"#f2f4f6","secondary-fixed":"#dbe1ff","on-surface":"#191c1e","tertiary-fixed-dim":"#73d6d4","outline-variant":"#bdcac0","background":"#f7f9fb","surface-container-high":"#e6e8ea","surface":"#f7f9fb","tertiary-container":"#008281","secondary-container":"#d8deff","on-secondary-container":"#5a627e","on-surface-variant":"#3e4942","surface-dim":"#d8dadc","primary-fixed":"#8ef7c4","secondary":"#565d79","on-tertiary-fixed":"#00201f","primary-fixed-dim":"#72daa9","on-primary-fixed-variant":"#005236","on-secondary-fixed":"#131a33","primary-container":"#00855b","on-primary":"#ffffff","inverse-surface":"#2d3133","on-error":"#ffffff","secondary-fixed-dim":"#bec5e5","primary":"#006947","on-error-container":"#93000a","on-secondary-fixed-variant":"#3e4660","surface-container":"#eceef0","error-container":"#ffdad6","surface-container-highest":"#e0e3e5","on-tertiary-container":"#f3fffe","on-primary-fixed":"#002113","surface-variant":"#e0e3e5","tertiary":"#006766","outline":"#6e7a72","on-secondary":"#ffffff","tertiary-fixed":"#90f3f1","inverse-primary":"#72daa9","on-tertiary":"#ffffff","error":"#ba1a1a","inverse-on-surface":"#eff1f3","surface-bright":"#f7f9fb","surface-container-lowest":"#ffffff","on-tertiary-fixed-variant":"#00504f","on-background":"#191c1e","surface-tint":"#006c49"},"borderRadius":{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},"spacing":{"base":"4px","lg":"24px","sm":"8px","xl":"40px","container-max":"1280px","xs":"4px","gutter":"24px","md":"16px"},"fontFamily":{"headline-xl":["Hanken Grotesk"],"body-lg":["Work Sans"],"label-sm":["JetBrains Mono"],"body-sm":["Work Sans"],"headline-lg":["Hanken Grotesk"],"label-md":["JetBrains Mono"],"headline-md":["Hanken Grotesk"],"headline-lg-mobile":["Hanken Grotesk"],"body-md":["Work Sans"]},"fontSize":{"headline-xl":["48px",{"lineHeight":"56px","letterSpacing":"-0.02em","fontWeight":"700"}],"body-lg":["18px",{"lineHeight":"28px","fontWeight":"400"}],"label-sm":["12px",{"lineHeight":"14px","fontWeight":"500"}],"body-sm":["14px",{"lineHeight":"20px","fontWeight":"400"}],"headline-lg":["32px",{"lineHeight":"40px","letterSpacing":"-0.01em","fontWeight":"700"}],"label-md":["14px",{"lineHeight":"16px","letterSpacing":"0.05em","fontWeight":"500"}],"headline-md":["24px",{"lineHeight":"32px","fontWeight":"600"}],"headline-lg-mobile":["24px",{"lineHeight":"32px","fontWeight":"700"}],"body-md":["16px",{"lineHeight":"24px","fontWeight":"400"}]}}}}</script><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@600;700&amp;family=Work+Sans:wght@400;500&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/></head><body class="bg-background font-body-md text-on-surface"><aside class="fixed left-0 top-0 h-full w-[280px] bg-[#0B132B] text-white z-50 flex flex-col shadow-xl"><div class="px-lg py-xl flex items-center gap-md"><span class="material-symbols-outlined text-primary text-[32px]">two_wheeler</span><span class="font-headline-md text-headline-md tracking-tighter uppercase">VELEX</span></div><div class="px-md mb-lg"><button class="w-full bg-[#0F8A5F] hover:bg-primary-container text-white py-sm px-md rounded-lg flex items-center justify-between transition-colors group"><div class="flex flex-col items-start"><span class="font-label-sm text-label-sm opacity-80 uppercase tracking-widest">Switch To</span><span class="font-label-md text-label-md font-bold">OWNER MODE</span></div><span class="material-symbols-outlined transition-transform group-hover:rotate-180">sync_alt</span></button></div>
<nav class="flex-1 px-base" data-active-classes="bg-white/5 border-l-4 border-primary text-white">
    <!-- Current Page Highlight: Dashboard -->
    <a aria-current="page" class="flex items-center px-lg py-md mb-xs transition-all font-body-md bg-white/5 border-l-4 border-primary text-white" data-path="dashboard" href="{{ route('dashboard') }}"><span class="material-symbols-outlined mr-md">grid_view</span>Dashboard</a>

    <!-- Wired Catalog Route -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="browse-motorbikes" href="{{ route('catalog.index') }}"><span class="material-symbols-outlined mr-md">motorcycle</span>Browse Motorbikes</a>

    <!-- Wired Active Rides Section back to Tracking anchors -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="active-rides" href="{{ route('dashboard') }}"><span class="material-symbols-outlined mr-md">route</span>Active Rides</a>

    <!-- Wired Wallet Route -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="wallet" href="{{ route('wallet.index') }}"><span class="material-symbols-outlined mr-md">account_balance_wallet</span>Wallet</a>

    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="settings" href="#"><span class="material-symbols-outlined mr-md">settings</span>Settings</a>
</nav>
<!-- AFTER -->
<div class="font-headline-md text-[16px] truncate">{{ Auth::user()->name ?? 'Guest Rider' }}</div>
<!-- Header Section: High Contrast Editorial Layout -->
<section class="relative px-xl py-xl overflow-hidden">
<div class="relative z-10 flex flex-col md:flex-row md:items-end justify-between gap-lg">
<div class="max-w-2xl">
<div class="flex items-center gap-sm mb-md">
<span class="w-8 h-[2px] bg-primary"></span>
<span class="font-label-md text-label-md text-primary uppercase tracking-[0.2em]">Rider Status: Intermediate</span>
</div>
<h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tighter">
                    Welcome Back, {{ Auth::user()->name }}!<br/>
<span class="text-on-surface-variant/60">Ready for your next ride?</span>
</h1>
</div>
<div class="pb-base">
<a href="{{ route('catalog.index') }}" class="group inline-flex items-center gap-md bg-primary text-on-primary px-lg py-md rounded-xl shadow-lg hover:shadow-primary/20 transition-all hover:-translate-y-1">
<span class="font-headline-md text-[18px]">Rent a Motorbike</span>
<span class="material-symbols-outlined transition-transform group-hover:translate-x-2">arrow_forward</span>
</a>
</div>
</div>
<!-- Decorative Ambient Background -->
<div class="absolute top-0 right-0 -mr-24 -mt-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
</section>
<!-- Metrics Grid: Asymmetric Bento Style -->
<section class="px-xl mb-xl">
<div class="grid grid-cols-1 md:grid-cols-3 gap-gutter">
<!-- Active Rides -->
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-sm flex flex-col justify-between group hover:bg-on-primary-container transition-colors border-l-4 border-primary">
<div class="flex justify-between items-start mb-xl">
<div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
<span class="material-symbols-outlined text-[28px]">route</span>
</div>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-widest">Real-time</span>
</div>
<div>
<div class="font-headline-xl text-headline-xl text-on-surface mb-xs" id="counter-rides">1</div>
<div class="font-body-md text-body-md text-on-surface-variant">Active Rides</div>
</div>
</div>
<!-- Wallet -->
<div class="bg-surface-container-lowest p-lg rounded-xl shadow-sm flex flex-col justify-between group hover:bg-secondary-container transition-colors">
<div class="flex justify-between items-start mb-xl">
<div class="w-12 h-12 rounded-lg bg-secondary/10 flex items-center justify-center text-secondary">
<span class="material-symbols-outlined text-[28px]">account_balance_wallet</span>
</div>
<a href="{{ route('wallet.index') }}" class="text-secondary hover:underline font-label-sm text-label-sm uppercase tracking-tighter">Top Up</a>
</div>
<div>
<div class="font-headline-xl text-headline-xl text-on-surface mb-xs flex items-baseline gap-xs">
<span class="text-headline-md opacity-40">$</span>30.00
                    </div>
<div class="font-body-md text-body-md text-on-surface-variant">Current Balance</div>
</div>
</div>
<!-- Total Spent -->
<div class="bg-inverse-surface p-lg rounded-xl shadow-xl flex flex-col justify-between relative overflow-hidden">
<div class="relative z-10">
<div class="flex justify-between items-start mb-xl">
<div class="w-12 h-12 rounded-lg bg-white/10 flex items-center justify-center text-white">
<span class="material-symbols-outlined text-[28px]">payments</span>
</div>
<div class="flex items-center gap-xs text-primary-fixed font-label-sm">
<span class="material-symbols-outlined text-sm">trending_up</span>
<span>+12%</span>
</div>
</div>
<div>
<div class="font-headline-xl text-headline-xl text-white mb-xs flex items-baseline gap-xs">
<span class="text-headline-md opacity-40">$</span>770.00
                        </div>
<div class="font-body-md text-body-md text-white/60">Lifetime Spend</div>
</div>
</div>
<!-- Mini Sparkline SVG -->
<div class="absolute bottom-0 left-0 right-0 h-16 opacity-20">
<svg class="w-full h-full preserve-3d" preserveaspectratio="none" viewbox="0 0 100 40">
<path class="text-primary" d="M0 35 Q 20 10, 40 25 T 80 5 T 100 20 V 40 H 0 Z" fill="currentColor"></path>
</svg>
</div>
</div>
</div>
</section>
<!-- Main Content Area: Live Tracking & Featured -->
<section class="px-xl grid grid-cols-1 lg:grid-cols-12 gap-xl items-start pb-xl">
<!-- Live Tracking Card (Left 8 cols) -->
<div class="lg:col-span-8 space-y-lg">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-on-surface">Live Tracking</h3>
<div class="flex items-center gap-sm">
<span class="w-2 h-2 rounded-full bg-error animate-pulse"></span>
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase">Active Session</span>
</div>
</div>
<div class="bg-surface-container-lowest rounded-xl shadow-md overflow-hidden flex flex-col md:flex-row">
<!-- Map Preview Side -->
<div class="md:w-1/2 h-64 md:h-auto relative">
<div class="w-full h-full bg-cover bg-center" data-location="Karachi, Pakistan" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDlTXJtOv74KANGHaRbcRs_arOuxpmkLsDzaZy1y5pYXFeXW-qYydobZZkckYFV6si-Qr0OWanKimP8DkFF5PEQ8O6V6JJv2664ahDgoACPK2-Eeg1V6nltpnP-1Tee5tuSPvLX0DVpRN9b3WMWNkABZ2qOlMOeFK7k6qejxbvMMlmL4bhfXddkdcFbYeb6_oUsMBSDoCIsdbmoSOvcnWZ8-9KrM0yylzO_bwWr6jQwLAqfwOWHvpUM')"></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-md">
<div class="flex items-center gap-sm text-white">
<span class="material-symbols-outlined text-primary">location_on</span>
<span class="font-body-sm">Currently at: Khayaban-e-Ittehad</span>
</div>
</div>
</div>
<!-- Info Side -->
<div class="md:w-1/2 p-lg flex flex-col justify-between bg-white">
<div>
<div class="flex justify-between items-start mb-md">
<div>
<h4 class="font-headline-md text-headline-md text-on-surface">Honda CD70 Standard</h4>
<p class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-tighter">Model A • License: KHI-7821</p>
</div>
<div class="bg-surface-container-high px-sm py-xs rounded flex flex-col items-center">
<span class="material-symbols-outlined text-primary">battery_full</span>
<span class="font-label-sm text-[10px]">88%</span>
</div>
</div>
<!-- Countdown Banner -->
<div class="bg-amber-50 p-md rounded-lg flex items-center gap-md mb-lg">
<div class="w-10 h-10 rounded-full bg-amber-100 flex items-center justify-center text-amber-700">
<span class="material-symbols-outlined">schedule</span>
</div>
<div>
<div class="font-label-sm text-amber-800 font-bold uppercase tracking-widest">Due Return</div>
<div class="font-body-md text-amber-900">Today, 6:00 PM (2h 15m left)</div>
</div>
</div>
</div>
<div class="grid grid-cols-2 gap-md">
<button class="py-sm px-md border-2 border-outline-variant text-on-surface hover:bg-surface-container transition-colors rounded-lg font-label-md">
                            Extend Time
                        </button>
<button class="py-sm px-md bg-error text-on-error hover:opacity-90 transition-opacity rounded-lg font-label-md">
                            End Ride
                        </button>
</div>
</div>
</div>
</div>
<!-- Recent Activity & Recommendations (Right 4 cols) -->
<div class="lg:col-span-4 space-y-lg">
<h3 class="font-headline-md text-headline-md text-on-surface">Recent Rides</h3>
<div class="space-y-md">
<!-- Activity Item 1 -->
<div class="flex items-center gap-md p-md bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-colors cursor-pointer group">
<div class="w-14 h-14 rounded-lg overflow-hidden shrink-0">
<img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Close up photo of a sleek black Yamaha MT-07 parked against a minimalist concrete wall, evening lighting, cinematic shadow play." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDwDXY-Yx5N7H1VdM93u3Z6gfv4spjnMs3PURRF4IMePQ5AkonqAQ8qvf9gmc7PJ0Z12Qk_cKOYhz5aYOdutnD_90PX6chs1Zr_so-7rwsLb4gZi0poJgARqk3vTQ6fGRvqQsXK3oVELFtK5UNMMMjLDbI4G3Kyl4nt9gLnVESHHPRU8o98G_LWhTFFSXbMUvfRsp8AQAaTAB0L4KTORBLXPmOlc_3pb6dTuNUn9Y3iRXShvmECU3Zh"/>
</div>
<div class="flex-1 min-w-0">
<div class="font-body-md font-bold truncate">Yamaha MT-07</div>
<div class="font-label-sm text-on-surface-variant">Last Thursday • 4h 20m</div>
</div>
<div class="font-label-md text-on-surface">$45.00</div>
</div>
<!-- Activity Item 2 -->
<div class="flex items-center gap-md p-md bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-colors cursor-pointer group">
<div class="w-14 h-14 rounded-lg overflow-hidden shrink-0">
<img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Side profile of a red Vespa Primavera scooter in a bright Italian-style alleyway, soft afternoon sunlight, vibrant colors." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-lC-_VJQXZLJOh0fhwW5DUcWImcplZ39BGvGEOG_pyS8BG0HSgImKm2xA54HnHKA2PeMzmYKUOvrr3CvF0_WIZtruhqN-_MFXEYp6TG5R9XHRtjrlCwB6J2XJRzjNtXUuqhnwROTIjZa1EG5sumTO2foA_C2wDbrQRbXz6OphPaJePxN7_nuhHNaY8NU6cawSilvodG6NUzAjaJSJAu5E3q_U2dOy30e9Z0wxsi0v85kJpSsf8q0c"/>
</div>
<div class="flex-1 min-w-0">
<div class="font-body-md font-bold truncate">Vespa Primavera 150</div>
<div class="font-label-sm text-on-surface-variant">March 12 • 1h 15m</div>
</div>
<div class="font-label-md text-on-surface">$12.50</div>
</div>
<!-- Activity Item 3 -->
<div class="flex items-center gap-md p-md bg-surface-container-low rounded-xl hover:bg-surface-container-high transition-colors cursor-pointer group">
<div class="w-14 h-14 rounded-lg overflow-hidden shrink-0">
<img class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" data-alt="Detail of a classic Royal Enfield Himalayan motorcycle engine and rugged frame, dusty adventure aesthetic, high-end photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQfoaAH1sLQE-7wwmwi2dwZbPYINrq55bzAlcox0a6_LNzSama7-iBq_e4cVhHJ5s5xkvZ1_awYWG1wZG1xJ-8G7cPmAj_rBNOjX3FnOPS2EOLgX-0J5R0Q638K_iYaAIFnLud1JAxwxQTBfrsjDGMdBVtZHCjsRMh7MCs4MdN1IdlRzdXZnXF1igOGawIxkZkZhmWInheKXt58NLUwZ_ctgWfnBDDXVheekJhUfz48LIf6Z6n9Zo6"/>
</div>
<div class="flex-1 min-w-0">
<div class="font-body-md font-bold truncate">Royal Enfield Himalayan</div>
<div class="font-label-sm text-on-surface-variant">March 08 • 8h 00m</div>
</div>
<div class="font-label-md text-on-surface">$82.00</div>
</div>
</div>
<!-- Promotion Card -->
<div class="bg-primary text-on-primary p-lg rounded-xl relative overflow-hidden group">
<div class="relative z-10">
<div class="font-label-sm text-label-sm opacity-80 uppercase tracking-widest mb-xs">Pro Rider Offer</div>
<div class="font-headline-md text-headline-md mb-md">Unlock Unlimited Weekends</div>
<p class="font-body-sm mb-lg opacity-90">Get 20% off all long-distance rentals starting Friday evening.</p>
<button class="w-full bg-white text-primary py-sm rounded-lg font-headline-md text-[16px] group-hover:scale-[1.02] transition-transform">Claim Offer</button>
</div>
<span class="material-symbols-outlined absolute -bottom-4 -right-4 text-[120px] opacity-10 group-hover:rotate-12 transition-transform">speed</span>
</div>
</div>
</section>
</div>
<script>
    // Micro-interaction: Number ticker effect for active rides
    document.addEventListener('DOMContentLoaded', () => {
        const counter = document.getElementById('counter-rides');
        let count = 0;
        const target = 1;
        const interval = setInterval(() => {
            if (count < target) {
                count++;
                counter.innerText = count;
            } else {
                clearInterval(interval);
            }
        }, 200);
    });
</script></main></div></body></html>
