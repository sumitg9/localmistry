<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- ═══ SEO Meta Tags ═══ -->
  <title>LocalMistry | Direct Home Services in Siliguri & Nearby Areas</title>
  <meta name="description"
    content="LocalMistry provides direct electrical, plumbing, cleaning, carpentry, appliance and maintenance services in Siliguri and nearby areas through our own trained team." />
  <meta name="keywords"
    content="electrician in siliguri, plumber in siliguri, carpenter in siliguri, home cleaning service siliguri, ac repair siliguri, direct home service provider siliguri" />
  <meta name="author" content="LocalMistry" />
  <meta name="robots" content="index, follow" />
  <meta name="geo.region" content="IN-WB" />
  <meta name="geo.placename" content="Siliguri" />
  <meta name="theme-color" content="#0f172a" />

  <!-- ═══ Open Graph ═══ -->
  <meta property="og:title" content="MistryHub | Professional Home Services at Your Doorstep" />
  <meta property="og:description"
    content="Book premium, verified home services with fast response times and transparent pricing." />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="images/carousel-11.jpg" />
  <meta property="og:locale" content="en_IN" />

  <!-- ═══ Favicons ═══ -->
  <link rel="icon" type="image/png" sizes="32x32" href="images/logo/favicon.png" />
  <link rel="shortcut icon" href="images/logo/favicon.png" />

  <!-- ═══ Preload above-the-fold hero image ═══ -->
  <link rel="preload" as="image" href="images/carousel-11.jpg" />

  <!-- ═══ Google Font: Plus Jakarta Sans ═══ -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400&display=swap"
    rel="stylesheet" />

  <!-- ═══ Tailwind CDN with custom config ═══ -->
  <script>
    // Tailwind configuration — must be defined BEFORE the CDN script loads
    tailwind = {
      config: {
        darkMode: 'class',
        theme: {
          extend: {
            colors: {
              brand: {
                50:  '#f0fdf4',
                100: '#dcfce7',
                500: '#0e888d',
                600: '#0e888d',
                700: '#0e888d',
                800: '#0e888d',
                900: '#0e888d',
              },
              accent: {
                400: '#0e888d',
                500: '#0e888d',
                600: '#0e888d',
              },
            },
            fontFamily: {
              sans: ['"Plus Jakarta Sans"', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            },
            keyframes: {
              'fade-up': {
                '0%': { opacity: '0', transform: 'translateY(20px)' },
                '100%': { opacity: '1', transform: 'translateY(0)' },
              },
              'fade-in': {
                '0%': { opacity: '0' },
                '100%': { opacity: '1' },
              },
            },
            animation: {
              'fade-up': 'fade-up 0.6s ease both',
              'fade-in': 'fade-in 0.5s ease both',
            },
          },
        },
      },
    };
  </script>
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- ═══ Global custom styles ═══ -->
  <style>
    /* Accessible focus ring */
    :focus-visible {
      outline: 3px solid #0e888d;
      outline-offset: 3px;
    }

    /* Hero overlay gradient */
    .hero-overlay {
      background: linear-gradient(135deg,
          rgba(15, 23, 42, 0.82) 0%,
          rgba(15, 23, 42, 0.55) 60%,
          rgba(15, 23, 42, 0.20) 100%);
    }

    /* Smooth card lift */
    .card-lift {
      transition: transform 0.3s cubic-bezier(.22, .68, 0, 1.2), box-shadow 0.3s ease;
    }
    .card-lift:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 48px rgba(0, 0, 0, 0.14);
    }

    /* Image zoom on hover */
    .img-zoom img {
      transition: transform 0.5s ease;
    }
    .img-zoom:hover img {
      transform: scale(1.06);
    }

    /* Star rating color */
    .star { color: #f59e0b; }

    /* Reduced motion */
    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after {
        animation-duration: 0.01ms !important;
        transition-duration: 0.01ms !important;
        scroll-behavior: auto !important;
      }
    }

    /* Custom scrollbar (webkit) */
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-track { background: transparent; }
    ::-webkit-scrollbar-thumb { background: #0e888d; border-radius: 99px; }
  </style>
</head>

<body class="bg-gray-50 text-slate-800 antialiased font-sans transition-colors duration-300
             dark:bg-slate-900 dark:text-slate-100">

  <!-- ╔══════════════════════════════════════════════════════════╗
       ║  SKIP LINK — Accessibility                               ║
       ╚══════════════════════════════════════════════════════════╝ -->
  <a href="#main-content"
     class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-[200]
            focus:rounded-lg focus:bg-brand-600 focus:px-4 focus:py-2 focus:text-sm
<?php $activePage = 'home'; $part='header'; include 'includes/header-footer.php'; ?>

    <!-- ╔══════════════════════════════════════════════════════════╗
         ║  2. HERO SECTION                                         ║
         ╚══════════════════════════════════════════════════════════╝ -->
    <section id="home" aria-labelledby="hero-heading"
             class="relative isolate min-h-[92vh] overflow-hidden">

      <!-- Background image -->
      <img src="images/carousel-11.jpg"
           alt="A professional home service technician ready to assist"
           class="absolute inset-0 h-full w-full object-cover"
           width="1920" height="1080"
           fetchpriority="high" />

      <!-- Gradient overlay -->
      <div class="hero-overlay absolute inset-0" aria-hidden="true"></div>

      <!-- Content -->
      <div class="relative mx-auto flex min-h-[92vh] max-w-7xl flex-col justify-center px-4 py-20 sm:px-6 lg:px-8">
        <div class="max-w-2xl animate-fade-up">

          <!-- Badge -->
          <span class="mb-5 inline-flex items-center gap-2 rounded-full border border-white/20
                       bg-white/10 px-4 py-1.5 text-xs font-semibold uppercase tracking-widest
                       text-white backdrop-blur-sm">
            <span class="h-2 w-2 animate-pulse rounded-full bg-brand-400"></span>
            Direct service provider for Siliguri & nearby areas
          </span>

          <h1 id="hero-heading"
              class="text-4xl font-extrabold leading-tight tracking-tight text-white
                     sm:text-5xl lg:text-6xl xl:text-7xl">
            Direct <span class="text-brand-400">Home Services</span><br />
            for Siliguri &amp; Surrounding Areas.
          </h1>

          <p class="mt-6 max-w-xl text-base leading-relaxed text-slate-200 sm:text-lg">
            We provide electrical, plumbing, cleaning, carpentry, appliance repair and maintenance services through our own trained departments, engineers and local field teams.
          </p>

          <!-- Search bar -->
          <form role="search" aria-label="Search for a service"
                class="mt-8 flex flex-col gap-3 rounded-2xl bg-white/95 p-3 shadow-2xl backdrop-blur
                       sm:flex-row dark:bg-slate-800/95">
            <label for="hero-search" class="sr-only">Search services</label>
            <input id="hero-search"
                   type="search"
                   placeholder="e.g. electrician, home cleaning, plumbing…"
                   class="min-w-0 flex-1 rounded-xl bg-transparent px-4 py-2.5 text-sm text-slate-800
                          placeholder-slate-400 outline-none dark:text-white" />
            <label for="hero-city" class="sr-only">Select your city</label>
            <select id="hero-city"
                    class="rounded-xl border border-slate-200 bg-white px-4 py-2.5 text-sm text-slate-700
                           outline-none dark:border-slate-600 dark:bg-slate-700 dark:text-slate-200">
              <option value="">Select city</option>
              <option>Mumbai</option>
              <option>Delhi NCR</option>
              <option>Bengaluru</option>
              <option>Hyderabad</option>
              <option>Pune</option>
              <option>Chennai</option>
            </select>
            <button type="submit"
                    class="rounded-xl bg-brand-600 px-6 py-2.5 text-sm font-semibold text-white
                           transition hover:bg-brand-700 active:scale-95">
              Search
            </button>
          </form>

          <!-- CTA buttons -->
          <div class="mt-7 flex flex-wrap gap-4">
            <a href="#contact"
               class="inline-flex items-center gap-2 rounded-full bg-brand-600 px-7 py-3.5 text-sm
                      font-semibold text-white shadow-lg transition hover:bg-brand-700 hover:-translate-y-0.5">
              <!-- calendar icon -->
              <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <rect x="3" y="4" width="18" height="18" rx="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
              </svg>
              Book Now
            </a>
            <a href="#services"
               class="inline-flex items-center gap-2 rounded-full border border-white/40 px-7 py-3.5
                      text-sm font-semibold text-white backdrop-blur transition hover:bg-white/10
                      hover:-translate-y-0.5">
              Explore Services
              <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M5 12h14M12 5l7 7-7 7"/>
              </svg>
            </a>
          </div>
        </div>

        <!-- Floating stats card -->
        <div class="mt-14 grid max-w-lg grid-cols-3 gap-4 animate-fade-up"
             style="animation-delay:0.2s">
          <div class="rounded-2xl border border-white/15 bg-white/10 px-4 py-4 text-center backdrop-blur">
            <p class="text-2xl font-extrabold text-white">4.9<span class="text-brand-400">★</span></p>
            <p class="mt-1 text-[11px] font-medium uppercase tracking-wider text-slate-300">Avg Rating</p>
          </div>
          <div class="rounded-2xl border border-white/15 bg-white/10 px-4 py-4 text-center backdrop-blur">
            <p class="text-2xl font-extrabold text-white">30<span class="text-xs text-brand-400">min</span></p>
            <p class="mt-1 text-[11px] font-medium uppercase tracking-wider text-slate-300">Response</p>
          </div>
          <div class="rounded-2xl border border-white/15 bg-white/10 px-4 py-4 text-center backdrop-blur">
            <p class="text-2xl font-extrabold text-white">100<span class="text-brand-400">%</span></p>
            <p class="mt-1 text-[11px] font-medium uppercase tracking-wider text-slate-300">Verified</p>
          </div>
        </div>
      </div>
    </section>

    <!-- ╔══════════════════════════════════════════════════════════╗
         ║  3. AD BANNER — Festival Offer (below hero)              ║
         ╚══════════════════════════════════════════════════════════╝ -->
    <section aria-label="Promotional offer" class="bg-gradient-to-r from-brand-700 via-brand-600 to-accent-500">
      <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-4 px-4 py-5
                  sm:flex-row sm:px-6 lg:px-8">
        <div class="flex items-center gap-4 text-center sm:text-left">
          <!-- Tag icon -->
          <span class="hidden rounded-full bg-white/20 p-3 sm:flex" aria-hidden="true">
            <svg class="h-6 w-6 text-white" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"/>
              <line x1="7" y1="7" x2="7.01" y2="7"/>
            </svg>
          </span>
          <div>
            <p class="text-xs font-semibold uppercase tracking-widest text-white/80">Festival Special</p>
            <p class="text-lg font-bold text-white sm:text-xl">
              Bundle 2 services and save up to <span class="underline decoration-dotted">30%</span> this week!
            </p>
          </div>
        </div>
        <a href="#contact"
           class="shrink-0 rounded-full border border-white px-6 py-2.5 text-sm font-semibold text-white
                  transition hover:bg-white hover:text-brand-700">
          Claim Offer →
        </a>
      </div>
    </section>

    <!-- ╔══════════════════════════════════════════════════════════╗
         ║  4. SERVICES SECTION                                     ║
         ╚══════════════════════════════════════════════════════════╝ -->
    <section id="services" aria-labelledby="services-heading"
             class="py-20 dark:bg-slate-900">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Section header -->
        <div class="text-center">
          <p class="text-sm font-semibold uppercase tracking-widest text-brand-600 dark:text-brand-400">
            What We Offer
          </p>
          <h2 id="services-heading"
              class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl">
            Everything Your Home Needs,<br class="hidden sm:block" /> One Platform.
          </h2>
          <p class="mx-auto mt-4 max-w-2xl text-base leading-relaxed text-slate-600 dark:text-slate-400">
            Choose from 50+ vetted home service categories — each backed by trained professionals,
            warranty coverage, and real-time tracking.
          </p>
        </div>

        <!-- Service cards grid -->
        <div class="mt-12 grid gap-7 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">

          <!-- Card: Home Maintenance -->
          <article class="card-lift img-zoom group rounded-2xl border border-slate-100 bg-white shadow-sm
                          overflow-hidden dark:border-slate-700 dark:bg-slate-800">
            <div class="overflow-hidden">
              <img src="images/service-1.jpg"
                   alt="Local maintenance support technician at a home"
                   class="h-48 w-full object-cover"
                   loading="lazy" width="400" height="300" />
            </div>
            <div class="p-5">
              <h3 class="text-base font-bold text-slate-900 dark:text-white">Home Maintenance</h3>
              <p class="mt-1.5 text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                Routine upkeep, minor repairs and prompt support for your home from our field team.
              </p>
              <a href="#contact"
                 class="mt-4 inline-flex items-center gap-1 text-xs font-semibold text-brand-600
                        transition group-hover:gap-2 dark:text-brand-400">
                Book now
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </article>

          <!-- Card: Deep Cleaning -->
          <article class="card-lift img-zoom group rounded-2xl border border-slate-100 bg-white shadow-sm
                          overflow-hidden dark:border-slate-700 dark:bg-slate-800">
            <div class="overflow-hidden">
              <img src="images/service-2.jpg"
                   alt="Professional cleaning expert deep-cleaning a home"
                   class="h-48 w-full object-cover"
                   loading="lazy" width="400" height="300" />
            </div>
            <div class="p-5">
              <h3 class="text-base font-bold text-slate-900 dark:text-white">Deep Cleaning</h3>
              <p class="mt-1.5 text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                Kitchen, living room, bathroom and full home cleaning services done to perfection.
              </p>
              <a href="#contact"
                 class="mt-4 inline-flex items-center gap-1 text-xs font-semibold text-brand-600
                        transition group-hover:gap-2 dark:text-brand-400">
                Book now
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </article>

          <!-- Card: Electrician -->
          <article class="card-lift img-zoom group rounded-2xl border border-slate-100 bg-white shadow-sm
                          overflow-hidden dark:border-slate-700 dark:bg-slate-800">
            <div class="overflow-hidden">
              <img src="images/electrical-engineer-using-digital-meter-checking-electric-current-voltage-circuit-breaker_101448-1933.avif"
                   alt="Licensed electrician checking circuit breaker with a digital meter"
                   class="h-48 w-full object-cover"
                   loading="lazy" width="400" height="300" />
            </div>
            <div class="p-5">
              <h3 class="text-base font-bold text-slate-900 dark:text-white">Electrician</h3>
              <p class="mt-1.5 text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                Certified electrical repairs, fittings, and safety inspections.
              </p>
              <a href="#contact"
                 class="mt-4 inline-flex items-center gap-1 text-xs font-semibold text-brand-600
                        transition group-hover:gap-2 dark:text-brand-400">
                Book now
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </article>

          <!-- Card: Carpenter -->
          <article class="card-lift img-zoom group rounded-2xl border border-slate-100 bg-white shadow-sm
                          overflow-hidden dark:border-slate-700 dark:bg-slate-800">
            <div class="overflow-hidden">
              <img src="images/carpenter/1.jpg"
                   alt="Skilled carpenter working on wooden furniture"
                   class="h-48 w-full object-cover"
                   loading="lazy" width="400" height="300" />
            </div>
            <div class="p-5">
              <h3 class="text-base font-bold text-slate-900 dark:text-white">Carpenter</h3>
              <p class="mt-1.5 text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                Furniture assembly, custom woodwork, door and window repairs.
              </p>
              <a href="#contact"
                 class="mt-4 inline-flex items-center gap-1 text-xs font-semibold text-brand-600
                        transition group-hover:gap-2 dark:text-brand-400">
                Book now
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </article>

          <!-- Card: Plumber -->
          <article class="card-lift img-zoom group rounded-2xl border border-slate-100 bg-white shadow-sm
                          overflow-hidden dark:border-slate-700 dark:bg-slate-800">
            <div class="overflow-hidden">
              <img src="images/service-3.jpg"
                   alt="Plumber fixing water pipes in a home bathroom"
                   class="h-48 w-full object-cover"
                   loading="lazy" width="400" height="300" />
            </div>
            <div class="p-5">
              <h3 class="text-base font-bold text-slate-900 dark:text-white">Plumber</h3>
              <p class="mt-1.5 text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                Pipe leaks, tap fittings, drainage blockages — resolved quickly.
              </p>
              <a href="#contact"
                 class="mt-4 inline-flex items-center gap-1 text-xs font-semibold text-brand-600
                        transition group-hover:gap-2 dark:text-brand-400">
                Book now
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </article>

          <!-- Card: Painting -->
          <article class="card-lift img-zoom group rounded-2xl border border-slate-100 bg-white shadow-sm
                          overflow-hidden dark:border-slate-700 dark:bg-slate-800">
            <div class="overflow-hidden">
              <img src="images/painting.jpg"
                   alt="Professional painter applying fresh coat to an interior wall"
                   class="h-48 w-full object-cover"
                   loading="lazy" width="400" height="300" />
            </div>
            <div class="p-5">
              <h3 class="text-base font-bold text-slate-900 dark:text-white">Painting</h3>
              <p class="mt-1.5 text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                Interior & exterior painting with premium finishes and expert prep work.
              </p>
              <a href="#contact"
                 class="mt-4 inline-flex items-center gap-1 text-xs font-semibold text-brand-600
                        transition group-hover:gap-2 dark:text-brand-400">
                Book now
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </article>

          <!-- Card: Interior Design -->
          <article class="card-lift img-zoom group rounded-2xl border border-slate-100 bg-white shadow-sm
                          overflow-hidden dark:border-slate-700 dark:bg-slate-800">
            <div class="overflow-hidden">
              <img src="images/interior.jpg"
                   alt="Modern interior design living room space"
                   class="h-48 w-full object-cover"
                   loading="lazy" width="400" height="300" />
            </div>
            <div class="p-5">
              <h3 class="text-base font-bold text-slate-900 dark:text-white">Interior Design</h3>
              <p class="mt-1.5 text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                Full-room makeovers and décor planning by certified interior designers.
              </p>
              <a href="#contact"
                 class="mt-4 inline-flex items-center gap-1 text-xs font-semibold text-brand-600
                        transition group-hover:gap-2 dark:text-brand-400">
                Book now
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </article>

          <!-- Card: False Ceiling -->
          <article class="card-lift img-zoom group rounded-2xl border border-slate-100 bg-white shadow-sm
                          overflow-hidden dark:border-slate-700 dark:bg-slate-800">
            <div class="overflow-hidden">
              <img src="images/false-ceiling.jpg"
                   alt="Modern false ceiling installation in a home"
                   class="h-48 w-full object-cover"
                   loading="lazy" width="400" height="300" />
            </div>
            <div class="p-5">
              <h3 class="text-base font-bold text-slate-900 dark:text-white">False Ceiling</h3>
              <p class="mt-1.5 text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                Gypsum, POP and modular false ceiling design and installation.
              </p>
              <a href="#contact"
                 class="mt-4 inline-flex items-center gap-1 text-xs font-semibold text-brand-600
                        transition group-hover:gap-2 dark:text-brand-400">
                Book now
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </article>

          <!-- Card: CCTV / Security -->
          <article class="card-lift img-zoom group rounded-2xl border border-slate-100 bg-white shadow-sm
                          overflow-hidden dark:border-slate-700 dark:bg-slate-800">
            <div class="overflow-hidden">
              <img src="images/camera/1.jpg"
                   alt="CCTV camera installation by a security professional"
                   class="h-48 w-full object-cover"
                   loading="lazy" width="400" height="300" />
            </div>
            <div class="p-5">
              <h3 class="text-base font-bold text-slate-900 dark:text-white">CCTV / Security</h3>
              <p class="mt-1.5 text-sm leading-relaxed text-slate-500 dark:text-slate-400">
                Camera installation, DVR setup and home security audits.
              </p>
              <a href="#contact"
                 class="mt-4 inline-flex items-center gap-1 text-xs font-semibold text-brand-600
                        transition group-hover:gap-2 dark:text-brand-400">
                Book now
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M5 12h14M12 5l7 7-7 7"/>
                </svg>
              </a>
            </div>
          </article>
        </div>

        <!-- View all CTA -->
        <div class="mt-10 text-center">
          <a href="#contact"
             class="inline-flex items-center gap-2 rounded-full border border-brand-600 px-8 py-3 text-sm
                    font-semibold text-brand-600 transition hover:bg-brand-600 hover:text-white
                    dark:border-brand-400 dark:text-brand-400 dark:hover:bg-brand-600 dark:hover:text-white">
            View All 50+ Services
            <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                 stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
              <path d="M5 12h14M12 5l7 7-7 7"/>
            </svg>
          </a>
        </div>
      </div>
    </section>

    <!-- ╔══════════════════════════════════════════════════════════╗
         ║  5. WHY CHOOSE US                                        ║
         ╚══════════════════════════════════════════════════════════╝ -->
    <section aria-labelledby="why-heading"
             class="bg-slate-900 py-20 dark:bg-slate-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <p class="text-sm font-semibold uppercase tracking-widest text-brand-400">Why MistryHub</p>
          <h2 id="why-heading"
              class="mt-3 text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
            Operational Excellence Behind Every Booking.
          </h2>
          <p class="mx-auto mt-4 max-w-xl text-base text-slate-400">
            We build trust into every step — from how we vet our partners to how we follow up after your job is done.
          </p>
        </div>

        <div class="mt-14 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">

          <!-- Feature card template -->
          <article class="rounded-2xl border border-slate-700 bg-slate-800 p-7 transition hover:border-brand-500
                          dark:border-slate-600 dark:bg-slate-700">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-brand-600/20 text-brand-400">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                <polyline points="22 4 12 14.01 9 11.01"/>
              </svg>
            </div>
            <h3 class="mt-5 text-lg font-bold text-white">Verified Professionals</h3>
            <p class="mt-2 text-sm leading-relaxed text-slate-400">
              Every partner undergoes background verification, skill testing, and periodic re-evaluation.
            </p>
          </article>

          <article class="rounded-2xl border border-slate-700 bg-slate-800 p-7 transition hover:border-brand-500
                          dark:border-slate-600 dark:bg-slate-700">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-accent-500/20 text-accent-400">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
              </svg>
            </div>
            <h3 class="mt-5 text-lg font-bold text-white">Affordable Pricing</h3>
            <p class="mt-2 text-sm leading-relaxed text-slate-400">
              Upfront quotes with zero hidden fees. Compare packages before you pay.
            </p>
          </article>

          <article class="rounded-2xl border border-slate-700 bg-slate-800 p-7 transition hover:border-brand-500
                          dark:border-slate-600 dark:bg-slate-700">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-sky-500/20 text-sky-400">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="12" cy="12" r="10"/>
                <polyline points="12 6 12 12 16 14"/>
              </svg>
            </div>
            <h3 class="mt-5 text-lg font-bold text-white">Quick Response</h3>
            <p class="mt-2 text-sm leading-relaxed text-slate-400">
              Average professional assignment within 30 minutes in top service zones.
            </p>
          </article>

          <article class="rounded-2xl border border-slate-700 bg-slate-800 p-7 transition hover:border-brand-500
                          dark:border-slate-600 dark:bg-slate-700">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-purple-500/20 text-purple-400">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
              </svg>
            </div>
            <h3 class="mt-5 text-lg font-bold text-white">24/7 Customer Support</h3>
            <p class="mt-2 text-sm leading-relaxed text-slate-400">
              Reach our support team any time via chat, call, or email — before and after service.
            </p>
          </article>

          <article class="rounded-2xl border border-slate-700 bg-slate-800 p-7 transition hover:border-brand-500
                          dark:border-slate-600 dark:bg-slate-700">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-rose-500/20 text-rose-400">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
              </svg>
            </div>
            <h3 class="mt-5 text-lg font-bold text-white">Service Warranty</h3>
            <p class="mt-2 text-sm leading-relaxed text-slate-400">
              Not satisfied? We re-do the service for free within our satisfaction guarantee window.
            </p>
          </article>

          <article class="rounded-2xl border border-slate-700 bg-slate-800 p-7 transition hover:border-brand-500
                          dark:border-slate-600 dark:bg-slate-700">
            <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-yellow-500/20 text-yellow-400">
              <svg class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                   stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <circle cx="12" cy="12" r="3"/><path d="M19.07 4.93l-1.41 1.41M4.93 19.07l1.41-1.41M20 12h2M2 12h2M19.07 19.07l-1.41-1.41M4.93 4.93l1.41 1.41M12 20v2M12 2v2"/>
              </svg>
            </div>
            <h3 class="mt-5 text-lg font-bold text-white">Insured & Trusted</h3>
            <p class="mt-2 text-sm leading-relaxed text-slate-400">
              All professionals carry valid insurance, keeping your home protected during every visit.
            </p>
          </article>
        </div>
      </div>
    </section>

    <!-- ╔══════════════════════════════════════════════════════════╗
         ║  6. ABOUT US                                             ║
         ╚══════════════════════════════════════════════════════════╝ -->
    <section id="about" aria-labelledby="about-heading"
             class="py-20 dark:bg-slate-900">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="grid items-center gap-12 lg:grid-cols-2">

          <!-- Image side -->
          <div class="relative">
            <div class="overflow-hidden rounded-3xl shadow-2xl img-zoom">
              <img src="images/about.jpg"
                   alt="The MistryHub team discussing service quality and customer satisfaction"
                   class="h-[480px] w-full object-cover"
                   loading="lazy" width="720" height="960" />
            </div>
            <!-- Floating badge -->
            <div class="absolute -bottom-6 -right-4 rounded-2xl border border-brand-100 bg-white px-6 py-4
                        shadow-xl dark:border-slate-700 dark:bg-slate-800">
              <p class="text-3xl font-extrabold text-brand-600">7+</p>
              <p class="text-xs font-semibold uppercase tracking-wider text-slate-500 dark:text-slate-400">Years of Trust</p>
            </div>
            <!-- Accent blob -->
            <div class="absolute -left-8 -top-8 -z-10 h-64 w-64 rounded-full bg-brand-100/60
                        blur-3xl dark:bg-brand-900/30" aria-hidden="true"></div>
          </div>

          <!-- Text side -->
          <div>
            <p class="text-sm font-semibold uppercase tracking-widest text-brand-600 dark:text-brand-400">About Us</p>
            <h2 id="about-heading"
                class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl">
              We Connect Households With Dependable Specialists.
            </h2>
            <p class="mt-5 text-base leading-relaxed text-slate-600 dark:text-slate-400">
              MistryHub was founded in 2018 to simplify home services in Indian cities. Today we operate across
              12+ metros, connecting millions of households with trained, verified professionals for everything
              from daily maintenance to major home renovation.
            </p>

            <!-- Mission / Vision cards -->
            <div class="mt-8 grid gap-4 sm:grid-cols-2">
              <div class="rounded-2xl border border-brand-100 bg-brand-50 p-5 dark:border-slate-700 dark:bg-slate-800">
                <h3 class="text-sm font-bold uppercase tracking-wider text-brand-700 dark:text-brand-400">
                  Our Mission
                </h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                  Make premium home services accessible, reliable, and transparent for every household in India.
                </p>
              </div>
              <div class="rounded-2xl border border-accent-100 bg-orange-50 p-5 dark:border-slate-700 dark:bg-slate-800">
                <h3 class="text-sm font-bold uppercase tracking-wider text-accent-600 dark:text-accent-400">
                  Our Vision
                </h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
                  Become the most trusted home care platform in South Asia, powered by quality professionals.
                </p>
              </div>
            </div>

            <!-- Stat row -->
            <div class="mt-8 flex flex-wrap gap-6">
              <div>
                <p class="text-3xl font-extrabold text-slate-900 dark:text-white">50K+</p>
                <p class="text-xs text-slate-500 dark:text-slate-400">Happy customers</p>
              </div>
              <div class="h-auto w-px bg-slate-200 dark:bg-slate-700" aria-hidden="true"></div>
              <div>
                <p class="text-3xl font-extrabold text-slate-900 dark:text-white">2,000+</p>
                <p class="text-xs text-slate-500 dark:text-slate-400">Vetted professionals</p>
              </div>
              <div class="h-auto w-px bg-slate-200 dark:bg-slate-700" aria-hidden="true"></div>
              <div>
                <p class="text-3xl font-extrabold text-slate-900 dark:text-white">12</p>
                <p class="text-xs text-slate-500 dark:text-slate-400">Cities served</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ╔══════════════════════════════════════════════════════════╗
         ║  7. AD BANNER — Mid-page (Seasonal Discount)             ║
         ╚══════════════════════════════════════════════════════════╝ -->
    <section aria-label="Seasonal discount offer"
             class="relative isolate overflow-hidden bg-slate-900 py-16 dark:bg-slate-800">
      <!-- Background image with overlay -->
      <img src="images/counter.jpg"
           alt=""
           role="presentation"
           class="absolute inset-0 h-full w-full object-cover opacity-20"
           loading="lazy" width="1920" height="600" />
      <div class="absolute inset-0 bg-gradient-to-r from-brand-900/80 to-slate-900/70" aria-hidden="true"></div>

      <div class="relative mx-auto max-w-4xl px-4 text-center sm:px-6 lg:px-8">
        <span class="inline-block rounded-full bg-brand-500/20 px-4 py-1.5 text-xs font-semibold
                     uppercase tracking-widest text-brand-300">
          Monsoon Ready Deal
        </span>
        <h2 class="mt-5 text-3xl font-extrabold text-white sm:text-4xl">
          Pre-book Your Monsoon Maintenance Package<br class="hidden sm:block" />
          and Save Up to <span class="text-brand-400">₹1,500</span>.
        </h2>
        <p class="mx-auto mt-4 max-w-xl text-base text-slate-300">
          Waterproofing, pipe inspection, electrical safety checks — one visit, full coverage.
          Limited slots available this season.
        </p>
        <div class="mt-8 flex flex-wrap justify-center gap-4">
          <a href="#contact"
             class="rounded-full bg-brand-500 px-8 py-3.5 text-sm font-semibold text-white shadow-lg
                    transition hover:bg-brand-400 hover:-translate-y-0.5">
            Schedule Inspection
          </a>
          <a href="#services"
             class="rounded-full border border-white/30 px-8 py-3.5 text-sm font-semibold text-white
                    transition hover:bg-white/10 hover:-translate-y-0.5">
            View Package Details
          </a>
        </div>
      </div>
    </section>

    <!-- ╔══════════════════════════════════════════════════════════╗
         ║  8. TESTIMONIALS                                         ║
         ╚══════════════════════════════════════════════════════════╝ -->
    <section aria-labelledby="testimonials-heading"
             class="py-20 dark:bg-slate-900">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center">
          <p class="text-sm font-semibold uppercase tracking-widest text-brand-600 dark:text-brand-400">
            Customer Reviews
          </p>
          <h2 id="testimonials-heading"
              class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl">
            What Customers Say After Their First Booking.
          </h2>
        </div>

        <div class="mt-12 grid gap-7 lg:grid-cols-3">

          <!-- Testimonial 1 -->
          <article class="card-lift rounded-2xl border border-slate-100 bg-white p-7 shadow-sm
                          dark:border-slate-700 dark:bg-slate-800">
            <!-- Stars -->
            <div class="flex gap-0.5" aria-label="Rating: 5 out of 5 stars">
              <span class="star text-xl" aria-hidden="true">★★★★★</span>
            </div>
            <blockquote class="mt-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
              "The electrician arrived on time, explained every issue clearly, and fixed everything
               in a single visit. The experience felt genuinely premium from booking to completion."
            </blockquote>
            <div class="mt-6 flex items-center gap-4">
              <img src="images/testimonial-1.jpg"
                   alt="Priya Malhotra, verified customer"
                   class="h-12 w-12 rounded-full object-cover"
                   loading="lazy" width="48" height="48" />
              <div>
                <p class="text-sm font-bold text-slate-900 dark:text-white">Priya Malhotra</p>
                <p class="text-xs text-slate-500 dark:text-slate-400">Mumbai · Electrician service</p>
              </div>
            </div>
          </article>

          <!-- Testimonial 2 -->
          <article class="card-lift rounded-2xl border border-slate-100 bg-white p-7 shadow-sm
                          dark:border-slate-700 dark:bg-slate-800">
            <div class="flex gap-0.5" aria-label="Rating: 5 out of 5 stars">
              <span class="star text-xl" aria-hidden="true">★★★★★</span>
            </div>
            <blockquote class="mt-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
              "Booked a bundled home service package in one slot. Both teams were professional and
               the experience was seamless from booking to completion. Highly recommended."
            </blockquote>
            <div class="mt-6 flex items-center gap-4">
              <img src="images/testimonial-2.jpg"
                   alt="Arjun Sethi, verified customer"
                   class="h-12 w-12 rounded-full object-cover"
                   loading="lazy" width="48" height="48" />
              <div>
                <p class="text-sm font-bold text-slate-900 dark:text-white">Arjun Sethi</p>
                <p class="text-xs text-slate-500 dark:text-slate-400">Delhi NCR · Home service bundle</p>
              </div>
            </div>
          </article>

          <!-- Testimonial 3 -->
          <article class="card-lift rounded-2xl border border-slate-100 bg-white p-7 shadow-sm
                          dark:border-slate-700 dark:bg-slate-800">
            <div class="flex gap-0.5" aria-label="Rating: 5 out of 5 stars">
              <span class="star text-xl" aria-hidden="true">★★★★★</span>
            </div>
            <blockquote class="mt-4 text-sm leading-relaxed text-slate-600 dark:text-slate-400">
              "The mobile booking flow is outstanding. Found a carpenter in minutes, and the
               finished woodwork was spotless. Transparent pricing, no last-minute surprises."
            </blockquote>
            <div class="mt-6 flex items-center gap-4">
              <img src="images/testimonial-3.jpg"
                   alt="Meera Nair, verified customer"
                   class="h-12 w-12 rounded-full object-cover"
                   loading="lazy" width="48" height="48" />
              <div>
                <p class="text-sm font-bold text-slate-900 dark:text-white">Meera Nair</p>
                <p class="text-xs text-slate-500 dark:text-slate-400">Bengaluru · Carpenter service</p>
              </div>
            </div>
          </article>
        </div>

        <!-- Team showcase strip -->
        <div class="mt-16 text-center">
          <p class="text-sm text-slate-500 dark:text-slate-400">Meet some of our 2,000+ verified professionals</p>
          <div class="mt-5 flex flex-wrap justify-center gap-4">
            <img src="images/team-1.jpg" alt="MistryHub professional team member"
                 class="h-14 w-14 rounded-full object-cover ring-2 ring-white shadow-md dark:ring-slate-700"
                 loading="lazy" width="56" height="56" />
            <img src="images/team-2.jpg" alt="MistryHub professional team member"
                 class="h-14 w-14 rounded-full object-cover ring-2 ring-white shadow-md dark:ring-slate-700"
                 loading="lazy" width="56" height="56" />
            <img src="images/team-3.jpg" alt="MistryHub professional team member"
                 class="h-14 w-14 rounded-full object-cover ring-2 ring-white shadow-md dark:ring-slate-700"
                 loading="lazy" width="56" height="56" />
            <img src="images/team-4.jpg" alt="MistryHub professional team member"
                 class="h-14 w-14 rounded-full object-cover ring-2 ring-white shadow-md dark:ring-slate-700"
                 loading="lazy" width="56" height="56" />
          </div>
        </div>
      </div>
    </section>

    <!-- ╔══════════════════════════════════════════════════════════╗
         ║  9. CONTACT SECTION                                      ║
         ╚══════════════════════════════════════════════════════════╝ -->
    <section id="contact" aria-labelledby="contact-heading"
             class="bg-gray-50 py-20 dark:bg-slate-800">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

        <!-- Section header -->
        <div class="text-center">
          <p class="text-sm font-semibold uppercase tracking-widest text-brand-600 dark:text-brand-400">
            Get in Touch
          </p>
          <h2 id="contact-heading"
              class="mt-3 text-3xl font-extrabold tracking-tight text-slate-900 dark:text-white sm:text-4xl">
            Let Us Help You Book the Right Expert.
          </h2>
          <p class="mx-auto mt-4 max-w-xl text-base text-slate-600 dark:text-slate-400">
            Have a question, need a custom quote, or want to become a service partner?
            We respond within a few business hours.
          </p>
        </div>

        <div class="mt-12 grid gap-10 lg:grid-cols-[1fr_1.2fr]">

          <!-- Left: contact info + map placeholder -->
          <div class="space-y-8">
            <!-- Contact details -->
            <div class="rounded-2xl border border-slate-200 bg-white p-7 shadow-sm
                        dark:border-slate-700 dark:bg-slate-900">
              <h3 class="text-lg font-bold text-slate-900 dark:text-white">Contact Details</h3>
              <ul class="mt-6 space-y-5 text-sm text-slate-600 dark:text-slate-400">
                <li class="flex items-start gap-3">
                  <span class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg
                               bg-brand-50 text-brand-600 dark:bg-brand-900/40 dark:text-brand-400">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                      <circle cx="12" cy="10" r="3"/>
                    </svg>
                  </span>
                  <div>
                    <p class="font-semibold text-slate-800 dark:text-white">Address</p>
                    <p class="mt-0.5">302 Service Avenue, Andheri West,<br />Mumbai — 400 053, India</p>
                  </div>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg
                               bg-brand-50 text-brand-600 dark:bg-brand-900/40 dark:text-brand-400">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                    </svg>
                  </span>
                  <div>
                    <p class="font-semibold text-slate-800 dark:text-white">Phone</p>
                    <a href="tel:+919876543210"
                       class="mt-0.5 block transition hover:text-brand-600 dark:hover:text-brand-400">
                      +91 98765 43210
                    </a>
                  </div>
                </li>
                <li class="flex items-start gap-3">
                  <span class="mt-0.5 flex h-8 w-8 shrink-0 items-center justify-center rounded-lg
                               bg-brand-50 text-brand-600 dark:bg-brand-900/40 dark:text-brand-400">
                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                         stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                      <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                      <polyline points="22,6 12,13 2,6"/>
                    </svg>
                  </span>
                  <div>
                    <p class="font-semibold text-slate-800 dark:text-white">Email</p>
                    <a href="mailto:hello@mistryhub.com"
                       class="mt-0.5 block transition hover:text-brand-600 dark:hover:text-brand-400">
                      hello@mistryhub.com
                    </a>
                  </div>
                </li>
              </ul>
            </div>

            <!-- Embedded map placeholder -->
            <div class="overflow-hidden rounded-2xl border border-slate-200 bg-slate-100 shadow-sm
                        dark:border-slate-700 dark:bg-slate-700"
                 role="img" aria-label="Map showing MistryHub office location in Andheri West, Mumbai">
              <div class="flex h-56 flex-col items-center justify-center gap-3 text-slate-500 dark:text-slate-400">
                <svg class="h-10 w-10" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                     stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                  <circle cx="12" cy="10" r="3"/>
                </svg>
                <p class="text-sm font-medium">Andheri West, Mumbai</p>
                <p class="text-xs">Embed Google Maps iframe here</p>
              </div>
            </div>
          </div>

          <!-- Right: contact form -->
          <div class="rounded-2xl border border-slate-200 bg-white p-8 shadow-sm
                      dark:border-slate-700 dark:bg-slate-900">
            <h3 class="text-xl font-bold text-slate-900 dark:text-white">Send a Message</h3>
            <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">
              Fill in the form and our team will get back to you within 24 hours.
            </p>

            <form class="mt-7 space-y-5" novalidate>
              <div class="grid gap-5 sm:grid-cols-2">
                <div>
                  <label for="contact-name"
                         class="mb-1.5 block text-sm font-semibold text-slate-700 dark:text-slate-300">
                    Full Name <span class="text-rose-500" aria-hidden="true">*</span>
                  </label>
                  <input id="contact-name"
                         type="text"
                         name="name"
                         autocomplete="name"
                         required
                         placeholder="Rahul Sharma"
                         class="w-full rounded-xl border border-slate-200 bg-gray-50 px-4 py-3 text-sm
                                text-slate-800 outline-none transition placeholder:text-slate-400
                                focus:border-brand-500 focus:ring-2 focus:ring-brand-200
                                dark:border-slate-600 dark:bg-slate-800 dark:text-white
                                dark:focus:ring-brand-800" />
                </div>
                <div>
                  <label for="contact-email"
                         class="mb-1.5 block text-sm font-semibold text-slate-700 dark:text-slate-300">
                    Email <span class="text-rose-500" aria-hidden="true">*</span>
                  </label>
                  <input id="contact-email"
                         type="email"
                         name="email"
                         autocomplete="email"
                         required
                         placeholder="rahul@example.com"
                         class="w-full rounded-xl border border-slate-200 bg-gray-50 px-4 py-3 text-sm
                                text-slate-800 outline-none transition placeholder:text-slate-400
                                focus:border-brand-500 focus:ring-2 focus:ring-brand-200
                                dark:border-slate-600 dark:bg-slate-800 dark:text-white
                                dark:focus:ring-brand-800" />
                </div>
              </div>
              <div>
                <label for="contact-phone"
                       class="mb-1.5 block text-sm font-semibold text-slate-700 dark:text-slate-300">
                  Phone Number
                </label>
                <input id="contact-phone"
                       type="tel"
                       name="phone"
                       autocomplete="tel"
                       placeholder="+91 98765 43210"
                       class="w-full rounded-xl border border-slate-200 bg-gray-50 px-4 py-3 text-sm
                              text-slate-800 outline-none transition placeholder:text-slate-400
                              focus:border-brand-500 focus:ring-2 focus:ring-brand-200
                              dark:border-slate-600 dark:bg-slate-800 dark:text-white
                              dark:focus:ring-brand-800" />
              </div>
              <div>
                <label for="contact-service"
                       class="mb-1.5 block text-sm font-semibold text-slate-700 dark:text-slate-300">
                  Service Required
                </label>
                <select id="contact-service"
                        name="service"
                        class="w-full rounded-xl border border-slate-200 bg-gray-50 px-4 py-3 text-sm
                               text-slate-700 outline-none transition focus:border-brand-500
                               focus:ring-2 focus:ring-brand-200 dark:border-slate-600
                               dark:bg-slate-800 dark:text-slate-200 dark:focus:ring-brand-800">
                  <option value="">Select a service</option>
                  <option>Deep Cleaning</option>
                  <option>Appliance Repair</option>
                  <option>Electrician</option>
                  <option>Plumber</option>
                  <option>Carpenter</option>
                  <option>Painting</option>
                  <option>Interior Design</option>
                  <option>CCTV / Security</option>
                  <option>Other</option>
                </select>
              </div>
              <div>
                <label for="contact-message"
                       class="mb-1.5 block text-sm font-semibold text-slate-700 dark:text-slate-300">
                  Message <span class="text-rose-500" aria-hidden="true">*</span>
                </label>
                <textarea id="contact-message"
                          name="message"
                          rows="5"
                          required
                          placeholder="Describe your requirement, preferred date/time, and any other details…"
                          class="w-full resize-none rounded-xl border border-slate-200 bg-gray-50 px-4 py-3
                                 text-sm text-slate-800 outline-none transition placeholder:text-slate-400
                                 focus:border-brand-500 focus:ring-2 focus:ring-brand-200
                                 dark:border-slate-600 dark:bg-slate-800 dark:text-white
                                 dark:focus:ring-brand-800"></textarea>
              </div>
              <button type="submit"
                      class="w-full rounded-xl bg-brand-600 py-3.5 text-sm font-semibold text-white
                             shadow-sm transition hover:bg-brand-700 hover:-translate-y-0.5
                             active:translate-y-0 sm:w-auto sm:px-10">
                Send Message →
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- ╔══════════════════════════════════════════════════════════╗
         ║  10. AD BANNER — Before Footer (Final CTA)               ║
         ╚══════════════════════════════════════════════════════════╝ -->
    <section aria-label="Final call to action" class="bg-brand-600">
      <div class="mx-auto flex max-w-7xl flex-col items-center justify-between gap-6 px-4 py-14
                  text-center sm:px-6 lg:flex-row lg:px-8 lg:text-left">
        <div>
          <h2 class="text-2xl font-extrabold text-white sm:text-3xl">
            Your Next Reliable Home Service Is One Click Away.
          </h2>
          <p class="mt-2 text-base text-brand-100">
            Join 50,000+ households who trust MistryHub for premium home care.
          </p>
        </div>
        <div class="flex shrink-0 flex-col gap-3 sm:flex-row">
          <a href="#contact"
             class="rounded-full bg-white px-8 py-3.5 text-sm font-semibold text-brand-700
                    transition hover:bg-brand-50 hover:-translate-y-0.5 shadow-lg">
            Book Service Now
          </a>
          <a href="#services"
             class="rounded-full border border-white/40 px-8 py-3.5 text-sm font-semibold text-white
                    transition hover:bg-white/10 hover:-translate-y-0.5">
            Browse Services
          </a>
        </div>
      </div>
    </section>

<?php $part='footer'; include 'includes/header-footer.php'; ?>

  <!-- ╔══════════════════════════════════════════════════════════╗
       ║  VANILLA JS — Dark mode + Mobile menu (minimal)          ║
       ╚══════════════════════════════════════════════════════════╝ -->
  <script>
    /* ─── Theme (dark / light) ─── */
    (function () {
      var root = document.documentElement;
      var STORAGE_KEY = 'mistryhub-theme';
      var prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
      var stored = localStorage.getItem(STORAGE_KEY);
      var isDark = stored ? stored === 'dark' : prefersDark;

      function setTheme(dark) {
        root.classList.toggle('dark', dark);
        localStorage.setItem(STORAGE_KEY, dark ? 'dark' : 'light');

        // Swap sun/moon icons on desktop toggle
        var moon = document.getElementById('icon-moon');
        var sun  = document.getElementById('icon-sun');
        if (moon) moon.classList.toggle('hidden', dark);
        if (sun)  sun.classList.toggle('hidden', !dark);

        // Swap icons on mobile toggle
        var moonM = document.getElementById('icon-moon-mob');
        var sunM  = document.getElementById('icon-sun-mob');
        if (moonM) moonM.classList.toggle('hidden', dark);
        if (sunM)  sunM.classList.toggle('hidden', !dark);

        // Update aria-pressed on both buttons
        ['theme-toggle', 'theme-toggle-mob'].forEach(function (id) {
          var btn = document.getElementById(id);
          if (btn) btn.setAttribute('aria-pressed', String(dark));
        });
      }

      // Apply stored / system preference immediately (no flash)
      setTheme(isDark);

      // Wire up both toggle buttons after DOM ready
      document.addEventListener('DOMContentLoaded', function () {
        ['theme-toggle', 'theme-toggle-mob'].forEach(function (id) {
          var btn = document.getElementById(id);
          if (btn) {
            btn.addEventListener('click', function () {
              setTheme(!root.classList.contains('dark'));
            });
          }
        });
      });
    }());

    /* ─── Mobile hamburger menu ─── */
    document.addEventListener('DOMContentLoaded', function () {
      var hamburger  = document.getElementById('hamburger');
      var mobileMenu = document.getElementById('mobile-menu');
      var hamOpen    = document.getElementById('ham-open');
      var hamClose   = document.getElementById('ham-close');

      if (!hamburger || !mobileMenu) return;

      function openMenu(open) {
        mobileMenu.classList.toggle('hidden', !open);
        hamOpen.classList.toggle('hidden', open);
        hamClose.classList.toggle('hidden', !open);
        hamburger.setAttribute('aria-expanded', String(open));
      }

      hamburger.addEventListener('click', function () {
        openMenu(mobileMenu.classList.contains('hidden'));
      });

      // Close menu when any mobile link is clicked
      mobileMenu.querySelectorAll('.mobile-link').forEach(function (link) {
        link.addEventListener('click', function () { openMenu(false); });
      });

      // Close menu on Escape key
      document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') openMenu(false);
      });
    });
  </script>

</body>
</html>
