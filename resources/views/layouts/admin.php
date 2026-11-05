<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/png" href="/images/logo-mark.png" />
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= e($title ?? 'Dashboard — CJ Travels Admin') ?></title>
  <meta name="description" content="<?= e($description ?? 'CJ Travels administration dashboard.') ?>" />
  <meta name="robots" content="noindex, nofollow" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="<?= asset('css/admin.css') ?>" rel="stylesheet" />

  <script>document.documentElement.classList.add('js');</script>
</head>

<body data-page="<?= e($page ?? 'dashboard') ?>">
  <a href="#adminMain" class="skip-link">Skip to dashboard content</a>

  <div class="dash-shell">

    <?php $this->include('partials/admin-sidebar'); ?>

    <div class="dash-main" id="adminMain">

      <?php $this->include('partials/topbar', ['isAdmin' => true, 'title' => $title ?? 'Dashboard']); ?>

      <div class="dash-content">
        <?= $content ?>
      </div>

      <footer class="admin-footer">
        <p class="mb-0">
          &copy; <span id="year"><?= date('Y') ?></span> CJ Travels admin console — demonstration only.
        </p>
        <ul>
          <li><a href="<?= route('home') ?>">Public site</a></li>
          <li><a href="<?= route('contact') ?>">Support</a></li>
          <li><a href="<?= route('about') ?>">About</a></li>
        </ul>
      </footer>

    </div>
  </div>

  <!-- ADMIN QUICK ACTION MODAL -->
  <div class="modal fade" id="quickActionModal" tabindex="-1" aria-labelledby="quickActionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title h5 mb-0" id="quickActionModalLabel">Quick Action</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="quickActionModalBody">
          <p class="mb-0">Quick action modal body.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-ghost" data-bs-dismiss="modal">Cancel</button>
          <button type="button" class="btn btn-primary" id="quickActionSubmit">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <!-- ADMIN LOGOUT MODAL -->
  <div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title h5 mb-0" id="logoutModalTitle">Confirm Sign Out</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="mb-0">Are you sure you want to sign out of the administrator console?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-ghost" data-bs-dismiss="modal">Cancel</button>
          <a href="<?= route('login') ?>" class="btn btn-primary">Sign Out</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= asset('js/admin.js') ?>"></script>
</body>
</html>

