<footer class="site-footer">
  <div class="footer-watermark" aria-hidden="true"></div>

  <div class="container footer-inner">
    <div class="footer-grid">

      <div>
        <a class="footer-brand" href="<?= route('home') ?>">
          <span class="brand-mark"><i class="bi bi-airplane-engines"></i></span>
          <span class="brand-name">Travel<em>bookings</em></span>
        </a>
        <p class="footer-about">
          An online travel agency serving customers in Nigeria and internationally.
          Flights, hotels, destination guides and travel financing — all in one place.
        </p>
        <div class="footer-social">
          <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" aria-label="X"><i class="bi bi-twitter-x"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <div>
        <h4 class="footer-heading">Travel</h4>
        <ul class="footer-links">
          <li><a href="<?= route('flights') ?>">Flights</a></li>
          <li><a href="<?= route('hotels') ?>">Hotels</a></li>
          <li><a href="<?= route('destinations') ?>">Destinations</a></li>
          <li><a href="<?= route('financing') ?>">Travel Financing</a></li>
        </ul>
      </div>

      <div>
        <h4 class="footer-heading">Portals</h4>
        <ul class="footer-links">
          <li><a href="<?= route('customer.dashboard') ?>">Customer Dashboard</a></li>
          <li><a href="<?= route('admin.dashboard') ?>">Admin Console</a></li>
          <li><a href="<?= route('login') ?>">Sign in</a></li>
          <li><a href="<?= route('register') ?>">Create account</a></li>
        </ul>
      </div>

      <div>
        <h4 class="footer-heading">Company</h4>
        <ul class="footer-links">
          <li><a href="<?= route('about') ?>">About Us</a></li>
          <li><a href="<?= route('contact') ?>">Contact & Support</a></li>
          <li><a href="<?= route('about') ?>#faq">Frequently Asked Questions</a></li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <p class="mb-0">&copy; <span id="year"><?= date('Y') ?></span> Travelbookings. All rights reserved.</p>
      <div class="footer-legal">
        <a href="<?= route('about') ?>">Privacy Policy</a>
        <a href="<?= route('about') ?>">Terms of Service</a>
        <a href="<?= route('contact') ?>">Support</a>
      </div>
    </div>
  </div>
</footer>

