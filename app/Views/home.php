<?= $this->extend('layouts/main') ?>

<?= $this->section('head') ?>

<meta name="description"
      content="<?= esc($description ?? '') ?>">

<?= $this->endSection() ?>


<?= $this->section('content') ?>

<h1><?= esc($heading ?? 'Welcome') ?></h1>

<p>
    <?= esc($message ?? '') ?>
</p>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>

<script src="/assets/js/home.js" defer></script>

<?= $this->endSection() ?>
