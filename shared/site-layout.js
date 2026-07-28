(function () {
  function getCurrentPageKey() {
    const pathname = window.location.pathname.replace(/\/+$/, '');
    const clean = pathname === '' ? '/' : pathname;

    if (clean === '/' || clean.endsWith('/index.html') || clean === '/index.html') return 'home';

    const last = clean.split('/').filter(Boolean).pop() || '';
    if (last === 'services' || last === 'services.html') return 'services';
    if (last === 'products' || last === 'products.html') return 'products';
    if (last === 'about' || last === 'about.html' || last === 'aboutus.html') return 'about';
    if (last === 'contact' || last === 'contact.html') return 'contact';

    return 'home';
  }

  function setActiveLink(pageKey) {
    document.querySelectorAll('[data-nav-link]').forEach(function (link) {
      const isActive = link.getAttribute('data-nav-link') === pageKey;
      link.classList.toggle('text-[#0e888d]', isActive);
      link.classList.toggle('font-semibold', isActive);
      link.classList.toggle('border-b-2', isActive);
      link.classList.toggle('border-[#0e888d]', isActive);
      link.classList.toggle('pb-0.5', isActive);
      link.classList.toggle('text-slate-700', !isActive);
      link.classList.toggle('hover:text-[#0e888d]', !isActive);

      if (!isActive) {
        link.classList.remove('text-[#0e888d]', 'font-semibold', 'border-b-2', 'border-[#0e888d]', 'pb-0.5');
        link.classList.add('text-slate-700');
      }
    });
  }

  const headerMarkup = `
    <header class="sticky top-0 z-50 bg-white shadow-lg">
      <nav class="mx-auto flex max-w-7xl items-center justify-between px-4 py-3 sm:px-6 lg:px-8" aria-label="Primary navigation">
        <a href="/" class="flex items-center" aria-label="LocalMistry home">
          <img src="/images/logo/logo-horizontal.png" alt="LocalMistry logo" class="h-9 w-auto object-contain" />
        </a>

        <div class="hidden items-center gap-6 lg:flex">
          <a href="/" data-nav-link="home" class="text-sm font-medium text-slate-700 transition hover:text-[#0e888d]">Home</a>
          <a href="/services" data-nav-link="services" class="text-sm font-medium text-slate-700 transition hover:text-[#0e888d]">Services</a>
          <a href="/products" data-nav-link="products" class="text-sm font-medium text-slate-700 transition hover:text-[#0e888d]">Products</a>
          <a href="/about" data-nav-link="about" class="text-sm font-medium text-slate-700 transition hover:text-[#0e888d]">About</a>
          <a href="/contact" data-nav-link="contact" class="text-sm font-medium text-slate-700 transition hover:text-[#0e888d]">Contact</a>
        </div>

        <div class="hidden items-center gap-3 lg:flex">
          <button id="theme-toggle" type="button" aria-label="Toggle dark mode" aria-pressed="false"
                  class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-700 transition hover:bg-slate-200">
            <svg id="icon-moon" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
              <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
            </svg>
            <svg id="icon-sun" class="hidden h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
              <circle cx="12" cy="12" r="4"/>
              <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
            </svg>
          </button>
          <a href="/contact" class="rounded-full bg-gold px-5 py-2 text-sm font-semibold text-white shadow-md transition hover:bg-gold-dark hover:-translate-y-0.5">
            + Get a Quote
          </a>
        </div>

        <div class="flex items-center gap-2 lg:hidden">
          <button id="theme-toggle-mob" type="button" aria-label="Toggle dark mode"
                  class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-700">
            <svg id="icon-moon-mob" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
              <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/>
            </svg>
            <svg id="icon-sun-mob" class="hidden h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
              <circle cx="12" cy="12" r="4"/>
              <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
            </svg>
          </button>
          <button id="hamburger" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu"
                  class="flex h-8 w-8 items-center justify-center rounded-full bg-slate-100 text-slate-700">
            <svg id="ham-open" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
              <line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="18" x2="21" y2="18"/>
            </svg>
            <svg id="ham-close" class="hidden h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
              <line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/>
            </svg>
          </button>
        </div>
      </nav>

      <div id="mobile-menu" class="hidden border-t border-slate-200 bg-white px-4 pb-5 pt-3 lg:hidden">
        <ul class="space-y-1">
          <li><a href="/" data-nav-link="home" class="mobile-link block rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#0e888d]">Home</a></li>
          <li><a href="/services" data-nav-link="services" class="mobile-link block rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#0e888d]">Services</a></li>
          <li><a href="/products" data-nav-link="products" class="mobile-link block rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#0e888d]">Products</a></li>
          <li><a href="/about" data-nav-link="about" class="mobile-link block rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#0e888d]">About</a></li>
          <li><a href="/contact" data-nav-link="contact" class="mobile-link block rounded-lg px-3 py-2.5 text-sm font-medium text-slate-700 hover:bg-slate-100 hover:text-[#0e888d]">Contact</a></li>
        </ul>
      </div>
    </header>
  `;

  const footerMarkup = `
    <footer class="bg-navy pt-14 pb-8">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid gap-10 sm:grid-cols-2 lg:grid-cols-[1.5fr_1fr_1fr_1fr_1fr]">
          <div>
            <a href="/" class="flex items-center">
              <img src="/images/logo/logo-horizontal.png" alt="LocalMistry logo" class="h-9 w-auto object-contain" loading="lazy" />
            </a>
            <p class="mt-4 max-w-xs text-sm leading-relaxed text-white/55">
              India's trusted home-service marketplace. Connecting households with verified professionals since 2018.
            </p>
            <div class="mt-5 flex gap-3">
              <a href="#" aria-label="Facebook" class="flex h-8 w-8 items-center justify-center rounded-full bg-white/10 text-white/70 transition hover:bg-gold hover:text-white">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                  <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                </svg>
              </a>
              <a href="#" aria-label="Twitter / X" class="flex h-8 w-8 items-center justify-center rounded-full bg-white/10 text-white/70 transition hover:bg-gold hover:text-white">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/>
                </svg>
              </a>
              <a href="#" aria-label="Instagram" class="flex h-8 w-8 items-center justify-center rounded-full bg-white/10 text-white/70 transition hover:bg-gold hover:text-white">
                <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true">
                  <rect x="3" y="3" width="18" height="18" rx="5" ry="5"/>
                  <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                  <line x1="17.5" y1="6.5" x2="17.5" y2="6.5"/>
                </svg>
              </a>
            </div>
          </div>

          <div>
            <h3 class="text-sm font-semibold uppercase tracking-[0.2em] text-white/70">Quick Links</h3>
            <ul class="mt-4 space-y-2 text-sm text-white/55">
              <li><a href="/services" class="transition hover:text-gold">Services</a></li>
              <li><a href="/products" class="transition hover:text-gold">Products</a></li>
              <li><a href="/about" class="transition hover:text-gold">About Us</a></li>
              <li><a href="/contact" class="transition hover:text-gold">Contact</a></li>
            </ul>
          </div>

          <div>
            <h3 class="text-sm font-semibold uppercase tracking-[0.2em] text-white/70">Services</h3>
            <ul class="mt-4 space-y-2 text-sm text-white/55">
              <li><a href="/services" class="transition hover:text-gold">Plumbing</a></li>
              <li><a href="/services" class="transition hover:text-gold">Electrical</a></li>
              <li><a href="/services" class="transition hover:text-gold">Home Maintenance</a></li>
              <li><a href="/services" class="transition hover:text-gold">Carpentry</a></li>
            </ul>
          </div>

          <div>
            <h3 class="text-sm font-semibold uppercase tracking-[0.2em] text-white/70">Products</h3>
            <ul class="mt-4 space-y-2 text-sm text-white/55">
              <li><a href="/products" class="transition hover:text-gold">Doors</a></li>
              <li><a href="/products" class="transition hover:text-gold">Locks</a></li>
              <li><a href="/products" class="transition hover:text-gold">Cameras</a></li>
              <li><a href="/products" class="transition hover:text-gold">Hardware</a></li>
            </ul>
          </div>

          <div>
            <h3 class="text-sm font-semibold uppercase tracking-[0.2em] text-white/70">Contact</h3>
            <ul class="mt-4 space-y-2 text-sm text-white/55">
              <li>Sukanta Sarani, Babupara, Pradip Nagar, Siliguri</li>
              <li><a href="tel:+919832856347" class="transition hover:text-gold">+91 98328 56347</a></li>
              <li><a href="mailto:info@localmistry.in" class="transition hover:text-gold">info@localmistry.in</a></li>
            </ul>
          </div>
        </div>

        <div class="mt-12 flex flex-col items-center justify-between gap-3 border-t border-white/10 pt-7 text-xs text-white/40 sm:flex-row">
          <p>© 2026 LocalMistry. All rights reserved.</p>
          <div class="flex gap-5">
            <a href="/privacy-policy" class="transition hover:text-gold">Privacy Policy</a>
            <a href="/terms-condition" class="transition hover:text-gold">Terms of Service</a>
          </div>
        </div>
      </div>
    </footer>
  `;

  const headerTarget = document.querySelector('[data-site-header]');
  const footerTarget = document.querySelector('[data-site-footer]');

  if (headerTarget) {
    headerTarget.outerHTML = headerMarkup;
  }

  if (footerTarget) {
    footerTarget.outerHTML = footerMarkup;
  }

  const pageKey = getCurrentPageKey();
  setActiveLink(pageKey);
})();
