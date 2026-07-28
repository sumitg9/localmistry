<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- SEO -->
  <title>Contact Us | LocalMistry — Book Direct Services in Siliguri</title>
  <meta name="description" content="Contact LocalMistry for direct electrical, plumbing, cleaning, carpentry, appliance and maintenance services in Siliguri and surrounding areas." />
  <meta name="keywords" content="contact localmistry, electrician siliguri, plumber siliguri, home service booking siliguri, localmistry contact" />
  <meta name="robots" content="index, follow" />
  <meta name="geo.region" content="IN-WB" />
  <meta name="geo.placename" content="Siliguri" />

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
    ::-webkit-scrollbar { width: 6px; }
    ::-webkit-scrollbar-thumb { background: #0e888d; border-radius: 99px; }

    .contact-hero {
      background: linear-gradient(135deg, #13335c 0%, #1f4f74 60%, #13335c 100%);
      position: relative; overflow: hidden;
    }
    .contact-hero::before {
      content: ''; position: absolute; inset: 0;
      background: radial-gradient(ellipse 70% 80% at 80% 50%, rgba(245,166,35,.18) 0%, transparent 70%);
    }

    .form-input {
      transition: all .2s ease;
    }
    .form-input:focus {
      border-color: #0e888d;
      box-shadow: 0 0 0 3px rgba(245, 166, 35, .15);
    }

    #loader {
      position: fixed; top: 0; left: 0; height: 3px;
      background: linear-gradient(90deg, #0e888d, #35a5aa);
      z-index: 9999; animation: loadBar .8s ease forwards;
    }
    @keyframes loadBar { from { width: 0; } to { width: 100%; opacity: 0; } }

    @media (prefers-reduced-motion: reduce) {
      *, *::before, *::after { animation-duration:.01ms !important; transition-duration:.01ms !important; }
    }
  </style>
</head>

<body class="bg-white text-slate-800 font-sans antialiased dark:bg-slate-950 dark:text-slate-100">

  <div id="loader" aria-hidden="true"></div>

<?php $activePage = 'contact'; $part='header'; include 'includes/header-footer.php'; ?>
<main>

    <!-- HERO -->
    <section class="contact-hero py-16 sm:py-20" aria-label="Contact hero">
      <div class="relative mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 text-center">
        <nav class="mb-6 flex items-center justify-center gap-2 text-xs text-white/60" aria-label="Breadcrumb">
          <a href="/" class="hover:text-gold transition">Home</a>
          <svg class="h-3 w-3" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"/></svg>
          <span class="text-gold font-semibold">Contact</span>
        </nav>

        <h1 class="text-4xl sm:text-5xl font-extrabold text-white leading-tight">Book Direct Service in Siliguri.</h1>
        <p class="mt-3 text-lg text-white/70 max-w-md mx-auto">Call, WhatsApp or fill the form below to request electrical, plumbing, cleaning, carpentry, appliance or maintenance support from our local team.</p>
      </div>
    </section>

    <!-- CONTACT CONTENT -->
    <section class="py-12 bg-white dark:bg-slate-950">
      <div class="mx-auto max-w-6xl px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-5 gap-10">

          <!-- FORM -->
          <div class="lg:col-span-3">
            <div class="bg-white dark:bg-slate-900 border border-slate-200 dark:border-slate-800 rounded-3xl p-8 shadow-sm">
              <h2 class="text-2xl font-bold text-navy dark:text-white">Send us a message</h2>
              <p class="mt-1 text-sm text-slate-500 dark:text-slate-400">We'll get back to you shortly.</p>

              <form id="contact-form" class="mt-8 space-y-6" onsubmit="submitContactForm(event)">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                  <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1.5">Full Name</label>
                    <input type="text" id="name" required
                           class="form-input w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm dark:border-slate-700 dark:bg-slate-950 dark:text-white"
                           placeholder="Rahul Sharma">
                  </div>
                  <div>
                    <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1.5">Phone Number</label>
                    <input type="tel" id="phone" required pattern="[0-9]{10}"
                           class="form-input w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm dark:border-slate-700 dark:bg-slate-950 dark:text-white"
                           placeholder="98765 43210">
                  </div>
                </div>

                <div>
                  <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1.5">Email Address</label>
                  <input type="email" id="email"
                         class="form-input w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm dark:border-slate-700 dark:bg-slate-950 dark:text-white"
                         placeholder="you@example.com">
                </div>

                <div>
                  <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1.5">What do you need help with?</label>
                  <select id="service" required
                          class="form-input w-full rounded-xl border border-slate-300 bg-white px-4 py-3 text-sm dark:border-slate-700 dark:bg-slate-950 dark:text-white">
                    <option value="">Select a service</option>
                    <option>Electrical Work</option>
                    <option>Plumbing</option>
                    <option>Home Cleaning</option>
                    <option>Carpentry</option>
                    <option>Other / Custom Request</option>
                  </select>
                </div>

                <div>
                  <label class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-1.5">Message</label>
                  <textarea id="message" rows="4" required
                            class="form-input w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-sm dark:border-slate-700 dark:bg-slate-950 dark:text-white"
                            placeholder="Describe your requirement or question..."></textarea>
                </div>

                <button type="submit"
                        class="w-full rounded-full bg-gold py-3.5 text-sm font-bold text-white shadow-md transition active:scale-[0.985] hover:bg-gold-dark">
                  Send Message
                </button>

                <p id="form-success" class="hidden text-center text-sm text-emerald-600 dark:text-emerald-400 font-medium">Thank you! We'll contact you within minutes.</p>
              </form>
            </div>
          </div>

          <!-- CONTACT INFO -->
          <div class="lg:col-span-2 space-y-6">
            <div class="rounded-3xl border border-slate-200 dark:border-slate-800 bg-white dark:bg-slate-900 p-7">
              <h3 class="font-bold text-lg text-navy dark:text-white">Reach us directly</h3>

              <div class="mt-6 space-y-5 text-sm">
                <div class="flex gap-4">
                  <div class="mt-0.5 text-gold">📍</div>
                  <div>
                    <div class="font-semibold text-navy dark:text-white">Head Office</div>
                    <div class="text-slate-500 dark:text-slate-400 leading-snug">Sukanta Sarani By Ln, South Babupara,<br>Pradip Nagar, Siliguri, West Bengal 734005</div>
                  </div>
                </div>

                <div class="flex gap-4">
                  <div class="mt-0.5 text-gold">📞</div>
                  <div>
                    <a href="tel:+919832728228" class="font-semibold text-navy dark:text-white hover:text-gold transition">+91 98327 28228</a>
                    <div class="text-xs text-slate-500">Mon–Sun • 6 AM – 11 PM</div>
                  </div>
                </div>

                <div class="flex gap-4">
                  <div class="mt-0.5 text-gold">✉️</div>
                  <div>
                    <a href="mailto:hello@localmistry.com" class="font-semibold text-navy dark:text-white hover:text-gold transition">hello@localmistry.com</a>
                    <div class="text-xs text-slate-500">Response within 10 minutes</div>
                  </div>
                </div>
              </div>

              <div class="mt-7 pt-6 border-t border-slate-200 dark:border-slate-700">
                <a href="https://wa.me/919832728228" target="_blank"
                   class="flex items-center justify-center gap-2 rounded-full bg-emerald-600 hover:bg-emerald-700 transition py-3 text-sm font-bold text-white">
                  <span>Chat on WhatsApp</span>
                </a>
              </div>
            </div>

            <div class="rounded-3xl bg-sky/40 dark:bg-slate-900 border border-slate-200 dark:border-slate-800 p-6 text-sm">
              <div class="font-semibold text-navy dark:text-white mb-1">Quick tip</div>
              <p class="text-slate-600 dark:text-slate-300">For fastest booking, use the <a href="/services" class="text-gold hover:underline">Services page</a> and choose “Book Now” on any service.</p>
            </div>
          </div>

        </div>
      </div>
    </section>

<?php $part='footer'; include 'includes/header-footer.php'; ?>

  <script>
    /* Dark mode */
    const root = document.documentElement;
    const saved = localStorage.getItem('theme');
    if (saved === 'dark' || (!saved && window.matchMedia('(prefers-color-scheme:dark)').matches)) root.classList.add('dark');
    function syncThemeIcons() {
      const dark = root.classList.contains('dark');
      ['icon-moon','icon-moon-mob'].forEach(id => document.getElementById(id)?.classList.toggle('hidden', dark));
      ['icon-sun','icon-sun-mob'].forEach(id => document.getElementById(id)?.classList.toggle('hidden', !dark));
    }
    syncThemeIcons();
    ['theme-toggle','theme-toggle-mob'].forEach(id => {
      document.getElementById(id)?.addEventListener('click', () => {
        root.classList.toggle('dark');
        localStorage.setItem('theme', root.classList.contains('dark') ? 'dark' : 'light');
        syncThemeIcons();
      });
    });

    /* Mobile hamburger */
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const hamOpen = document.getElementById('ham-open');
    const hamClose = document.getElementById('ham-close');
    hamburger?.addEventListener('click', () => {
      const open = mobileMenu.classList.toggle('hidden');
      hamburger.setAttribute('aria-expanded', String(!open));
      hamOpen.classList.toggle('hidden', !open);
      hamClose.classList.toggle('hidden', open);
    });

    /* Fake form submission */
    function submitContactForm(e) {
      e.preventDefault();
      const btn = e.target.querySelector('button[type="submit"]');
      const success = document.getElementById('form-success');

      if (btn) btn.disabled = true;
      if (success) success.classList.remove('hidden');

      setTimeout(() => {
        e.target.reset();
        if (success) success.textContent = "Message sent! Our team will reach out shortly.";
        if (btn) btn.disabled = false;
      }, 1200);
    }
  </script>
</body>
</html>
