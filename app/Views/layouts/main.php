<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title ?? 'Sushil Kumar | Full Stack PHP Developer, Freelancer, open source contributor and content creator') ?></title>
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
    <meta property="og:title" content="Sushil Kumar | Full Stack PHP Developer, Freelancer, Open source contributor, and content creator">
    <meta property="og:description" content="Sushil Kumar | Full Stack PHP/Laravel Developer, Freelancer, open source contributor, content creator on YouTube and Instagram.">
    <meta property="og:image" content="https://sushilkumar.onrender.com/og/master.png">
    <meta property="og:image:secure_url" content="https://sushilkumar.onrender.com/">
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
    <meta name="twitter:title" content="Sushil Kumar | Full Stack PHP/Laravel Developer, Freelancer, Open source contributor, content creator.">
    <meta name="twitter:description" content="Sushil Kumar | Full Stack PHP/Laravel Developer, Freelancer, Open source contributor, content creator on YouTube and Instagram.">
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
    <link href="/css/style.css" rel="stylesheet"/>
</head>
<body>
    <div class="background-animation" aria-hidden="true">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

    <main class="main-area">
        <?= $this->renderSection('content')?>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/main.js" defer></script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>
