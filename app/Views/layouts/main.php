<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Anu International – ISO9001:2008 certified company offering smart packaging and international trading solutions." />
  <title><?= $title ?? 'Anu International' ?></title>

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?= base_url('images/logo.png') ?>" />

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="<?= base_url('css/style.css') ?>" />
</head>

<body>

  <?= $this->renderSection('content') ?>

  <!-- Scripts -->
  <script src="<?= base_url('js/main.js') ?>"></script>
</body>

</html>