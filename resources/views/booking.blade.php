<html lang="en"><head><meta charset="utf-8"/><meta content="width=device-width, initial-scale=1.0" name="viewport"/><style>@layer base{html,body{margin:0;padding:0;}body{overscroll-behavior:none;}main>:first-child{margin-top:0!important;}main>:last-child{margin-bottom:0!important;}}::-webkit-scrollbar{display:none;}</style><script src="https://cdn.tailwindcss.com"></script><script id="tailwind-config">tailwind.config={theme:{extend:{"colors":{"on-primary-container":"#f5fff6","surface-container-low":"#f2f4f6","secondary-fixed":"#dbe1ff","on-surface":"#191c1e","tertiary-fixed-dim":"#73d6d4","outline-variant":"#bdcac0","background":"#f7f9fb","surface-container-high":"#e6e8ea","surface":"#f7f9fb","tertiary-container":"#008281","secondary-container":"#d8deff","on-secondary-container":"#5a627e","on-surface-variant":"#3e4942","surface-dim":"#d8dadc","primary-fixed":"#8ef7c4","secondary":"#565d79","on-tertiary-fixed":"#00201f","primary-fixed-dim":"#72daa9","on-primary-fixed-variant":"#005236","on-secondary-fixed":"#131a33","primary-container":"#00855b","on-primary":"#ffffff","inverse-surface":"#2d3133","on-error":"#ffffff","secondary-fixed-dim":"#bec5e5","primary":"#006947","on-error-container":"#93000a","on-secondary-fixed-variant":"#3e4660","surface-container":"#eceef0","error-container":"#ffdad6","surface-container-highest":"#e0e3e5","on-tertiary-container":"#f3fffe","on-primary-fixed":"#002113","surface-variant":"#e0e3e5","tertiary":"#006766","outline":"#6e7a72","on-secondary":"#ffffff","tertiary-fixed":"#90f3f1","inverse-primary":"#72daa9","on-tertiary":"#ffffff","error":"#ba1a1a","inverse-on-surface":"#eff1f3","surface-bright":"#f7f9fb","surface-container-lowest":"#ffffff","on-tertiary-fixed-variant":"#00504f","on-background":"#191c1e","surface-tint":"#006c49"},"borderRadius":{"DEFAULT":"0.25rem","lg":"0.5rem","xl":"0.75rem","full":"9999px"},"spacing":{"base":"4px","lg":"24px","sm":"8px","xl":"40px","container-max":"1280px","xs":"4px","gutter":"24px","md":"16px"},"fontFamily":{"headline-xl":["Hanken Grotesk"],"body-lg":["Work Sans"],"label-sm":["JetBrains Mono"],"body-sm":["Work Sans"],"headline-lg":["Hanken Grotesk"],"label-md":["JetBrains Mono"],"headline-md":["Hanken Grotesk"],"headline-lg-mobile":["Hanken Grotesk"],"body-md":["Work Sans"]},"fontSize":{"headline-xl":["48px",{"lineHeight":"56px","letterSpacing":"-0.02em","fontWeight":"700"}],"body-lg":["18px",{"lineHeight":"28px","fontWeight":"400"}],"label-sm":["12px",{"lineHeight":"14px","fontWeight":"500"}],"body-sm":["14px",{"lineHeight":"20px","fontWeight":"400"}],"headline-lg":["32px",{"lineHeight":"40px","letterSpacing":"-0.01em","fontWeight":"700"}],"label-md":["14px",{"lineHeight":"16px","letterSpacing":"0.05em","fontWeight":"500"}],"headline-md":["24px",{"lineHeight":"32px","fontWeight":"600"}],"headline-lg-mobile":["24px",{"lineHeight":"32px","fontWeight":"700"}],"body-md":["16px",{"lineHeight":"24px","fontWeight":"400"}]}}}}</script><link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@600;700&amp;family=Work+Sans:wght@400;500&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/><link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/></head><body class="bg-background font-body-md text-on-surface"><aside class="fixed left-0 top-0 h-full w-[280px] bg-[#0B132B] text-white z-50 flex flex-col shadow-xl"><div class="px-lg py-xl flex items-center gap-md"><span class="material-symbols-outlined text-primary text-[32px]">two_wheeler</span><span class="font-headline-md text-headline-md tracking-tighter uppercase">VELEX</span></div><div class="px-md mb-lg"><button class="w-full bg-[#0F8A5F] hover:bg-primary-container text-white py-sm px-md rounded-lg flex items-center justify-between transition-colors group"><div class="flex flex-col items-start"><span class="font-label-sm text-label-sm opacity-80 uppercase tracking-widest">Switch To</span><span class="font-label-md text-label-md font-bold">OWNER MODE</span></div><span class="material-symbols-outlined transition-transform group-hover:rotate-180">sync_alt</span></button></div><nav class="flex-1 px-base" data-active-classes="bg-white/5 border-l-4 border-primary text-white">
    <!-- Wired Dashboard Route -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="dashboard" href="{{ route('dashboard') }}"><span class="material-symbols-outlined mr-md">grid_view</span>Dashboard</a>

    <!-- Current Page Highlight: Browse Motorbikes -->
    <a aria-current="page" class="flex items-center px-lg py-md mb-xs transition-all font-body-md bg-white/5 border-l-4 border-primary text-white" data-path="browse-motorbikes" href="{{ route('catalog.index') }}"><span class="material-symbols-outlined mr-md">motorcycle</span>Browse Motorbikes</a>

    <!-- Wired Active Rides Section back to Tracking anchors -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="active-rides" href="{{ route('dashboard') }}#active-rides"><span class="material-symbols-outlined mr-md">route</span>Active Rides</a>

    <!-- Wired Wallet Route -->
    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="wallet" href="{{ route('wallet.index') }}"><span class="material-symbols-outlined mr-md">account_balance_wallet</span>Wallet</a>

    <a class="flex items-center px-lg py-md mb-xs text-white/60 hover:text-white transition-all font-body-md" data-path="settings" href="#"><span class="material-symbols-outlined mr-md">settings</span>Settings</a>
</nav><div class="mt-auto p-lg bg-black/20"><div class="flex items-center gap-md mb-md"><div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center shrink-0"><span class="material-symbols-outlined text-on-primary text-[20px]">person</span></div><div class="flex-1 min-w-0"><div class="font-headline-md text-[16px] truncate">Inter</div><div class="font-label-sm text-label-sm text-white/40 uppercase tracking-wider">Rider Tier</div></div><button class="material-symbols-outlined text-white/60 hover:text-white">more_vert</button></div></div></aside><div class="pl-[280px] min-h-screen flex flex-col"><header class="fixed top-0 left-[280px] right-0 h-16 bg-surface/80 backdrop-blur-xl z-40 flex items-center justify-end px-lg gap-lg"><div class="flex-1 flex items-center px-md text-on-surface-variant"><span class="material-symbols-outlined mr-sm">search</span><span class="font-body-sm text-body-sm">Search for bikes or locations...</span></div><div class="flex items-center gap-md"><button class="w-10 h-10 flex items-center justify-center rounded-full hover:bg-surface-container-high transition-colors"><span class="material-symbols-outlined text-on-surface-variant">notifications</span></button><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div></div></header><main class="relative pt-16 flex-1 bg-surface-container-lowest"><div class="flex flex-col w-full">
<!-- Interactive Header Section -->
<section class="relative w-full px-xl py-xl overflow-hidden">
<div class="absolute top-0 right-0 -mr-24 -mt-24 w-96 h-96 bg-primary/5 rounded-full blur-3xl"></div>
<div class="absolute bottom-0 left-1/4 -mb-24 w-64 h-64 bg-tertiary-fixed-dim/10 rounded-full blur-3xl"></div>
<div class="relative grid grid-cols-12 gap-gutter items-end">
<div class="col-span-12 lg:col-span-8">
<div class="flex items-center gap-md mb-md">
<span class="font-label-md text-label-md bg-secondary-container text-on-secondary-container px-md py-1 rounded-full uppercase tracking-widest">Model 2024</span>
<div class="flex items-center text-primary">
<span class="material-symbols-outlined text-[18px]">verified</span>
<span class="font-label-sm text-label-sm ml-sm uppercase">Certified Mechanical Grade</span>
</div>
</div>
<h1 class="font-headline-xl text-headline-xl text-on-surface uppercase tracking-tight leading-none mb-sm">
          Specialized <span class="text-primary">CD70</span> Standard
        </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl">
          The backbone of urban mobility. Engineered for legendary fuel efficiency and unmatched resilience in demanding environments.
        </p>
</div>
<div class="col-span-12 lg:col-span-4 flex justify-end">
<div class="text-right">
<div class="font-label-sm text-label-sm text-on-surface-variant uppercase mb-xs">Daily Rate</div>
<div class="font-headline-xl text-headline-xl text-primary">$18.50</div>
</div>
</div>
</div>
</section>
<!-- Main Configuration & Checkout Grid -->
<section class="px-xl pb-xl grid grid-cols-12 gap-xl">
<!-- Left Column: Product & Specs -->
<div class="col-span-12 lg:col-span-7 flex flex-col gap-xl">
<!-- High-Impact Product Image -->
<div class="relative group aspect-[16/9] bg-surface-container rounded-xl overflow-hidden shadow-sm">
<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="A studio-lit, high-resolution profile shot of a pristine Honda CD70 motorbike in metallic silver and emerald green accents. The background is a minimalist industrial garage with sharp architectural shadows. 8k resolution, cinematic lighting, emphasizing the mechanical details of the engine and chrome exhaust." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBESc_gBcTHei8zTjbBpVJdAje86EtSxVd6TFnuAGRjvFHRa3TH9SmXfcv5XOfTj47_SbxicsHGNRfi4Y0T0duEqR4Q-FRH_sMmvdxXqTl9TunKSZRqd_62abgEDTxCzHfVWW1BZESazOrPRtSAizFKbAnnpek4JU_LPtqj3pJTsAhxJYpcCXF0NI3fgGpS8wFiKlNGK0ChgG3PwkMpA25gZ0VfOOpnVwkBODNprDYQodHZ4_NIWBql"/>
<div class="absolute bottom-md left-md flex gap-sm">
<div class="bg-surface/90 backdrop-blur-md p-sm rounded-lg flex items-center gap-sm">
<span class="material-symbols-outlined text-primary">360</span>
<span class="font-label-sm text-label-sm text-on-surface">Interactive View</span>
</div>
</div>
</div>
<!-- Mechanical Spec Matrix -->
<div class="grid grid-cols-3 gap-md">
<div class="bg-surface-container-low p-lg rounded-xl">
<span class="material-symbols-outlined text-primary mb-sm">settings_input_component</span>
<div class="font-label-sm text-label-sm text-on-surface-variant uppercase block mb-xs">Displacement</div>
<div class="font-headline-md text-headline-md">72cc</div>
<div class="font-body-sm text-body-sm text-on-surface-variant mt-xs">4-Stroke OHC</div>
</div>
<div class="bg-surface-container-low p-lg rounded-xl">
<span class="material-symbols-outlined text-primary mb-sm">ev_station</span>
<div class="font-label-sm text-label-sm text-on-surface-variant uppercase block mb-xs">Efficiency</div>
<div class="font-headline-md text-headline-md">60km/L</div>
<div class="font-body-sm text-body-sm text-on-surface-variant mt-xs">Urban Cycle</div>
</div>
<div class="bg-surface-container-low p-lg rounded-xl">
<span class="material-symbols-outlined text-primary mb-sm">speed</span>
<div class="font-label-sm text-label-sm text-on-surface-variant uppercase block mb-xs">Top Speed</div>
<div class="font-headline-md text-headline-md">85km/h</div>
<div class="font-body-sm text-body-sm text-on-surface-variant mt-xs">Electronically Limited</div>
</div>
</div>
<!-- Duration Selection -->
<div class="bg-surface-container-lowest p-xl rounded-xl shadow-sm">
<h3 class="font-headline-md text-headline-md mb-lg flex items-center gap-sm">
<span class="material-symbols-outlined">calendar_month</span>
          Rental Schedule
        </h3>
<div class="grid grid-cols-2 gap-lg">
<div class="flex flex-col gap-sm">
<label class="font-label-md text-label-md text-on-surface-variant uppercase">Pickup Date</label>
<div class="relative">
<input class="w-full bg-surface-container-high border-none rounded-lg px-md py-lg font-body-md focus:ring-2 focus:ring-primary outline-none transition-all" type="date"/>
</div>
</div>
<div class="flex flex-col gap-sm">
<label class="font-label-md text-label-md text-on-surface-variant uppercase">Duration</label>
<select class="w-full bg-surface-container-high border-none rounded-lg px-md py-lg font-body-md focus:ring-2 focus:ring-primary outline-none appearance-none cursor-pointer">
<option>1 Day</option>
<option>3 Days (-5%)</option>
<option>1 Week (-12%)</option>
<option>1 Month (-25%)</option>
</select>
</div>
</div>
<div class="mt-lg p-md bg-on-primary-container/30 rounded-lg flex items-start gap-md">
<span class="material-symbols-outlined text-primary">info</span>
<p class="font-body-sm text-body-sm text-on-surface-variant">
            Pickup available from 09:00 AM at <span class="font-bold text-on-surface underline cursor-pointer">Downtown Hub (A1)</span>. Insurance cover begins immediately upon digital sign-off.
          </p>
</div>
</div>
</div>
<!-- Right Column: Checkout Widget -->
<div class="col-span-12 lg:col-span-5">
<div class="sticky top-24 flex flex-col gap-lg">
<!-- Main Invoice Card -->
<div class="bg-[#0B132B] text-white p-xl rounded-xl shadow-xl overflow-hidden relative">
<div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-full -mr-16 -mt-16 blur-2xl"></div>
<div class="relative z-10">
<div class="flex justify-between items-center mb-xl">
<h2 class="font-headline-md text-headline-md uppercase tracking-widest">Order Summary</h2>
<span class="font-label-sm text-label-sm opacity-50">TXN-902441B</span>
</div>
<div class="space-y-md mb-xl">
<div class="flex justify-between items-center py-sm border-b border-white/10">
<span class="font-body-md opacity-70">CD70 Standard (3 Days)</span>
<span class="font-label-md">$55.50</span>
</div>
<div class="flex justify-between items-center py-sm border-b border-white/10">
<span class="font-body-md opacity-70">Helmet &amp; Safety Kit</span>
<span class="font-label-md text-primary">FREE</span>
</div>
<div class="flex justify-between items-center py-sm border-b border-white/10">
<div class="flex flex-col">
<span class="font-body-md opacity-70">Comprehensive Insurance</span>
<span class="font-label-sm text-[10px] opacity-40">Theft &amp; Collision Coverage</span>
</div>
<span class="font-label-md">$12.00</span>
</div>
<div class="flex justify-between items-center py-sm">
<span class="font-body-md opacity-70">Security Deposit</span>
<span class="font-label-md">$150.00</span>
</div>
<p class="font-label-sm text-[11px] text-white/40 italic">Deposit is 100% refundable upon vehicle return without damages.</p>
</div>
<div class="flex justify-between items-end mb-xl">
<div>
<div class="font-label-sm text-label-sm opacity-50 uppercase mb-xs">Total to Pay</div>
<div class="font-headline-xl text-headline-xl leading-none">$217.50</div>
</div>
<div class="text-right">
<div class="font-label-sm text-label-sm text-primary uppercase mb-xs">Pay Later Option</div>
<div class="font-body-sm opacity-70">Pay $67.50 today</div>
</div>
</div>
<button class="w-full bg-primary hover:bg-primary-container text-white py-lg rounded-lg font-headline-md transition-all active:scale-[0.98] flex items-center justify-center gap-md">
              Complete Booking
              <span class="material-symbols-outlined">arrow_forward</span>
</button>
<div class="mt-md flex justify-center gap-lg opacity-40">
<span class="material-symbols-outlined">payments</span>
<span class="material-symbols-outlined">credit_card</span>
<span class="material-symbols-outlined">account_balance</span>
</div>
</div>
</div>
<!-- Security & Trust -->
<div class="bg-surface-container p-lg rounded-xl border-l-4 border-primary">
<div class="flex gap-md">
<span class="material-symbols-outlined text-primary">verified_user</span>
<div>
<div class="font-label-md text-label-md text-on-surface font-bold uppercase">Velex Guarantee</div>
<p class="font-body-sm text-body-sm text-on-surface-variant">24/7 Roadside assistance included. Free cancellation up to 12 hours before pickup.</p>
</div>
</div>
</div>
<!-- Location Preview -->
<div class="group relative h-48 rounded-xl overflow-hidden cursor-crosshair">
<div class="w-full h-full" data-location="London, City Center Bike Hub" style=""></div>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-md transition-opacity group-hover:opacity-90">
<div class="font-label-sm text-label-sm text-white/70 uppercase">Collection Point</div>
<div class="font-body-md text-white font-bold">Terminal 2 Transit Station</div>
<div class="font-body-sm text-white/60">4.8km from your current location</div>
</div>
</div>
</div>
</div>
</section>
<!-- Mechanical Breakdown Detail (Floating Textures) -->
<section class="w-full px-xl py-xl bg-surface-container-low/50 relative">
<div class="absolute top-0 left-1/2 -translate-x-1/2 w-px h-24 bg-gradient-to-b from-transparent to-outline/20"></div>
<div class="max-w-4xl mx-auto text-center mb-xl">
<span class="font-label-md text-label-md text-primary uppercase tracking-[0.2em]">Engineering Excellence</span>
<h2 class="font-headline-lg text-headline-lg mt-md">What's inside the CD70?</h2>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-lg">
<div class="p-lg">
<div class="font-headline-md text-headline-md text-primary/30 mb-sm">01</div>
<h4 class="font-label-md text-label-md font-bold uppercase mb-xs">Chassis</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">High-tensile backbone frame designed for maximum stability on uneven urban roads.</p>
</div>
<div class="p-lg">
<div class="font-headline-md text-headline-md text-primary/30 mb-sm">02</div>
<h4 class="font-label-md text-label-md font-bold uppercase mb-xs">Suspension</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Dual telescopic front forks with 5-step adjustable rear swingarm shock absorbers.</p>
</div>
<div class="p-lg">
<div class="font-headline-md text-headline-md text-primary/30 mb-sm">03</div>
<h4 class="font-label-md text-label-md font-bold uppercase mb-xs">Ignition</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Advanced CDI (Capacitor Discharge Ignition) for instant starts in all weather conditions.</p>
</div>
<div class="p-lg">
<div class="font-headline-md text-headline-md text-primary/30 mb-sm">04</div>
<h4 class="font-label-md text-label-md font-bold uppercase mb-xs">Braking</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Heavy-duty mechanical drum brakes front and rear for reliable stopping power.</p>
</div>
</div>
</section>
</div>
<script>
  // Simple interaction for price update simulation
  const durationSelect = document.querySelector('select');
  const totalPriceDisplay = document.querySelector('.text-headline-xl.leading-none');
  const baseRate = 18.50;

  durationSelect.addEventListener('change', (e) => {
    let days = 1;
    let discount = 1;

    if(e.target.value.includes('3 Days')) { days = 3; discount = 0.95; }
    if(e.target.value.includes('1 Week')) { days = 7; discount = 0.88; }
    if(e.target.value.includes('1 Month')) { days = 30; discount = 0.75; }

    const bikeCost = (baseRate * days * discount).toFixed(2);
    const insurance = 12.00;
    const deposit = 150.00;
    const total = (parseFloat(bikeCost) + insurance + deposit).toFixed(2);

    // Smooth transition effect
    totalPriceDisplay.style.opacity = '0';
    setTimeout(() => {
      totalPriceDisplay.textContent = `$${total}`;
      totalPriceDisplay.style.opacity = '1';
    }, 150);
  });

  // Adding a subtle scroll reveal for cards
  const observerOptions = {
    threshold: 0.1
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('opacity-100', 'translate-y-0');
        entry.target.classList.remove('opacity-0', 'translate-y-8');
      }
    });
  }, observerOptions);

  document.querySelectorAll('.bg-surface-container-low, .bg-surface-container-lowest').forEach(el => {
    el.classList.add('transition-all', 'duration-700', 'opacity-0', 'translate-y-8');
    observer.observe(el);
  });
</script>
<style>
  /* Custom scrollbar for some regions if needed */
  .custom-scroll::-webkit-scrollbar {
    width: 4px;
    display: block;
  }
  .custom-scroll::-webkit-scrollbar-thumb {
    background: #006947;
    border-radius: 10px;
  }

  /* Selection styling */
  ::selection {
    background: #8ef7c4;
    color: #002113;
  }
</style></main></div></body></html>
