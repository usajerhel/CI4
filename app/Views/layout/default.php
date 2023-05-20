<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= link_tag('public/styles/bootstrap.min.css') ?>
  <?= link_tag('public/styles/style.css') ?>
  <?= script_tag('public/scripts/bootstrap.min.js') ?>
  <title>Singers</title>
</head>

<body class="bg-dark">
    <div class="container bg-white">
    <h3 class="font-weight-normal text-center text-dark mt-5 "><?= $this->renderSection("title") ?></h3>
    </div>

<?= $this->renderSection('content') ?>
</body>

</html>