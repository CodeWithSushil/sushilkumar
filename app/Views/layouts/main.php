<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Sushil Kumar | Full Stack PHP Developer') ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow" />
    <meta name="theme-color" content="#FF2D20">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <meta http-equiv="Permissions-Policy" content="interest-cohort=()">
    <?= $this->renderSection('head') ?>
    <meta name="author" content="Sushil Kumar">

<!-- Open Graph / Facebook -->
  <meta property="og:type" content="profile">
  <meta property="og:url" content="https://sushilkumar.onrender.com/">
  <meta property="og:title" content="Sushil Kumar | Portfolio">
  <meta property="og:description" content="Sushil Kumar aka Code With Sushil is a PHP Developer.">
  <meta property="og:image" content="https://sushilkumar.onrender.com/og/master.png">
  <meta property="og:image:secure_url" content="https://sushilkumar.onrender.com/og/master.png">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="Sushil Kumar, PHP Developer">
  <meta property="og:site_name" content="Sushil Kumar">
  <meta property="og:locale" content="en_US">
  <meta property="profile:first_name" content="Sushil">
  <meta property="profile:last_name" content="Kumar">

  <!-- Twitter / X -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@CodeSushil">
  <meta name="twitter:creator" content="@CodeSushil">
  <meta name="twitter:url" content="https://sushilkumar.onrender.com/">
  <meta name="twitter:title" content="Sushil Kumar | Portfolio">
  <meta name="twitter:description" content="Sushil Kumar aka Code With Sushil is a PHP Developer.">
  <meta name="twitter:image" content="https://sushilkumar.onrender.com/og/master.png">
  <meta name="twitter:image:src" content="https://sushilkumar.onrender.com/og/master.png">
  <meta name="twitter:image:alt" content="Sushil Kumar, PHP Developer">

<link rel="icon" type="image/png"  href="favicon.ico" />
<link rel="apple-touch-icon" type="image/png" href="favicon.ico" >
<link rel="canonical" href="https://sushilkumar.onrender.com/">

<!-- Bootstrap 5.3.8 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" rel="stylesheet">

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
