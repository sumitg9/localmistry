<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- SEO -->
  <title>About Us | LocalMistry — Direct Service Provider in Siliguri</title>
  <meta name="description" content="Learn about LocalMistry, a direct service provider in Siliguri offering electrical, plumbing, cleaning, carpentry, appliance and maintenance services through our own departments and field teams." />
  <meta name="keywords" content="about localmistry, direct service provider siliguri, electrician siliguri, plumber siliguri, carpenter siliguri, home service team siliguri" />
  <meta name="author" content="LocalMistry" />
  <meta name="robots" content="index, follow" />
  <meta name="geo.region" content="IN-WB" />
  <meta name="geo.placename" content="Siliguri" />

  <!-- Open Graph -->
  <meta property="og:title" content="About Us | LocalMistry" />
  <meta property="og:description" content="Discover how LocalMistry is transforming home services across India with trust, quality, and convenience." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="images/carpenter/1.jpg" />

  <!-- Favicons -->
  <link rel="icon" type="image/png" sizes="32x32" href="images/logo/favicon.png" />
  <link rel="shortcut icon" href="images/logo/favicon.png" />

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class',
      theme: {
        extend: {
          colors: {
            navy: { DEFAULT: '#13335c', dark: '#13335c', light: '#1f4f74' },
            gold: { DEFAULT: '#0e888d', light: '#35a5aa', dark: '#0a6d71' },
            sky:  '#e8f0fe',
          },
          fontFamily: { sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'] },
        }
      }
    };
  </script>

  <style>
    :focus-visible { outline: 3px solid #0e888d; outline-offset: 3px; }

    /* scrollbar */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-thumb { background: #0e888d; border-radius: 99px; }

    /* Hero gradient (matching products) */
    .about-hero {
      background: linear-gradient(135deg, #13335c 0%, #1f4f74 60%, #13335c 100%);
      position: relative;
      overflow: hidden;
    }
    .about-hero::before {
      content: '';
      position: absolute;
      inset: 0;
      background: radial-gradient(ellipse 70% 80% at 80% 50%, rgba(245,166,35,.18) 0%, transparent 70%);
    }

    /* Value cards */
    .value-card {
      transition: transform .3s cubic-bezier(.34,1.56,.64,1), box-shadow .3s ease;
    }
    .value-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 40px rgba(10,31,92,.12);
    }

    /* Stat counters */
    .stat-number {
      font-feature-settings: "tnum";
    }

    /* Team card */
    .team-card {
      transition: transform .28s ease, box-shadow .28s ease;
    }
    .team-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 18px 36px rgba(10,31,92,.12);
    }

    /* Page loader */
    #loader {
      position: fixed;
      top: 0; left: 0;
      height: 3px;
      background: linear-gradient(90deg, #0e888d, #35a5aa);
      z-index: 9999;
      animation: loadBar .8s ease forwards;
    }
    @keyframes loadBar {
      from { width: 0; }
      to   { width: 100%; opacity: 0; }
    }

    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after { animation-duration:.01ms !important; transition-duration:.01ms !important; }
    }
  </style>
</head>

<body class="bg-white text-slate-800 font-sans antialiased dark:bg-slate-950 dark:text-slate-100">

  <!-- Page loader bar -->
  <div id="loader" aria-hidden="true"></div>

  <!-- ═══════════════════════════════════════════════
       NAVBAR
  ════════════════════════════════════════════════ -->
<?php $activePage = 'about'; $part='header'; include 'includes/header-footer.php'; ?>
<main>

    <!-- ═══════════════════════════════════════════════
         HERO BANNER
    ════════════════════════════════════════════════ -->
    <section class="about-hero py-16 sm:py-24" aria-label="About hero">
      <div class="relative mx-auto max-w-5xl px-4 sm:px-6 lg:px-8 text-center">

        <!-- Breadcrumb -->
        <nav class="mb-6 flex items-center justify-center gap-2 text-xs text-white/60" aria-label="Breadcrumb">
          <a href="/" class="hover:text-gold transition">Home</a>
          <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
          <span class="text-gold font-semibold">About Us</span>
        </nav>

        <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight">
          The story behind<br class="hidden sm:block" />
          <span class="text-gold">LocalMistry</span>
        </h1>
        <p class="mt-4 max-w-2xl mx-auto text-base text-white/70 leading-relaxed">
          We are building a trusted direct service brand in Siliguri by delivering electrical, plumbing, cleaning, carpentry and maintenance work through our own departments, engineers, mechanics and mistry teams.
        </p>

        <!-- Hero stats -->
        <div class="mt-10 flex flex-wrap justify-center gap-6 sm:gap-12">
          <div class="text-center">
            <p class="text-3xl font-extrabold text-gold">15k+</p>
            <p class="mt-0.5 text-xs text-white/60 uppercase tracking-widest">Jobs Completed</p>
          </div>
          <div class="text-center">
            <p class="text-3xl font-extrabold text-gold">4.9★</p>
            <p class="mt-0.5 text-xs text-white/60 uppercase tracking-widest">Avg Customer Rating</p>
          </div>
          <div class="text-center">
            <p class="text-3xl font-extrabold text-gold">1,200+</p>
            <p class="mt-0.5 text-xs text-white/60 uppercase tracking-widest">Verified Experts</p>
          </div>
          <div class="text-center">
            <p class="text-3xl font-extrabold text-gold">28</p>
            <p class="mt-0.5 text-xs text-white/60 uppercase tracking-widest">Cities Served</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         OUR STORY
    ════════════════════════════════════════════════ -->
    <section class="py-16 bg-white dark:bg-slate-950" aria-labelledby="story-heading">
      <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
          <!-- Text -->
          <div>
            <p class="text-xs font-bold uppercase tracking-[2px] text-gold">Since 2024</p>
            <h2 id="story-heading" class="mt-3 text-3xl font-extrabold text-navy dark:text-white sm:text-4xl tracking-tight">
              From frustration to foundation.
            </h2>
            <div class="mt-6 space-y-5 text-[15px] leading-relaxed text-slate-600 dark:text-slate-300">
              <p>
                LocalMistry was created to solve the everyday problem of unreliable home service visits. Instead of acting as a marketplace, we directly provide services through dedicated departments led by trained engineers, mechanics, electricians, plumbers, cleaners and mistry professionals.
              </p>
              <p>
                We are proud to serve homes and businesses in Siliguri and nearby areas with punctual visits, transparent pricing and work carried out by our own field teams. Every job is handled with clear accountability from booking to completion.
              </p>
              <p>
                Our focus is simple: <span class="font-semibold text-navy dark:text-white">quality workmanship</span>, <span class="font-semibold text-navy dark:text-white">honest service</span> and <span class="font-semibold text-navy dark:text-white">complete customer satisfaction</span>.
              </p>
            </div>
          </div>

          <!-- Image -->
          <div class="relative">
            <div class="aspect-[16/10] overflow-hidden rounded-3xl shadow-2xl ring-1 ring-slate-200 dark:ring-slate-800">
              <img src="images/carpenter/1.jpg" alt="Skilled Indian carpenter working on home furniture repair" 
                   class="h-full w-full object-cover" loading="lazy" width="800" height="500" />
            </div>
            <div class="absolute -bottom-6 -left-6 hidden lg:block bg-white dark:bg-slate-900 shadow-xl rounded-2xl p-5 text-sm border border-slate-100 dark:border-slate-800">
              <div class="flex items-center gap-3">
                <div class="text-gold">★★★★★</div>
                <div>
                  <div class="font-semibold text-navy dark:text-white">4.92 average rating</div>
                  <div class="text-xs text-slate-500">from 14,800+ reviews</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         MISSION & VISION
    ════════════════════════════════════════════════ -->
    <section class="py-16 bg-sky/30 dark:bg-slate-900">
      <div class="mx-auto max-w-5xl px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-6">
          <div class="rounded-3xl bg-white dark:bg-slate-950 p-9 border border-slate-100 dark:border-slate-800">
            <div class="inline-flex items-center gap-2 text-gold">
              <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
              <span class="font-bold uppercase tracking-widest text-sm">Mission</span>
            </div>
            <h3 class="mt-4 text-2xl font-extrabold text-navy dark:text-white">Make trusted home care accessible to every household in India.</h3>
            <p class="mt-4 text-slate-600 dark:text-slate-300">We remove friction, bring transparency, and guarantee quality — so you can focus on what matters most.</p>
          </div>

          <div class="rounded-3xl bg-white dark:bg-slate-950 p-9 border border-slate-100 dark:border-slate-800">
            <div class="inline-flex items-center gap-2 text-gold">
              <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v16.5M20.25 3v16.5M3.75 9.75h16.5M3.75 15.75h16.5"/></svg>
              <span class="font-bold uppercase tracking-widest text-sm">Vision</span>
            </div>
            <h3 class="mt-4 text-2xl font-extrabold text-navy dark:text-white">Become the default platform for home services across South Asia by 2029.</h3>
            <p class="mt-4 text-slate-600 dark:text-slate-300">Powered by technology, driven by people, and measured by customer delight — not just bookings.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         CORE VALUES
    ════════════════════════════════════════════════ -->
    <section class="py-16 bg-white dark:bg-slate-950" aria-labelledby="values-heading">
      <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
          <p class="text-xs font-bold uppercase tracking-[2.5px] text-gold">What guides us</p>
          <h2 id="values-heading" class="mt-3 text-3xl font-extrabold text-navy dark:text-white sm:text-4xl">Our Core Values</h2>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
          <!-- Value 1 -->
          <div class="value-card group rounded-3xl border border-slate-200 bg-white p-7 dark:border-slate-800 dark:bg-slate-900">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-navy/5 dark:bg-white/5 text-navy dark:text-gold">
              <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2.25" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 01-9 9 9 9 0 01-9-9 9 9 0 019-9 9 9 0 019 9z"/></svg>
            </div>
            <h4 class="mt-5 font-bold text-lg text-navy dark:text-white">Trust First</h4>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">Every professional is ID-verified, police-verified and skill-certified before they ever reach your door.</p>
          </div>

          <!-- Value 2 -->
          <div class="value-card group rounded-3xl border border-slate-200 bg-white p-7 dark:border-slate-800 dark:bg-slate-900">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-navy/5 dark:bg-white/5 text-navy dark:text-gold">
              <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2.25" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 4.01V8"/></svg>
            </div>
            <h4 class="mt-5 font-bold text-lg text-navy dark:text-white">Radical Transparency</h4>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">You see the exact price, exact arrival time, and exact professional profile before confirming any booking.</p>
          </div>

          <!-- Value 3 -->
          <div class="value-card group rounded-3xl border border-slate-200 bg-white p-7 dark:border-slate-800 dark:bg-slate-900">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-navy/5 dark:bg-white/5 text-navy dark:text-gold">
              <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2.25" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 01-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <h4 class="mt-5 font-bold text-lg text-navy dark:text-white">People First</h4>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">We treat technicians with dignity — fair pay, on-time payments, and real career growth opportunities.</p>
          </div>

          <!-- Value 4 -->
          <div class="value-card group rounded-3xl border border-slate-200 bg-white p-7 dark:border-slate-800 dark:bg-slate-900">
            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-navy/5 dark:bg-white/5 text-navy dark:text-gold">
              <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2.25" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
            </div>
            <h4 class="mt-5 font-bold text-lg text-navy dark:text-white">Speed &amp; Reliability</h4>
            <p class="mt-2 text-sm text-slate-600 dark:text-slate-300">Average arrival time under 45 minutes. 97% of jobs completed on the first visit without callbacks.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         IMPACT / NUMBERS
    ════════════════════════════════════════════════ -->
    <section class="py-16 border-t border-b border-slate-100 dark:border-slate-800 bg-white dark:bg-slate-950">
      <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-10">
          <p class="uppercase tracking-[3px] text-xs font-bold text-gold">The numbers that matter</p>
          <h2 class="mt-2 text-3xl font-extrabold text-navy dark:text-white">LocalMistry by the numbers</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
          <div>
            <div class="text-5xl font-extrabold text-navy dark:text-white stat-number">15,842</div>
            <div class="mt-1 text-sm uppercase tracking-widest text-slate-500 dark:text-slate-400">Successful bookings</div>
          </div>
          <div>
            <div class="text-5xl font-extrabold text-navy dark:text-white stat-number">1,248</div>
            <div class="mt-1 text-sm uppercase tracking-widest text-slate-500 dark:text-slate-400">Active verified professionals</div>
          </div>
          <div>
            <div class="text-5xl font-extrabold text-navy dark:text-white stat-number">28</div>
            <div class="mt-1 text-sm uppercase tracking-widest text-slate-500 dark:text-slate-400">Cities across India</div>
          </div>
          <div>
            <div class="text-5xl font-extrabold text-navy dark:text-white stat-number">4.92</div>
            <div class="mt-1 text-sm uppercase tracking-widest text-slate-500 dark:text-slate-400">Average customer rating</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         MEET THE TEAM
    ════════════════════════════════════════════════ -->
    <section class="py-16 bg-white dark:bg-slate-950" aria-labelledby="team-heading">
      <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center text-center mb-10">
          <p class="text-xs font-bold uppercase tracking-[2.5px] text-gold">The humans behind the mission</p>
          <h2 id="team-heading" class="mt-3 text-3xl font-extrabold text-navy dark:text-white sm:text-4xl">Meet our leadership</h2>
        </div>

        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
          <!-- Team member 1 -->
          <div class="team-card rounded-3xl border border-slate-200 bg-white p-6 text-center dark:border-slate-800 dark:bg-slate-900">
            <img src="images/team-1.jpg" alt="Aarav Mehta, Co-founder &amp; CEO" class="mx-auto h-28 w-28 rounded-full object-cover ring-4 ring-white dark:ring-slate-800 shadow" loading="lazy" />
            <h4 class="mt-5 text-xl font-bold text-navy dark:text-white">Aarav Mehta</h4>
            <p class="text-sm text-gold font-medium">Co-founder &amp; CEO</p>
            <p class="mt-3 text-sm text-slate-600 dark:text-slate-300 leading-snug">Former lead engineer at a major ride-hailing company. Obsessed with making service delivery as seamless as ordering food.</p>
            <div class="mt-4 text-xs text-slate-400">Mumbai • 10+ yrs in tech</div>
          </div>

          <!-- Team member 2 -->
          <div class="team-card rounded-3xl border border-slate-200 bg-white p-6 text-center dark:border-slate-800 dark:bg-slate-900">
            <img src="images/team-2.jpg" alt="Priya Nair, Co-founder &amp; COO" class="mx-auto h-28 w-28 rounded-full object-cover ring-4 ring-white dark:ring-slate-800 shadow" loading="lazy" />
            <h4 class="mt-5 text-xl font-bold text-navy dark:text-white">Priya Nair</h4>
            <p class="text-sm text-gold font-medium">Co-founder &amp; COO</p>
            <p class="mt-3 text-sm text-slate-600 dark:text-slate-300 leading-snug">Ex-operations director at a pan-India logistics startup. Passionate about creating dignified livelihoods for skilled tradespeople.</p>
            <div class="mt-4 text-xs text-slate-400">Bengaluru • 12+ yrs operations</div>
          </div>

          <!-- Team member 3 -->
          <div class="team-card rounded-3xl border border-slate-200 bg-white p-6 text-center dark:border-slate-800 dark:bg-slate-900">
            <img src="images/team-3.jpg" alt="Rohan Kapoor, CTO" class="mx-auto h-28 w-28 rounded-full object-cover ring-4 ring-white dark:ring-slate-800 shadow" loading="lazy" />
            <h4 class="mt-5 text-xl font-bold text-navy dark:text-white">Rohan Kapoor</h4>
            <p class="text-sm text-gold font-medium">Chief Technology Officer</p>
            <p class="mt-3 text-sm text-slate-600 dark:text-slate-300 leading-snug">Built scalable marketplaces at two unicorns. Leads our engineering team with a focus on reliability, privacy and speed.</p>
            <div class="mt-4 text-xs text-slate-400">Delhi NCR • Ex-Flipkart, Razorpay</div>
          </div>
        </div>
      </div>
    </section>

    <!-- ═══════════════════════════════════════════════
         FINAL CTA
    ════════════════════════════════════════════════ -->
    <section class="py-16 bg-navy text-white">
      <div class="mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
        <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight">Ready to experience the LocalMistry difference?</h2>
        <p class="mt-3 text-lg text-white/70 max-w-md mx-auto">Book your first service in under 60 seconds. No hidden fees. Real humans on the other side.</p>

        <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center">
          <a href="/services" class="inline-flex items-center justify-center rounded-full bg-white px-8 py-3.5 text-sm font-semibold text-navy shadow transition hover:bg-gold hover:text-white">
            Browse Services
          </a>
          <a href="/contact" class="inline-flex items-center justify-center rounded-full border border-white/70 px-8 py-3.5 text-sm font-semibold text-white transition hover:bg-white/10">
            Talk to our team
          </a>
        </div>
        <p class="mt-5 text-xs text-white/50">Trusted by 15,000+ happy households across India</p>
      </div>
    </section>

<?php $part='footer'; include 'includes/header-footer.php'; ?>

  <!-- ═══════════════════════════════════════════════
       SCRIPTS
  ════════════════════════════════════════════════ -->
  <script>
    /* ── Dark mode ── */
    const root = document.documentElement;
    const saved = localStorage.getItem('theme');
    if (saved === 'dark' || (!saved && window.matchMedia('(prefers-color-scheme:dark)').matches)) {
      root.classList.add('dark');
    }
    function syncThemeIcons() {
      const dark = root.classList.contains('dark');
      ['icon-moon','icon-moon-mob'].forEach(id => document.getElementById(id)?.classList.toggle('hidden', dark));
      ['icon-sun','icon-sun-mob'].forEach(id  => document.getElementById(id)?.classList.toggle('hidden', !dark));
    }
    syncThemeIcons();
    ['theme-toggle','theme-toggle-mob'].forEach(id => {
      document.getElementById(id)?.addEventListener('click', () => {
        root.classList.toggle('dark');
        localStorage.setItem('theme', root.classList.contains('dark') ? 'dark' : 'light');
        syncThemeIcons();
      });
    });

    /* ── Mobile hamburger ── */
    const hamburger   = document.getElementById('hamburger');
    const mobileMenu  = document.getElementById('mobile-menu');
    const hamOpen     = document.getElementById('ham-open');
    const hamClose    = document.getElementById('ham-close');
    hamburger?.addEventListener('click', () => {
      const open = mobileMenu.classList.toggle('hidden');
      hamburger.setAttribute('aria-expanded', String(!open));
      hamOpen.classList.toggle('hidden', !open);
      hamClose.classList.toggle('hidden', open);
    });
  </script>

</body>
</html>
