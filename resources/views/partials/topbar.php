<header class="dash-topbar">
  <div class="topbar-left">
    <div class="topbar-crumb">
      <i class="bi bi-house-door-fill"></i>
      <a href="<?= isset($isAdmin) && $isAdmin ? route('admin.dashboard') : route('customer.dashboard') ?>" style="color:var(--muted);text-decoration:none;">Dashboard</a>
      <span class="sep">/</span>
      <span class="current" id="crumbCurrent"><?= e($title ?? 'Overview') ?></span>
    </div>
  </div>
  <div class="topbar-right">
    <button type="button" class="icon-btn" id="notificationsBtn" aria-label="Notifications (demo)">
      <i class="bi bi-bell-fill"></i>
      <span class="dot" aria-hidden="true"></span>
    </button>
    <button type="button" class="icon-btn" id="helpBtn" aria-label="Help centre">
      <i class="bi bi-question-lg"></i>
    </button>
    <div class="topbar-user">
      <span class="avatar"><?= isset($isAdmin) && $isAdmin ? 'AD' : 'AO' ?></span>
      <span><?= isset($isAdmin) && $isAdmin ? 'Admin' : 'Adaeze' ?></span>
    </div>
  </div>
</header>

