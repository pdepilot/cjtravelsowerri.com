<header class="site-header" id="siteHeader">
  <div class="container header-inner">
    <a class="brand" href="<?= route('home') ?>" aria-label="CJ Travels home">
          <img src="/images/logo-transparent.png" alt="CJ Travels" class="brand-logo" />
        </a>

    <nav class="nav-center" aria-label="Main navigation">
      <a href="<?= route('home') ?>" class="<?= (request()->is('/') || request()->is('home')) ? 'active' : '' ?>">Home</a>
      <a href="<?= route('flights') ?>">Flights</a>
      <a href="<?= route('hotels') ?>">Hotels</a>
      <a href="<?= route('destinations') ?>">Destinations</a>
      <a href="<?= route('financing') ?>">Financing</a>
      <a href="<?= route('about') ?>">About</a>
    </nav>

    <div class="nav-actions">
      <a href="<?= route('login') ?>" class="text-link">Sign in</a>
      <a href="<?= route('register') ?>" class="btn-nav-cta">Book now <i class="bi bi-arrow-right"></i></a>
    </div>

    <button class="navbar-toggler" type="button" id="mobileToggle"
            aria-controls="mobileNav" aria-expanded="false" aria-label="Open menu">
      <i class="bi bi-list"></i>
    </button>
  </div>
</header>

<!-- MOBILE DRAWER -->
<div class="mobile-nav-overlay" id="mobileOverlay"></div>

<aside class="mobile-nav" id="mobileNav" aria-label="Mobile navigation">
  <div class="mobile-nav-head">
    <a class="brand" href="<?= route('home') ?>" aria-label="CJ Travels home">
          <img src="/images/logo-transparent.png" alt="CJ Travels" class="brand-logo" />
        </a>
    <button class="mobile-nav-close" id="mobileClose" type="button" aria-label="Close menu">
      <i class="bi bi-x-lg"></i>
    </button>
  </div>
  <div class="mobile-nav-links">
    <a href="<?= route('home') ?>" class="<?= (request()->is('/') || request()->is('home')) ? 'active' : '' ?>"><i class="bi bi-house-door"></i> Home</a>
    <a href="<?= route('flights') ?>"><i class="bi bi-airplane"></i> Flights</a>
    <a href="<?= route('hotels') ?>"><i class="bi bi-building"></i> Hotels</a>
    <a href="<?= route('destinations') ?>"><i class="bi bi-compass"></i> Destinations</a>
    <a href="<?= route('financing') ?>"><i class="bi bi-cash-coin"></i> Financing</a>
    <a href="<?= route('about') ?>"><i class="bi bi-info-circle"></i> About</a>
    <a href="<?= route('contact') ?>"><i class="bi bi-envelope"></i> Contact</a>
  </div>
  <div class="mobile-nav-foot">
    <a href="<?= route('login') ?>" class="btn-lux btn-lux-ghost w-100 mb-2">Sign in</a>
    <a href="<?= route('register') ?>" class="btn-lux btn-lux-primary w-100">Create account</a>
  </div>
</aside>

