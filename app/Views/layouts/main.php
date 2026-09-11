<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title ?? 'My Website') ?></title>

    <?= $this->renderSection('head') ?>
</head>

<body>

    <?= $this->include('include/header') ?>

    <main>
        <?= $this->renderSection('content') ?>
    </main>

    <?= $this->include('include/footer') ?>

    <?= $this->renderSection('scripts') ?>

</body>
</html>
