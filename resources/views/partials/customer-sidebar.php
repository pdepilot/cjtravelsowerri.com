<!-- FLOATING SIDE NAV -->
<nav class="float-nav" id="floatNav" aria-label="Customer navigation">
  <a class="float-brand" href="<?= route('home') ?>" aria-label="Travelbookings home">
    <i class="bi bi-airplane-engines"></i>
    <span class="float-btn-label">Travelbookings</span>
  </a>
  <div class="float-nav-divider" aria-hidden="true"></div>
  <a class="float-btn <?= (routeIs('customer.dashboard') || routeIs('customer.overview')) ? 'active' : '' ?>" href="<?= route('customer.dashboard') ?>" <?= (routeIs('customer.dashboard') || routeIs('customer.overview')) ? 'aria-current="page"' : '' ?> aria-label="Overview">
    <i class="bi bi-grid-1x2-fill"></i>
    <span class="float-btn-label">Overview</span>
  </a>
  <a class="float-btn <?= routeIs('customer.flights') ? 'active' : '' ?>" href="<?= route('customer.flights') ?>" <?= routeIs('customer.flights') ? 'aria-current="page"' : '' ?> aria-label="My flights">
    <i class="bi bi-airplane-fill"></i>
    <span class="float-btn-label">My Flights</span>
    <span class="float-badge" id="navFlightCount">4</span>
  </a>
  <a class="float-btn <?= routeIs('customer.hotels') ? 'active' : '' ?>" href="<?= route('customer.hotels') ?>" <?= routeIs('customer.hotels') ? 'aria-current="page"' : '' ?> aria-label="My hotels">
    <i class="bi bi-building-fill"></i>
    <span class="float-btn-label">My Hotels</span>
    <span class="float-badge" id="navHotelCount">3</span>
  </a>
  <div class="float-nav-divider" aria-hidden="true"></div>
  <a class="float-btn <?= routeIs('customer.financing') ? 'active' : '' ?>" href="<?= route('customer.financing') ?>" <?= routeIs('customer.financing') ? 'aria-current="page"' : '' ?> aria-label="Travel financing">
    <i class="bi bi-cash-coin"></i>
    <span class="float-btn-label">Travel Financing</span>
    <span class="float-badge" id="navFinancingCount">2</span>
  </a>
  <a class="float-btn <?= routeIs('customer.payments') ? 'active' : '' ?>" href="<?= route('customer.payments') ?>" <?= routeIs('customer.payments') ? 'aria-current="page"' : '' ?> aria-label="Payments">
    <i class="bi bi-credit-card-2-front-fill"></i>
    <span class="float-btn-label">Payments</span>
  </a>
  <div class="float-nav-divider" aria-hidden="true"></div>
  <a class="float-btn <?= routeIs('customer.profile') ? 'active' : '' ?>" href="<?= route('customer.profile') ?>" <?= routeIs('customer.profile') ? 'aria-current="page"' : '' ?> aria-label="My profile">
    <i class="bi bi-person-fill"></i>
    <span class="float-btn-label">My Profile</span>
  </a>
  <a class="float-btn <?= routeIs('customer.settings') ? 'active' : '' ?>" href="<?= route('customer.settings') ?>" <?= routeIs('customer.settings') ? 'aria-current="page"' : '' ?> aria-label="Settings">
    <i class="bi bi-gear-fill"></i>
    <span class="float-btn-label">Settings</span>
  </a>
  <button type="button" class="float-btn logout" data-bs-toggle="modal" data-bs-target="#logoutModal" aria-label="Logout">
    <i class="bi bi-box-arrow-right"></i>
    <span class="float-btn-label">Logout</span>
  </button>
</nav>

