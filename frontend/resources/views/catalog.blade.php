<html lang="en"><head><meta charset="utf-8"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config={theme:{extend:{"colors":{"on-primary-container":"#f5fff6","surface-container-low":"#f2f4f6","secondary-fixed":"#dbe1ff","on-surface":"#191c1e","tertiary-fixed-dim":"#73d6d4","outline-variant":"#bdcac0","background":"#f7f9fb","surface-container-high":"#e6e8ea","surface":"#f7f9fb","tertiary-container":"#008281","secondary-container":"#d8deff","on-secondary-container":"#5a627e","on-surface-variant":"#3e4942","surface-dim":"#d8dadc","primary-fixed":"#8ef7c4","secondary":"#565d79","on-tertiary-fixed":"#00201f","primary-fixed-dim":"#72daa9","on-primary-fixed-variant":"#005236","on-secondary-fixed":"#131a33","primary-container":"#00855b","on-primary":"#ffffff","inverse-surface":"#2d3133","on-error":"#ffffff","secondary-fixed-dim":"#bec5e5","primary":"#006947","on-error-container":"#93000a","on-secondary-fixed-variant":"#3e4660","surface-container":"#eceef0","error-container":"#ffdad6","surface-container-highest":"#e0e3e5","on-tertiary-container":"#f3fffe","on-primary-fixed":"#002113","surface-variant":"#e0e3e5","tertiary":"#006766","outline":"#6e7a72","on-secondary":"#ffffff","tertiary-fixed":"#90f3f1","inverse-primary":"#72daa9","on-tertiary":"#ffffff","error":"#ba1a1a","inverse-on-surface":"#eff1f3","surface-bright":"#f7f9fb","surface-container-lowest":"#ffffff","on-tertiary-fixed-variant":"#00504f","on-background":"#191c1e","surface-tint":"#006c49"},"borderRadius":{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},"spacing":{"base":"4px","lg":"24px","sm":"8px","xl":"40px","container-max":"1280px","xs":"4px","gutter":"24px","md":"16px"},"fontFamily":{"headline-xl":["Hanken Grotesk"],"body-lg":["Work Sans"],"label-sm":["JetBrains Mono"],"body-sm":["Work Sans"],"headline-lg":["Hanken Grotesk"],"label-md":["JetBrains Mono"],"headline-md":["Hanken Grotesk"],"headline-lg-mobile":["Hanken Grotesk"],"body-md":["Work Sans"]},"fontSize":{"headline-xl":["48px",{"lineHeight":"56px","letterSpacing":"-0.02em","fontWeight":"700"}],"body-lg":["18px",{"lineHeight":"28px","fontWeight":"400"}],"label-sm":["12px",{"lineHeight":"14px","fontWeight":"500"}],"body-sm":["14px",{"lineHeight":"20px","fontWeight":"400"}],"headline-lg":["32px",{"lineHeight":"40px","letterSpacing":"-0.01em","fontWeight":"700"}],"label-md":["14px",{"lineHeight":"16px","letterSpacing":"0.05em","fontWeight":"500"}],"headline-md":["24px",{"lineHeight":"32px","fontWeight":"600"}],"headline-lg-mobile":["24px",{"lineHeight":"32px","fontWeight":"700"}],"body-md":["16px",{"lineHeight":"24px","fontWeight":"400"}]}}}}</script><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@600;700&amp;family=Work+Sans:wght@400;500&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/></head><body class="bg-background font-body-md text-on-surface"><aside class="fixed left-0 top-0 h-full w-[280px] bg-[#0B132B] text-white z-50 flex flex-col shadow-xl"><div class="px-lg py-xl flex items-center gap-md"><span class="material-symbols-outlined text-primary text-[32px]">two_wheeler</span><span class="font-headline-md text-headline-md tracking-tighter uppercase">VELEX</span></div><div class="px-md mb-lg"><form action="{{ route('user.switch-mode') }}" method="POST">@csrf<button type="submit" class="w-full bg-[#0F8A5F] hover:bg-primary-container text-white py-sm px-md rounded-lg flex items-center justify-between transition-colors group"><div class="flex flex-col items-start"><span class="font-label-sm text-label-sm opacity-80 uppercase tracking-widest">Switch To</span><span class="font-label-md text-label-md font-bold">OWNER MODE</span></div><span class="material-symbols-outlined transition-transform group-hover:rotate-180">sync_alt</span></button></form></div><nav class="flex-1 px-base" data-active-classes="bg-white/5 border-l-4 border-primary text-white">
    <!-- Wired Dashboard Route -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="dashboard" href="{{ route('dashboard') }}"><span class="material-symbols-outlined mr-md">grid_view</span>Dashboard</a>

    <!-- Current Page Highlight: Browse Motorbikes -->
    <a aria-current="page" class="flex items-center px-lg py-md mb-xs transition-all font-body-md bg-white/5 border-l-4 border-primary text-white" data-path="browse-motorbikes" href="{{ route('catalog.index') }}"><span class="material-symbols-outlined mr-md">motorcycle</span>Browse Motorbikes</a>

    <!-- Wired Active Rides Section back to Tracking anchors -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="active-rides" href="{{ route('dashboard') }}#active-rides"><span class="material-symbols-outlined mr-md">route</span>Active Rides</a>

    <!-- Wired Wallet Route -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="wallet" href="{{ route('wallet.index') }}"><span class="material-symbols-outlined mr-md">account_balance_wallet</span>Wallet</a>

    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="settings" href="{{ route('settings.index') }}"><span class="material-symbols-outlined mr-md">settings</span>Settings</a>
</nav><div class="mt-auto p-lg bg-black/20 relative"><div class="flex items-center gap-md mb-md"><div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-on-primary text-[20px]">person</span></div><div class="flex-1 min-w-0"><div class="font-headline-md text-[16px] truncate">{{ $user_name }}</div><div class="font-label-sm text-label-sm text-white/40 uppercase tracking-wider">{{ ucfirst(strtolower($rider_status)) }} Rider</div></div><button onclick="document.getElementById('sidebar-menu').classList.toggle('hidden')" class="material-symbols-outlined text-white/60 hover:text-white">more_vert</button></div><div id="sidebar-menu" class="hidden absolute bottom-full right-lg mb-sm bg-[#111A33] border border-white/10 rounded-lg shadow-xl overflow-hidden w-40"><a href="{{ route('settings.index') }}" class="flex items-center gap-sm px-md py-sm text-label-sm text-white/70 hover:bg-white/5 hover:text-white transition-colors"><span class="material-symbols-outlined text-[18px]">settings</span>Settings</a><form action="{{ route('logout') }}" method="POST">@csrf<button type="submit" class="w-full flex items-center gap-sm px-md py-sm text-label-sm text-white/70 hover:bg-white/5 hover:text-white transition-colors text-left"><span class="material-symbols-outlined text-[18px]">logout</span>Log out</button></form></div></div></aside><div class="pl-[280px] min-h-screen flex flex-col"><header class="fixed top-0 left-[280px] right-0 h-16 bg-surface/80 backdrop-blur-xl z-40 flex items-center justify-end px-lg gap-lg"><form action="{{ route('catalog.index') }}" method="GET" class="flex-1 flex items-center px-md text-on-surface-variant"><span class="material-symbols-outlined mr-sm">search</span><input type="text" name="q" value="{{ $search_term }}" placeholder="Search for bikes or locations..." class="w-full bg-transparent border-none focus:outline-none font-body-sm text-body-sm text-on-surface placeholder:text-on-surface-variant"/></form><div class="flex items-center gap-md relative"><button onclick="document.getElementById('notif-menu').classList.toggle('hidden')" class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined text-on-surface-variant">notifications</span></button><div id="notif-menu" class="hidden absolute top-12 right-16 bg-white shadow-xl rounded-lg border border-outline-variant/10 w-64 p-lg text-center"><span class="font-body-sm text-body-sm text-on-surface-variant">No new notifications.</span></div><button onclick="document.getElementById('avatar-menu').classList.toggle('hidden')" class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></button><div id="avatar-menu" class="hidden absolute top-12 right-0 bg-white shadow-xl rounded-lg border border-outline-variant/10 w-48 overflow-hidden"><a href="{{ route('settings.index') }}" class="flex items-center gap-sm px-md py-md text-body-sm text-on-surface hover:bg-surface-container transition-colors"><span class="material-symbols-outlined text-[18px]">settings</span>Settings</a><form action="{{ route('logout') }}" method="POST">@csrf<button type="submit" class="w-full flex items-center gap-sm px-md py-md text-body-sm text-on-surface hover:bg-surface-container transition-colors text-left"><span class="material-symbols-outlined text-[18px]">logout</span>Log out</button></form></div></div></header><main class="relative pt-16 flex-1 bg-surface-container-lowest"><div class="flex flex-col w-full">
@if (session('status'))
<div class="mx-xl mt-lg bg-primary/10 border border-primary/30 text-primary font-label-sm text-label-sm px-lg py-md rounded-lg">{{ session('status') }}</div>
@endif
@if ($errors->any())
<div class="mx-xl mt-lg bg-error/10 border border-error/30 text-error font-label-sm text-label-sm px-lg py-md rounded-lg">{{ $errors->first() }}</div>
@endif
<!-- Header Section: Context & Filter Ribbon -->
<section class="px-xl py-xl bg-surface-container-lowest">
<div class="flex flex-col gap-xl">
<!-- Typography & Title -->
<div class="flex justify-between items-end">
<div class="max-w-2xl">
<span class="font-label-md text-label-md text-primary uppercase tracking-[0.2em] mb-md block">Premium Fleet</span>
<h1 class="font-headline-xl text-headline-xl text-on-surface">Find Your Perfect <br/><span class="text-primary">Urban Companion.</span></h1>
</div>
</div>
<!-- Filter Ribbon: Master Tool -->
<form action="{{ route('catalog.index') }}" method="GET" class="relative">
<div class="absolute -inset-1 bg-gradient-to-r from-primary/20 via-transparent to-secondary/10 blur-xl opacity-50"></div>
<div class="relative bg-white shadow-xl rounded-full px-lg py-md flex flex-wrap lg:flex-nowrap items-center gap-md border border-outline-variant/10">
<!-- Search -->
<div class="flex-1 flex items-center gap-md px-md border-r border-outline-variant/20">
<span class="material-symbols-outlined text-primary">search</span>
<div class="flex flex-col min-w-0 w-full">
<span class="font-label-sm text-[10px] text-on-surface-variant uppercase tracking-widest">Search</span>
<input type="text" name="q" value="{{ $search_term }}" placeholder="Name, model, or location" class="font-body-md text-body-md font-semibold bg-transparent border-none focus:outline-none w-full"/>
</div>
</div>
<!-- Model -->
<div class="flex-1 flex items-center gap-md px-md border-r border-outline-variant/20">
<span class="material-symbols-outlined text-primary">motorcycle</span>
<div class="flex flex-col min-w-0 w-full">
<span class="font-label-sm text-[10px] text-on-surface-variant uppercase tracking-widest">Model</span>
<select name="model" class="font-body-md text-body-md font-semibold bg-transparent border-none focus:outline-none w-full">
<option value="">All Models</option>
@foreach ($available_models as $model)
<option value="{{ $model }}" @selected($model_filter === $model)>{{ $model }}</option>
@endforeach
</select>
</div>
</div>
<!-- Sort -->
<div class="flex-1 flex items-center gap-md px-md">
<span class="material-symbols-outlined text-primary">sort</span>
<div class="flex flex-col min-w-0 w-full">
<span class="font-label-sm text-[10px] text-on-surface-variant uppercase tracking-widest">Sort By</span>
<select name="sort" class="font-body-md text-body-md font-semibold bg-transparent border-none focus:outline-none w-full">
<option value="" @selected($sort_by === '')>Name</option>
<option value="price_low" @selected($sort_by === 'price_low')>Price: Low to High</option>
<option value="price_high" @selected($sort_by === 'price_high')>Price: High to Low</option>
<option value="battery" @selected($sort_by === 'battery')>Battery</option>
</select>
</div>
</div>
<!-- Action -->
<button type="submit" class="bg-primary hover:bg-primary-container text-on-primary h-14 px-xl rounded-full flex items-center gap-md transition-all group active:scale-95 shadow-lg shadow-primary/20">
<span class="font-label-md text-label-md font-bold uppercase tracking-widest">Search</span>
<span class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
</button>
</div>
</form>
</div>
</section>
<!-- Catalog Grid -->
<section class="px-xl py-xl bg-surface-container-low">
@if ($bikes->isEmpty())
<div class="flex flex-col items-center justify-center py-xl text-center gap-md">
<span class="material-symbols-outlined text-on-surface-variant text-[48px]">motorcycle</span>
<h3 class="font-headline-md text-headline-md text-on-surface">No bikes available right now</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-sm">Every bike in the fleet is currently out on a ride. Check back shortly.</p>
</div>
@else
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-xl">
@foreach ($bikes as $bike)
<div class="group bg-surface-container-lowest rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-500 flex flex-col">
<div class="relative aspect-[4/3] overflow-hidden bg-surface-container">
<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="{{ $bike->name }}" src="{{ $bike->image_url ?? 'https://placehold.co/600x450?text=' . urlencode($bike->name) }}"/>
<div class="absolute top-md left-md">
<span class="bg-primary/90 backdrop-blur-md text-on-primary font-label-sm text-[10px] px-md py-sm rounded-full tracking-[0.15em] uppercase">Available Now</span>
</div>
<form action="{{ route('bikes.favorite', $bike) }}" method="POST" class="absolute top-md right-md">
@csrf
<button type="submit" class="w-10 h-10 bg-white/20 backdrop-blur-md rounded-full flex items-center justify-center transition-all {{ in_array($bike->id, $favorite_bike_ids) ? 'text-error bg-white' : 'text-white hover:bg-white hover:text-error' }}">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' {{ in_array($bike->id, $favorite_bike_ids) ? 1 : 0 }};">favorite</span>
</button>
</form>
</div>
<div class="p-lg flex-1 flex flex-col">
<div class="flex justify-between items-start mb-sm">
<h3 class="font-headline-md text-headline-md text-on-surface">{{ $bike->name }}</h3>
<div class="flex items-center gap-xs">
<span class="material-symbols-outlined text-[18px] text-yellow-500" style="font-variation-settings: 'FILL' 1;">battery_charging_full</span>
<span class="font-label-md text-label-md">{{ $bike->battery }}%</span>
</div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-lg line-clamp-2">{{ $bike->model }} &middot; Plate {{ $bike->license }}</p>
<div class="grid grid-cols-2 gap-md py-md border-y border-outline-variant/10 mb-lg">
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">pin_drop</span>
<span class="font-label-sm text-label-sm text-on-surface truncate">{{ $bike->last_known_address ?? 'Location unavailable' }}</span>
</div>
<div class="flex items-center gap-sm">
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">settings</span>
<span class="font-label-sm text-label-sm text-on-surface">{{ $bike->model }}</span>
</div>
</div>
<div class="mt-auto flex items-center justify-between">
<div class="flex flex-col">
<span class="font-label-sm text-[10px] text-on-surface-variant uppercase tracking-widest">Rate</span>
<div class="flex items-baseline gap-xs">
<span class="font-headline-md text-headline-md text-primary">${{ number_format($bike->hourly_rate, 0) }}</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">/ hr</span>
</div>
</div>
<form action="{{ route('rides.start', $bike) }}" method="POST">
@csrf
<button type="submit" class="bg-on-surface text-surface px-lg py-md rounded-lg font-label-md text-label-md uppercase tracking-widest hover:bg-primary transition-colors">Book Ride</button>
</form>
</div>
</div>
</div>
@endforeach
</div>
@endif
<!-- Pagination Footer -->
<div class="mt-xl pt-xl flex flex-col items-center gap-lg">
<div class="w-full max-w-md h-[1px] bg-gradient-to-r from-transparent via-outline-variant/30 to-transparent"></div>
<div class="flex flex-col items-center">
<span class="font-label-sm text-label-sm text-on-surface-variant uppercase tracking-[0.25em] mb-md">Viewing {{ $bikes->count() }} of {{ $bikes->count() }} motorbikes</span>
</div>
</div>
</section>
<!-- Visual Accent Element -->
<div class="fixed bottom-lg right-lg z-10">
<a href="mailto:support@velex.test" class="w-14 h-14 bg-primary text-on-primary rounded-full shadow-2xl flex items-center justify-center hover:scale-110 transition-transform active:rotate-12">
<span class="material-symbols-outlined">help_outline</span>
</a>
</div>
</div>
</main></div></body></html>
