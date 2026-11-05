<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= e($title ?? 'Travelbookings — A Quieter Way to Travel') ?></title>
  <meta name="description" content="<?= e($description ?? 'Curated flights, hotels, destination guides and travel financing.') ?>" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet" />
  <link href="<?= asset('css/style.css') ?>" rel="stylesheet" />
  <link href="<?= asset('css/responsive.css') ?>" rel="stylesheet" />

  <script>document.documentElement.classList.add('js');</script>
</head>

<body>
  <?php $this->include('partials/navbar'); ?>

  <main id="mainContent">
    <?= $content ?>
  </main>

  <?php $this->include('partials/footer'); ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= asset('js/main.js') ?>"></script>
</body>
</html>

