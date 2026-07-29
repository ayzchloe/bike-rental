<html lang="en"><head><meta charset="utf-8"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config={theme:{extend:{"colors":{"on-primary-container":"#f5fff6","surface-container-low":"#f2f4f6","secondary-fixed":"#dbe1ff","on-surface":"#191c1e","tertiary-fixed-dim":"#73d6d4","outline-variant":"#bdcac0","background":"#f7f9fb","surface-container-high":"#e6e8ea","surface":"#f7f9fb","tertiary-container":"#008281","secondary-container":"#d8deff","on-secondary-container":"#5a627e","on-surface-variant":"#3e4942","surface-dim":"#d8dadc","primary-fixed":"#8ef7c4","secondary":"#565d79","on-tertiary-fixed":"#00201f","primary-fixed-dim":"#72daa9","on-primary-fixed-variant":"#005236","on-secondary-fixed":"#131a33","primary-container":"#00855b","on-primary":"#ffffff","inverse-surface":"#2d3133","on-error":"#ffffff","secondary-fixed-dim":"#bec5e5","primary":"#006947","on-error-container":"#93000a","on-secondary-fixed-variant":"#3e4660","surface-container":"#eceef0","error-container":"#ffdad6","surface-container-highest":"#e0e3e5","on-tertiary-container":"#f3fffe","on-primary-fixed":"#002113","surface-variant":"#e0e3e5","tertiary":"#006766","outline":"#6e7a72","on-secondary":"#ffffff","tertiary-fixed":"#90f3f1","inverse-primary":"#72daa9","on-tertiary":"#ffffff","error":"#ba1a1a","inverse-on-surface":"#eff1f3","surface-bright":"#f7f9fb","surface-container-lowest":"#ffffff","on-tertiary-fixed-variant":"#00504f","on-background":"#191c1e","surface-tint":"#006c49"},"borderRadius":{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},"spacing":{"base":"4px","lg":"24px","sm":"8px","xl":"40px","container-max":"1280px","xs":"4px","gutter":"24px","md":"16px"},"fontFamily":{"headline-xl":["Hanken Grotesk"],"body-lg":["Work Sans"],"label-sm":["JetBrains Mono"],"body-sm":["Work Sans"],"headline-lg":["Hanken Grotesk"],"label-md":["JetBrains Mono"],"headline-md":["Hanken Grotesk"],"headline-lg-mobile":["Hanken Grotesk"],"body-md":["Work Sans"]},"fontSize":{"headline-xl":["48px",{"lineHeight":"56px","letterSpacing":"-0.02em","fontWeight":"700"}],"body-lg":["18px",{"lineHeight":"28px","fontWeight":"400"}],"label-sm":["12px",{"lineHeight":"14px","fontWeight":"500"}],"body-sm":["14px",{"lineHeight":"20px","fontWeight":"400"}],"headline-lg":["32px",{"lineHeight":"40px","letterSpacing":"-0.01em","fontWeight":"700"}],"label-md":["14px",{"lineHeight":"16px","letterSpacing":"0.05em","fontWeight":"500"}],"headline-md":["24px",{"lineHeight":"32px","fontWeight":"600"}],"headline-lg-mobile":["24px",{"lineHeight":"32px","fontWeight":"700"}],"body-md":["16px",{"lineHeight":"24px","fontWeight":"400"}]}}}}</script><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@600;700&amp;family=Work+Sans:wght@400;500&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/></head><body class="bg-background font-body-md text-on-surface"><aside class="fixed left-0 top-0 h-full w-[280px] bg-[#0B132B] text-white z-50 flex flex-col shadow-xl"><div class="px-lg py-xl flex items-center gap-md"><span class="material-symbols-outlined text-primary text-[32px]">two_wheeler</span><span class="font-headline-md text-headline-md tracking-tighter uppercase">VELEX</span></div><div class="px-md mb-lg"><button class="w-full bg-[#0F8A5F] hover:bg-primary-container text-white py-sm px-md rounded-lg flex items-center justify-between transition-colors group"><div class="flex flex-col items-start"><span class="font-label-sm text-label-sm opacity-80 uppercase tracking-widest">Switch To</span><span class="font-label-md text-label-md font-bold">OWNER MODE</span></div><span class="material-symbols-outlined transition-transform group-hover:rotate-180">sync_alt</span></button></div>
<nav class="flex-1 px-base" data-active-classes="bg-white/5 border-l-4 border-primary text-white">
    <!-- Wired Dashboard Route -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="dashboard" href="{{ route('dashboard') }}"><span class="material-symbols-outlined mr-md">grid_view</span>Dashboard</a>

    <!-- Wired Catalog Route -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="browse-motorbikes" href="{{ route('catalog.index') }}"><span class="material-symbols-outlined mr-md">motorcycle</span>Browse Motorbikes</a>

    <!-- Wired Active Rides Section directly back to Dashboard tracking module -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="active-rides" href="{{ route('dashboard') }}#active-rides"><span class="material-symbols-outlined mr-md">route</span>Active Rides</a>

    <!-- Current Page Highlight: Wallet -->
    <a aria-current="page" class="flex items-center px-lg py-md mb-xs transition-all font-body-md bg-white/5 border-l-4 border-primary text-white" data-path="wallet" href="{{ route('wallet.index') }}"><span class="material-symbols-outlined mr-md">account_balance_wallet</span>Wallet</a>

    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="settings" href="#"><span class="material-symbols-outlined mr-md">settings</span>Settings</a>
</nav>
<div class="mt-auto p-lg bg-black/20"><div class="flex items-center gap-md mb-md"><div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-on-primary text-[20px]">person</span></div><div class="flex-1 min-w-0"><div class="font-headline-md text-[16px] truncate">Inter</div><div class="font-label-sm text-label-sm text-white/40 uppercase tracking-wider">Rider Tier</div></div><button class="material-symbols-outlined text-white/60 hover:text-white">more_vert</button></div></div></aside><div class="pl-[280px] min-h-screen flex flex-col"><header class="fixed top-0 left-[280px] right-0 h-16 bg-surface/80 backdrop-blur-xl z-40 flex items-center justify-end px-lg gap-lg"><div class="flex-1 flex items-center px-md text-on-surface-variant"><span class="material-symbols-outlined mr-sm">search</span><span class="font-body-sm text-body-sm">Search for bikes or locations...</span></div><div class="flex items-center gap-md"><button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined text-on-surface-variant">notifications</span></button><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div></div></header><main class="relative pt-16 flex-1 bg-surface-container-lowest"><div class="flex flex-col w-full">
<!-- Top Section: Cards & Quick Actions -->
<section class="px-xl py-xl bg-surface-container-low">
<div class="flex flex-col lg:flex-row gap-xl items-start">
<!-- Primary Card Display -->
<div class="w-full lg:w-2/3 flex flex-col gap-lg">
<div class="flex items-end justify-between">
<div>
<span class="font-label-sm text-label-sm uppercase tracking-widest text-on-surface-variant/60">Available Balance</span>
<h1 class="font-headline-xl text-headline-xl text-on-surface mt-xs">$4,820.50</h1>
</div>
<div class="flex gap-md">
<button class="flex items-center gap-sm bg-primary text-on-primary px-lg py-md rounded-lg font-label-md hover:bg-primary-container transition-all shadow-md active:scale-95">
<span class="material-symbols-outlined text-[20px]">add_circle</span>
              TOP UP
            </button>
<button class="flex items-center gap-sm bg-secondary text-on-secondary px-lg py-md rounded-lg font-label-md hover:opacity-90 transition-all shadow-md active:scale-95">
<span class="material-symbols-outlined text-[20px]">send</span>
              WITHDRAW
            </button>
</div>
</div>
<!-- Card Carousel/Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-lg mt-md">
<!-- Main Card -->
<div class="relative overflow-hidden aspect-[1.6/1] rounded-xl bg-gradient-to-br from-[#0B132B] to-[#1d2b53] p-lg text-white shadow-xl group">
<div class="absolute top-0 right-0 p-lg opacity-20">
<span class="material-symbols-outlined text-[120px] rotate-12">payments</span>
</div>
<div class="relative h-full flex flex-col justify-between z-10">
<div class="flex justify-between items-start">
<span class="font-label-sm tracking-widest opacity-80">PREMIUM RIDER</span>
<span class="material-symbols-outlined">contactless</span>
</div>
<div>
<div class="font-label-md text-xl tracking-[0.2em] mb-md">**** **** **** 8824</div>
<div class="flex justify-between items-end">
<div>
<div class="font-label-sm opacity-50 text-[10px] uppercase">Card Holder</div>
<div class="font-body-md uppercase tracking-wider">Alexander Vance</div>
</div>
<div class="text-right">
<div class="font-label-sm opacity-50 text-[10px] uppercase">Expires</div>
<div class="font-body-md">12/26</div>
</div>
</div>
</div>
</div>
</div>
<!-- Secondary Card (Add New) -->
<button class="aspect-[1.6/1] rounded-xl border-2 border-dashed border-outline-variant flex flex-col items-center justify-center gap-md text-on-surface-variant hover:bg-white/50 transition-colors group">
<div class="w-12 h-12 rounded-full bg-surface-container-high flex items-center justify-center group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined">add</span>
</div>
<span class="font-label-md uppercase tracking-widest">Link New Method</span>
</button>
</div>
</div>
<!-- Quick Stats Sidebar -->
<div class="w-full lg:w-1/3 flex flex-col gap-lg">
<div class="bg-surface-container-highest/30 p-lg rounded-xl">
<h3 class="font-label-md text-label-md text-on-surface-variant mb-lg uppercase tracking-widest">Monthly Spending</h3>
<div class="flex items-end gap-base h-32 mb-md">
<div class="flex-1 bg-primary/20 rounded-t-sm hover:bg-primary transition-colors cursor-help group relative" style="height: 40%;">
<div class="absolute -top-8 left-1/2 -translate-x-1/2 bg-on-surface text-white text-[10px] px-sm py-xs rounded opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">Mon: $120</div>
</div>
<div class="flex-1 bg-primary/20 rounded-t-sm hover:bg-primary transition-colors cursor-help group relative" style="height: 65%;"></div>
<div class="flex-1 bg-primary rounded-t-sm hover:bg-primary-container transition-colors cursor-help group relative" style="height: 90%;"></div>
<div class="flex-1 bg-primary/20 rounded-t-sm hover:bg-primary transition-colors cursor-help group relative" style="height: 55%;"></div>
<div class="flex-1 bg-primary/20 rounded-t-sm hover:bg-primary transition-colors cursor-help group relative" style="height: 75%;"></div>
<div class="flex-1 bg-primary/20 rounded-t-sm hover:bg-primary transition-colors cursor-help group relative" style="height: 30%;"></div>
<div class="flex-1 bg-primary/20 rounded-t-sm hover:bg-primary transition-colors cursor-help group relative" style="height: 45%;"></div>
</div>
<div class="flex justify-between font-label-sm text-on-surface-variant/40 text-[10px]">
<span>MON</span>
<span>SUN</span>
</div>
</div>
<div class="flex flex-col gap-md">
<div class="flex items-center justify-between p-md bg-white rounded-lg shadow-sm">
<div class="flex items-center gap-md">
<div class="w-10 h-10 rounded-full bg-tertiary-fixed text-on-tertiary-fixed flex items-center justify-center">
<span class="material-symbols-outlined text-[20px]">electric_bolt</span>
</div>
<div>
<p class="font-body-md text-on-surface">Auto-Topup</p>
<p class="font-label-sm text-on-surface-variant opacity-60">Enabled at $50.00</p>
</div>
</div>
<div class="w-10 h-5 bg-primary rounded-full relative cursor-pointer">
<div class="absolute right-1 top-1 w-3 h-3 bg-white rounded-full"></div>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- Transaction Ledger Section -->
<section class="px-xl py-xl">
<div class="flex items-center justify-between mb-xl">
<h2 class="font-headline-md text-headline-md text-on-surface flex items-center gap-md">
        Recent Activity
        <span class="font-label-sm text-label-sm bg-surface-container-high text-on-surface-variant px-md py-xs rounded-full">24 Pending</span>
</h2>
<div class="flex gap-md">
<div class="relative">
<span class="material-symbols-outlined absolute left-md top-1/2 -translate-y-1/2 text-on-surface-variant opacity-50">filter_list</span>
<select class="pl-xl pr-lg py-md bg-surface-container-low rounded-lg font-label-md appearance-none outline-none focus:bg-white transition-colors cursor-pointer border-none">
<option>All Types</option>
<option>Rentals</option>
<option>Top-ups</option>
<option>Refunds</option>
</select>
</div>
<button class="p-md bg-surface-container-low rounded-lg hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined">download</span>
</button>
</div>
</div>
<!-- Ledger Grid -->
<div class="w-full bg-white rounded-xl shadow-sm overflow-hidden border border-surface-container">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low/50">
<th class="px-lg py-md font-label-md text-on-surface-variant border-b border-surface-container-high">Transaction ID</th>
<th class="px-lg py-md font-label-md text-on-surface-variant border-b border-surface-container-high">Service / Vendor</th>
<th class="px-lg py-md font-label-md text-on-surface-variant border-b border-surface-container-high">Date</th>
<th class="px-lg py-md font-label-md text-on-surface-variant border-b border-surface-container-high">Amount</th>
<th class="px-lg py-md font-label-md text-on-surface-variant border-b border-surface-container-high">Status</th>
<th class="px-lg py-md font-label-md text-on-surface-variant border-b border-surface-container-high"></th>
</tr>
</thead>
<tbody class="divide-y divide-surface-container">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-lg py-lg">
<span class="font-label-sm text-on-surface-variant">#TXN-90122</span>
</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-md">
<div class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">motorcycle</span>
</div>
<div>
<div class="font-body-md font-medium text-on-surface">Ducati Panigale V4 Rental</div>
<div class="font-label-sm text-on-surface-variant opacity-60">Downtown Hub</div>
</div>
</div>
</td>
<td class="px-lg py-lg font-body-sm text-on-surface-variant">Oct 24, 2023 • 14:20</td>
<td class="px-lg py-lg font-headline-md text-[18px] text-error">-$245.00</td>
<td class="px-lg py-lg">
<span class="inline-flex items-center gap-xs px-md py-xs bg-primary/10 text-primary rounded-full font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"></span>
                COMPLETED
              </span>
</td>
<td class="px-lg py-lg text-right">
<button class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">more_vert</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-lg py-lg">
<span class="font-label-sm text-on-surface-variant">#TXN-89945</span>
</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-md">
<div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center">
<span class="material-symbols-outlined text-[18px] text-primary">account_balance_wallet</span>
</div>
<div>
<div class="font-body-md font-medium text-on-surface">Wallet Top-up</div>
<div class="font-label-sm text-on-surface-variant opacity-60">Visa **** 8824</div>
</div>
</div>
</td>
<td class="px-lg py-lg font-body-sm text-on-surface-variant">Oct 23, 2023 • 09:12</td>
<td class="px-lg py-lg font-headline-md text-[18px] text-primary">+$1,000.00</td>
<td class="px-lg py-lg">
<span class="inline-flex items-center gap-xs px-md py-xs bg-primary/10 text-primary rounded-full font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                COMPLETED
              </span>
</td>
<td class="px-lg py-lg text-right">
<button class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">more_vert</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-lg py-lg">
<span class="font-label-sm text-on-surface-variant">#TXN-89831</span>
</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-md">
<div class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">verified_user</span>
</div>
<div>
<div class="font-body-md font-medium text-on-surface">Insurance Deposit</div>
<div class="font-label-sm text-on-surface-variant opacity-60">Reversible Charge</div>
</div>
</div>
</td>
<td class="px-lg py-lg font-body-sm text-on-surface-variant">Oct 22, 2023 • 18:45</td>
<td class="px-lg py-lg font-headline-md text-[18px] text-on-surface-variant opacity-50">-$500.00</td>
<td class="px-lg py-lg">
<span class="inline-flex items-center gap-xs px-md py-xs bg-secondary-container text-secondary rounded-full font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary animate-bounce"></span>
                PENDING
              </span>
</td>
<td class="px-lg py-lg text-right">
<button class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">more_vert</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-lowest transition-colors group">
<td class="px-lg py-lg">
<span class="font-label-sm text-on-surface-variant">#TXN-89700</span>
</td>
<td class="px-lg py-lg">
<div class="flex items-center gap-md">
<div class="w-8 h-8 rounded-lg bg-surface-container-high flex items-center justify-center">
<span class="material-symbols-outlined text-[18px]">ev_station</span>
</div>
<div>
<div class="font-body-md font-medium text-on-surface">Supercharge Session</div>
<div class="font-label-sm text-on-surface-variant opacity-60">Station #X-99</div>
</div>
</div>
</td>
<td class="px-lg py-lg font-body-sm text-on-surface-variant">Oct 21, 2023 • 11:30</td>
<td class="px-lg py-lg font-headline-md text-[18px] text-error">-$12.40</td>
<td class="px-lg py-lg">
<span class="inline-flex items-center gap-xs px-md py-xs bg-primary/10 text-primary rounded-full font-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span>
                COMPLETED
              </span>
</td>
<td class="px-lg py-lg text-right">
<button class="material-symbols-outlined text-on-surface-variant opacity-0 group-hover:opacity-100 transition-opacity">more_vert</button>
</td>
</tr>
</tbody>
</table>
<div class="p-lg bg-surface-container-low/30 flex items-center justify-between">
<span class="font-label-sm text-on-surface-variant opacity-60">Showing 1-10 of 428 transactions</span>
<div class="flex gap-base">
<button class="w-8 h-8 rounded border border-surface-container-high flex items-center justify-center hover:bg-white transition-colors">
<span class="material-symbols-outlined text-[18px]">chevron_left</span>
</button>
<button class="w-8 h-8 rounded bg-primary text-on-primary flex items-center justify-center font-label-sm">1</button>
<button class="w-8 h-8 rounded border border-surface-container-high flex items-center justify-center hover:bg-white transition-colors font-label-sm">2</button>
<button class="w-8 h-8 rounded border border-surface-container-high flex items-center justify-center hover:bg-white transition-colors">
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</div>
</div>
</section>
<!-- Animated Bottom Decoration -->
<div class="fixed bottom-0 right-0 p-xl pointer-events-none opacity-10 mix-blend-multiply">
<div class="relative w-64 h-64">
<div class="absolute inset-0 bg-primary-fixed rounded-full blur-[80px] animate-pulse"></div>
<div class="absolute inset-10 bg-secondary-fixed rounded-full blur-[60px] animate-[bounce_10s_infinite]"></div>
</div>
</div>
</div>
<script>
  // Simple interaction for the cards and toggles
  document.querySelectorAll('tr').forEach(row => {
    row.addEventListener('click', () => {
      // Logic for opening transaction details could go here
      console.log('Transaction details requested');
    });
  });

  const topupBtn = document.querySelector('button:contains("TOP UP")');
  if(topupBtn) {
    topupBtn.addEventListener('mousedown', () => topupBtn.classList.add('scale-95'));
    topupBtn.addEventListener('mouseup', () => topupBtn.classList.remove('scale-95'));
  }
</script></main></div></body></html>
