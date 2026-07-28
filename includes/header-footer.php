<?php
$activePage = $activePage ?? 'home';
$part = $part ?? null;

if ($part === 'header' || $part === null):
?>
<a href="#main" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[200] focus:rounded-lg focus:bg-navy focus:px-4 focus:py-2 focus:text-sm focus:font-semibold focus:text-white">Skip to content</a>

<header class="sticky top-0 z-50 bg-white shadow-lg">
  <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8" aria-label="Primary navigation">
    <a href="/" class="flex items-center" aria-label="LocalMistry home">
      <img src="images/logo/logo-horizontal.png" alt="LocalMistry logo" class="h-9 w-auto object-contain" />
    </a>
    <div class="hidden items-center gap-6 lg:flex">
      <a href="/"          class="text-sm font-medium text-slate-700 transition hover:text-[#0e888d]<?= $activePage === 'home' ? ' text-[#0e888d] font-semibold border-b-2 border-[#0e888d] pb-0.5' : '' ?>">Home</a>
      <a href="/services"  class="text-sm font-medium text-slate-700 transition hover:text-[#0e888d]<?= $activePage === 'services' ? ' text-[#0e888d] font-semibold border-b-2 border-[#0e888d] pb-0.5' : '' ?>">Services</a>
      <a href="/products"  class="text-sm font-medium text-slate-700 transition hover:text-[#0e888d]<?= $activePage === 'products' ? ' text-[#0e888d] font-semibold border-b-2 border-[#0e888d] pb-0.5' : '' ?>">Products</a>
      <a href="/about"     class="text-sm font-medium text-slate-700 transition hover:text-[#0e888d]<?= $activePage === 'about' ? ' text-[#0e888d] font-semibold border-b-2 border-[#0e888d] pb-0.5' : '' ?>">About</a>
      <a href="/contact"   class="text-sm font-medium text-slate-700 transition hover:text-[#0e888d]<?= $activePage === 'contact' ? ' text-[#0e888d] font-semibold border-b-2 border-[#0e888d] pb-0.5' : '' ?>">Contact</a>
    </div>
    <div class="hidden items-center gap-3 lg:flex">
      <button id="theme-toggle" type="button" aria-label="Toggle dark mode" aria-pressed="false" class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-700 transition hover:bg-slate-200">
        <svg id="icon-moon" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
        <svg id="icon-sun" class="hidden h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
      </button>
      <a href="/contact" class="rounded-full bg-gold px-5 py-2 text-sm font-semibold text-white shadow-md transition hover:bg-gold-dark hover:-translate-y-0.5">+ Get a Quote</a>
    </div>
    <div class="flex items-center gap-2 lg:hidden">
      <button id="theme-toggle-mob" type="button" aria-label="Toggle dark mode" class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-700">
        <svg id="icon-moon-mob" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>
        <svg id="icon-sun-mob" class="hidden h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/></svg>
      </button>
      <button id="hamburger" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu" class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-700">
        <svg id="ham-open" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
        <svg id="ham-close" class="hidden h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
      </button>
    </div>
  </nav>
  <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white px-4 pb-5 pt-3 lg:hidden">
    <ul class="space-y-1">
      <li><a href="/"          class="mobile-link block rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#0e888d]">Home</a></li>
      <li><a href="/services"  class="mobile-link block rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#0e888d]">Services</a></li>
      <li><a href="/products"  class="mobile-link block rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#0e888d]">Products</a></li>
      <li><a href="/about"     class="mobile-link block rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#0e888d]">About</a></li>
      <li><a href="/contact"   class="mobile-link block rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#0e888d]">Contact</a></li>
    </ul>
    <div class="mt-4 flex gap-3">
      <a href="/contact" class="flex-1 rounded-full border border-[#0e888d] py-2.5 text-center text-sm font-semibold text-[#0e888d]">Login</a>
      <a href="/contact" class="flex-1 rounded-full bg-[#0e888d] py-2.5 text-center text-sm font-semibold text-white">Get a Quote</a>
    </div>
  </div>
</header>

<main id="main">
<?php
endif;

if ($part === 'footer' || $part === null):
?>
</main>

<footer class="bg-navy-dark bg-[#13335c] py-8 text-center text-xs text-white/40">
  <p>&copy; 2026 LocalMistry. All rights reserved. | <a href="privacy-policy.html" class="hover:text-gold transition">Privacy Policy</a> &middot; <a href="terms-condition.html" class="hover:text-gold transition">Terms</a></p>
</footer>
<?php
endif;
?>