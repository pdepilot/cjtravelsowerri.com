<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= e($title ?? 'Customer Dashboard — Travelbookings') ?></title>
  <meta name="description" content="<?= e($description ?? 'Travelbookings customer dashboard.') ?>" />
  <meta name="robots" content="noindex" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="<?= asset('css/customer.css') ?>" rel="stylesheet" />

  <script>document.documentElement.classList.add('js');</script>
</head>

<body data-page="<?= e($page ?? 'overview') ?>">
  <a href="#dashMain" class="skip-link">Skip to dashboard content</a>

  <div class="dash-shell">

    <?php $this->include('partials/customer-sidebar'); ?>

    <div class="dash-main" id="dashMain">

      <?php $this->include('partials/topbar', ['isAdmin' => false, 'title' => $title ?? 'Overview']); ?>

      <div class="dash-content">
        <?= $content ?>
      </div>

      <footer class="dash-footer">
        <p class="mb-0">
          &copy; <span id="year"><?= date('Y') ?></span> Travelbookings. Demonstration dashboard — sample data only.
        </p>
        <ul>
          <li><a href="<?= route('home') ?>">Home</a></li>
          <li><a href="<?= route('about') ?>">About</a></li>
          <li><a href="<?= route('contact') ?>">Support</a></li>
        </ul>
      </footer>

    </div>
  </div>

  <!-- BOOKING DETAIL MODAL -->
  <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title h5 mb-0" id="detailModalTitle">Booking Details</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="detailModalBody"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-ghost" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="modalDemoAction">Manage booking</button>
        </div>
      </div>
    </div>
  </div>

  <!-- LOGOUT MODAL -->
  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title h5 mb-0" id="logoutModalTitle">Confirm Sign Out</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="mb-0">Are you sure you want to sign out of your customer dashboard? You can sign back in at any time with your account credentials.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-ghost" data-bs-dismiss="modal">Cancel</button>
          <a href="<?= route('login') ?>" class="btn btn-primary">Sign Out</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= asset('js/customer.js') ?>"></script>
</body>
</html>

