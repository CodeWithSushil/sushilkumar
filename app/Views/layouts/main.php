<!DOCTYPE html>
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

    <script type="application/ld+json">
{
        "@context": "https://schema.org",
        "@graph": [
        {
        "@type": "Person",
        "@id": "https://sushilkumar.onrender.com/#person",
        "name": "Sushil Kumar",
        "url": "https://sushilkumar.onrender.com/",
        "jobTitle": "Full Stack PHP Developer",
        "description": "Full Stack PHP developer, freelancer, open source contributor, YouTuber and educator.",
        "knowsAbout": [
                "PHP",
            "JavaScript",
                        "SQL",
                        "REST API",
                        "Laravel",
                        "Vue.js",
                        "jQuery",
                        "Bootstrap",
                        "Bulma",
                        "SQLite",
                        "PostgreSQL",
                        "MySQL",
                        "Docker",
                        "GitHub Actions"
                ],
                "sameAs": [
                        "https://github.com/CodeWithSushil",
                        "https://x.com/CodeSushil",
                        "https://www.youtube.com/@Code-With-Sushil",
                        "https://pinkary.com/@CodeWithSushil",
                        "https://mastodon.social/@CodeWithSushil",
                        "https://bsky.app/profile/codewithsushil.bsky.social",
                        "https://instagram.com/CodeWithSushil"
                ]
        },
        {
                "@type": "WebSite",
                "@id": "https://sushilkumar.onrender.com/#website",
                "url": "https://sushilkumar.onrender.com/",
                "name": "Sushil Kumar",
                "description": "Portfolio of Sushil Kumar, Full Stack PHP Developer.",
                "publisher": {
                        "@id": "https://sushilkumar.onrender.com/#person"
                },
                "inLanguage": "en-IN"
        },
        {
                "@type": "WebPage",
                "@id": "https://sushilkumar.onrender.com/#webpage",
                "url": "https://sushilkumar.onrender.com/",
                "name": "Sushil Kumar - Full Stack PHP Developer",
                "description": "Portfolio website of Sushil Kumar, a Full Stack PHP developer, freelancer and open source contributor.",
                "isPartOf": {
                        "@id": "https://sushilkumar.onrender.com/#website"
                },
                "about": {
                        "@id": "https://sushilkumar.onrender.com/#person"
                },
                "inLanguage": "en-IN"
        }
        ]
}
    </script>

    <!-- Bulma 1.0.4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css"/>

    <link href="/css/style.css" rel="stylesheet"/>
</head>
<body>
    <?= $this->include('include/header') ?>
    <main>
        <?= $this->renderSection('content')?>
    </main>
    <?= $this->include('include/footer') ?>
    <script src="/js/main.js" defer></script>
    <?= $this->renderSection('scripts') ?>
</body>
</html>
