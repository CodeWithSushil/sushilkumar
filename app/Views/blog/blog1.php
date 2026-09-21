<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Building a Production-Ready PHP API | Sushil Kumar
    </title>

    <meta
        name="description"
        content="Learn how to structure, secure and prepare a PHP API for production environments."
    >

    <meta
        name="author"
        content="Sushil Kumar"
    >

    <meta
        name="robots"
        content="index, follow"
    >

    <link
        rel="canonical"
        href="https://sushilkumar.onrender.com/blog/production-ready-php-api"
    >

    <!-- Open Graph -->
    <meta
        property="og:type"
        content="article"
    >

    <meta
        property="og:title"
        content="Building a Production-Ready PHP API"
    >

    <meta
        property="og:description"
        content="Learn how to structure, secure and prepare a PHP API for production environments."
    >

    <meta
        property="og:url"
        content="https://sushilkumar.onrender.com/blog/production-ready-php-api"
    >

    <meta
        property="og:image"
        content="https://sushilkumar.onrender.com/images/blog/php-api.jpg"
    >

    <meta
        property="og:site_name"
        content="Sushil Kumar"
    >

    <!-- Twitter / X -->
    <meta
        name="twitter:card"
        content="summary_large_image"
    >

    <meta
        name="twitter:title"
        content="Building a Production-Ready PHP API"
    >

    <meta
        name="twitter:description"
        content="Learn how to structure, secure and prepare a PHP API for production environments."
    >

    <meta
        name="twitter:image"
        content="https://sushilkumar.onrender.com/images/blog/php-api.jpg"
    >

    <!-- Bulma -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bulma@1.0.4/css/bulma.min.css"
    >

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css"
    >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.12.0/styles/default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.12.0/highlight.min.js"></script>
    
    
    <script>hljs.highlightAll();</script>
    <!-- Alpine.js -->
    <script
        defer
        src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>

    <!-- JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BlogPosting",
        "headline": "Building a Production-Ready PHP API",
        "description": "Learn how to structure, secure and prepare a PHP API for production environments.",
        "image": [
            "https://sushilkumar.onrender.com/images/blog/php-api.jpg"
        ],
        "datePublished": "2026-09-20T10:00:00+05:30",
        "dateModified": "2026-09-20T10:00:00+05:30",
        "author": {
            "@type": "Person",
            "name": "Sushil Kumar",
            "url": "https://sushilkumar.onrender.com"
        },
        "publisher": {
            "@type": "Person",
            "name": "Sushil Kumar",
            "url": "https://sushilkumar.onrender.com"
        },
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://sushilkumar.onrender.com/blog/production-ready-php-api"
        }
    }
    </script>

    <style>

        :root {
            --blog-max-width: 1180px;
            --article-width: 820px;

            --primary: #3273dc;
            --border: #e9edf3;
            --muted: #6b7280;

            --surface: #ffffff;
            --surface-soft: #f8fafc;

            --code-bg: #0f172a;

            --shadow-sm:
                0 2px 8px rgba(15, 23, 42, .05);

            --shadow-md:
                0 12px 35px rgba(15, 23, 42, .08);
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            min-height: 100vh;
            background:
                linear-gradient(
                    180deg,
                    #ffffff 0%,
                    #f8fafc 100%
                );
            color: #172033;
        }

        a {
            transition:
                color .2s ease,
                background-color .2s ease,
                border-color .2s ease,
                transform .2s ease;
        }

        /* =========================
           CONTAINER
        ========================= */

        .blog-container {
            width: min(
                calc(100% - 2rem),
                var(--blog-max-width)
            );

            margin-inline: auto;
        }

        .article-container {
            width: min(
                calc(100% - 2rem),
                var(--article-width)
            );

            margin-inline: auto;
        }

        /* =========================
           TOP NAV
        ========================= */

        .blog-nav {
            position: sticky;
            top: 0;
            z-index: 30;

            background: rgba(255,255,255,.92);

            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);

            border-bottom: 1px solid var(--border);
        }

        .blog-nav-inner {
            min-height: 64px;
        }

        .brand {
            font-weight: 800;
            letter-spacing: -.02em;
        }

        .brand-mark {
            width: 36px;
            height: 36px;

            display: grid;
            place-items: center;

            border-radius: 10px;

            background: var(--primary);
            color: #fff;

            font-weight: 800;
        }

        /* =========================
           ARTICLE HEADER
        ========================= */

        .article-header {
            padding-block: 4.5rem 2.5rem;
            text-align: center;
        }

        .article-category {
            justify-content: center;
        }

        .article-title {
            max-width: 950px;

            margin-inline: auto;

            font-size:
                clamp(
                    2.2rem,
                    6vw,
                    4.4rem
                );

            line-height: 1.05;

            letter-spacing: -.045em;
        }

        .article-subtitle {
            max-width: 720px;

            margin-inline: auto;

            color: var(--muted);

            line-height: 1.7;
        }

        .article-meta {
            display: flex;
            flex-wrap: wrap;

            justify-content: center;
            align-items: center;

            gap: .5rem;

            color: var(--muted);

            font-size: .95rem;
        }

        .article-meta a {
            font-weight: 700;
        }

        /* =========================
           COVER
        ========================= */

        .article-cover {
            width: min(
                calc(100% - 2rem),
                1080px
            );

            margin-inline: auto;

            overflow: hidden;

            border-radius: 1.5rem;

            box-shadow: var(--shadow-md);

            background: #eef2f7;
        }

        .article-cover img {
            display: block;

            width: 100%;
            height: auto;

            aspect-ratio: 16 / 9;

            object-fit: cover;
        }

        /* =========================
           ARTICLE
        ========================= */

        .article-body {
            padding-top: 3rem;
        }

        .article-content {
            font-size: 1.1rem;
            line-height: 1.9;
        }

        .article-content > p:first-child {
            font-size: 1.25rem;
            line-height: 1.8;
            font-weight: 500;
        }

        .article-content h2 {
            margin-top: 4rem;
            margin-bottom: 1.25rem;

            font-size: clamp(
                1.65rem,
                4vw,
                2.2rem
            );

            letter-spacing: -.025em;
        }

        .article-content h3 {
            margin-top: 2.5rem;
        }

        .article-content p {
            margin-bottom: 1.4rem;
        }

        .article-content li {
            margin-bottom: .55rem;
        }

        .article-content ul {
            margin-top: 1.5rem;
            margin-bottom: 2rem;
        }

        .article-content img {
            width: 100%;
            height: auto;

            border-radius: 1rem;

            box-shadow: var(--shadow-sm);
        }

        /* =========================
           CODE
        ========================= */

        .article-content pre {
            position: relative;

            margin-block: 2rem;

            padding: 1.35rem;

            background: var(--code-bg);
            color: #e5e7eb;

            border: 1px solid #1e293b;

            border-radius: 1rem;

            overflow-x: auto;

            box-shadow:
                0 10px 30px rgba(15,23,42,.12);

            font-size: .92rem;
            line-height: 1.65;

            -webkit-overflow-scrolling: touch;
        }

        .article-content pre code {
            background: transparent;
            color: inherit;
            padding: 0;
        }

        .article-content :not(pre) > code {
            background: #eef2ff;
            color: #4338ca;

            padding: .15em .4em;

            border-radius: .35rem;

            font-size: .9em;
        }

        /* =========================
           ARTICLE TAXONOMY
        ========================= */

        .article-taxonomy {
            margin-top: 4rem;

            padding-block: 1.5rem;

            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
        }

        .taxonomy-label {
            margin-bottom: .7rem;

            font-size: .8rem;
            font-weight: 800;

            text-transform: uppercase;
            letter-spacing: .08em;

            color: var(--muted);
        }

        /* =========================
           SHARE
        ========================= */

        .share-box {
            margin-top: 2rem;

            padding: 1.5rem;

            background: var(--surface);

            border: 1px solid var(--border);

            border-radius: 1.25rem;

            box-shadow: var(--shadow-sm);
        }

        .share-buttons {
            display: flex;
            flex-wrap: wrap;
            gap: .6rem;
        }

        .share-buttons .button {
            border-radius: .7rem;
        }

        /* =========================
           COMMENTS
        ========================= */

        .comments-section {
            margin-top: 4rem;
        }

        .comment {
            padding-block: 1.5rem;

            border-bottom: 1px solid var(--border);
        }

        .comment:last-child {
            border-bottom: 0;
        }

        .comment-avatar {
            flex: 0 0 auto;

            width: 46px;
            height: 46px;

            display: grid;
            place-items: center;

            border-radius: 50%;

            background:
                linear-gradient(
                    135deg,
                    #3273dc,
                    #7957d5
                );

            color: #fff;

            font-weight: 800;
        }

        .comment-box {
            margin-top: 2rem;

            padding: 1.75rem;

            background: var(--surface);

            border: 1px solid var(--border);

            border-radius: 1.25rem;

            box-shadow: var(--shadow-sm);
        }

        .comment-box .input,
        .comment-box .textarea {
            border-radius: .7rem;
        }

        .comment-box .button {
            border-radius: .7rem;
            font-weight: 700;
        }

        /* =========================
           RECENT ARTICLES
        ========================= */

        .recent-section {
            margin-top: 6rem;
            padding-block: 4rem;

            background: #f8fafc;

            border-top: 1px solid var(--border);
        }

        .recent-card {
            height: 100%;

            overflow: hidden;

            border-radius: 1rem;

            border: 1px solid var(--border);

            box-shadow: var(--shadow-sm);

            transition:
                transform .25s ease,
                box-shadow .25s ease;
        }

        .recent-card:hover {
            transform: translateY(-6px);
            box-shadow: var(--shadow-md);
        }

        .recent-card .card-image img {
            width: 100%;

            aspect-ratio: 16 / 9;

            object-fit: cover;
        }

        .recent-card .card-content {
            display: flex;
            flex-direction: column;

            height: calc(100% - 56.25%);
        }

        .recent-card .card-title {
            line-height: 1.25;
        }

        .recent-card .card-description {
            color: var(--muted);
        }

        .recent-card .read-time {
            margin-top: auto;
        }

        /* =========================
           FOOTER
        ========================= */

        .portfolio-footer {
            padding-block: 4rem 2rem;

            background: #111827;

            color: #9ca3af;
        }

        .footer-inner {
            width: min(
                calc(100% - 2rem),
                var(--blog-max-width)
            );

            margin-inline: auto;

            text-align: center;
        }

        .footer-brand {
            color: #fff;

            font-size: 1.2rem;
            font-weight: 800;
        }

        .footer-social {
            display: flex;

            justify-content: center;
            flex-wrap: wrap;

            gap: .7rem;

            margin-bottom: 1.5rem;
        }

        .footer-social a {
            width: 42px;
            height: 42px;

            display: grid;
            place-items: center;

            border-radius: 50%;

            background: rgba(255,255,255,.08);

            color: #fff;

            text-decoration: none;
        }

        .footer-social a:hover {
            background: var(--primary);

            transform: translateY(-3px);
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 768px) {

            .blog-container,
            .article-container {
                width: min(
                    calc(100% - 1.25rem),
                    var(--blog-max-width)
                );
            }

            .article-header {
                padding-block: 3rem 2rem;
            }

            .article-title {
                font-size: clamp(
                    2rem,
                    11vw,
                    3.2rem
                );
            }

            .article-subtitle {
                font-size: 1.05rem;
            }

            .article-cover {
                width: calc(100% - 1.25rem);
                border-radius: 1rem;
            }

            .article-body {
                padding-top: 2rem;
            }

            .article-content {
                font-size: 1rem;
                line-height: 1.8;
            }

            .article-content > p:first-child {
                font-size: 1.12rem;
            }

            .article-content h2 {
                margin-top: 3rem;
            }

            .article-content pre {
                margin-inline: -.25rem;
                border-radius: .75rem;
                font-size: .82rem;
            }

            .share-box,
            .comment-box {
                padding: 1.2rem;
            }

            .recent-section {
                margin-top: 4rem;
                padding-block: 3rem;
            }
        }

        @media (max-width: 480px) {

            .article-meta {
                flex-direction: column;
                gap: .25rem;
            }

            .article-meta .separator {
                display: none;
            }

            .share-buttons .button {
                flex: 1 1 auto;
            }

            .comment-box {
                padding: 1rem;
            }

            .footer-social a {
                width: 40px;
                height: 40px;
            }
        }
.article-content pre {
    position: relative;

    margin-block: 2rem;

    padding: 1.35rem 1.5rem;

    background: #0f172a;

    border: 1px solid #1e293b;
    border-radius: 1rem;

    overflow-x: auto;

    -webkit-overflow-scrolling: touch;

    box-shadow:
        0 12px 30px rgba(15, 23, 42, .12);

    font-size: .9rem;
    line-height: 1.7;
}

.article-content pre code {
    background: transparent;
    color: inherit;

    padding: 0;

    font-size: inherit;
    line-height: inherit;
}

.article-content :not(pre) > code {
    background: #eef2ff;
    color: #4338ca;

    padding: .15em .4em;

    border-radius: .35rem;

    font-size: .9em;
}

/* Prism token improvements */

.article-content pre[class*="language-"] {
    background: #0f172a;
}

.article-content code[class*="language-"],
.article-content pre[class*="language-"] {
    text-shadow: none;
}

/* Mobile */

@media (max-width: 768px) {

    .article-content pre {
        margin-inline: -.25rem;

        padding: 1rem;

        border-radius: .75rem;

        font-size: .8rem;
    }

}
    </style>
</head>

<body>

<!-- =========================
     NAVIGATION
========================= -->

<nav class="blog-nav">

    <div class="blog-container">

        <div class="blog-nav-inner is-flex is-align-items-center is-justify-content-space-between">

            <a
                href="/"
                class="is-flex is-align-items-center gap-3 has-text-dark"
            >

                <span class="brand-mark">
                    C
                </span>

                <span class="brand">
                    Code With Sushil
                </span>

            </a>

            <div class="is-flex is-align-items-center gap-4">

                <a
                    href="/blog"
                    class="has-text-weight-semibold"
                >
                    Blog
                </a>

                <a
                    href="/about"
                    class="has-text-weight-semibold is-hidden-mobile"
                >
                    About
                </a>

            </div>

        </div>

    </div>

</nav>


<main>

<!-- =========================
     ARTICLE HEADER
========================= -->

<header class="article-header">

    <div class="article-container">

        <div class="tags article-category mb-5">

            <a
                class="tag is-primary is-light"
                href="/blog/category/php"
            >
                PHP
            </a>

            <a
                class="tag is-link is-light"
                href="/blog/category/backend"
            >
                Backend
            </a>

        </div>

        <h1 class="title article-title mb-5">

            Building a
            <span class="has-text-primary">
                Production-Ready
            </span>
            <span class="has-text-link" >PHP </span>API

        </h1>

        <p class="subtitle is-5 article-subtitle mb-5">

            Learn how to structure, secure and prepare a PHP API
            for production environments.

        </p>

        <div class="article-meta">

            <span>
                By
                <a href="/about">
                    Sushil Kumar
                </a>
            </span>

            <span class="separator">
                •
            </span>

            <time datetime="2026-09-20">
                September 20, 2026
            </time>

            <span class="separator">
                •
            </span>

            <span>
                8 min read
            </span>

        </div>

    </div>

</header>


<!-- =========================
     COVER
========================= -->

<figure class="article-cover mb-6">

    <img
        src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?auto=format&fit=crop&w=1000&q=80"
        alt="Building a production-ready PHP API"
        width="1200"
        height="675"
        fetchpriority="high"
    >

</figure>


<!-- =========================
     ARTICLE BODY
========================= -->

<div class="article-container">

    <article class="article-body">

        <div class="content article-content">

            <p>
                Building an API is more than creating a few
                endpoints. A production application needs a
                predictable architecture, validation, security,
                error handling and maintainable code.
            </p>

            <h2 id="introduction">
                Introduction
            </h2>

            <p>
                PHP provides everything required to build
                reliable HTTP APIs. The important part is
                designing the application so that individual
                components have clear responsibilities.
            </p>

            <p>
                A good API should be easy to consume, easy to
                test and safe to operate in production.
            </p>


            <h2 id="project-structure">
                Project Structure
            </h2>

            <p>
                A simple separation of controllers, services,
                models and infrastructure makes the application
                easier to maintain.
            </p>

<pre><code class="language-yaml" >app/
├── Controllers/
├── Models/
├── Services/
├── Middleware/
├── Validation/
└── Config/

public/
└── index.php</code></pre>


            <h2 id="validation">
                Validate Input
            </h2>

            <p>
                Never trust data received from an HTTP request.
                Validate and normalize input before passing it
                into application logic.
            </p>

<pre><code class="language-php" >$email = filter_var(
    $request['email'] ?? '',
    FILTER_VALIDATE_EMAIL
);

if ($email === false) {
    throw new InvalidArgumentException(
        'Invalid email address.'
    );
}</code></pre>


            <h2 id="security">
                Security Considerations
            </h2>

            <p>
                Authentication and authorization should be
                separated from business logic. API credentials
                should never be hard-coded into source files.
            </p>

            <ul>

                <li>
                    Use HTTPS in production.
                </li>

                <li>
                    Validate request data.
                </li>

                <li>
                    Use parameterized database queries.
                </li>

                <li>
                    Protect sensitive configuration.
                </li>

                <li>
                    Return appropriate HTTP status codes.
                </li>

                <li>
                    Do not expose internal exceptions.
                </li>

            </ul>


            <h2 id="error-handling">
                Error Handling
            </h2>

            <p>
                API responses should have a predictable structure
                so clients can handle errors consistently.
            </p>

<pre><code class="language-json" >{
    "error": {
        "code": "VALIDATION_ERROR",
        "message": "Invalid request data."
    }
}</code></pre>


            <h2 id="conclusion">
                Conclusion
            </h2>

            <p>
                A production-ready API is the result of several
                small engineering decisions working together:
                validation, security, architecture, observability
                and consistent HTTP behavior.
            </p>

        </div>


        <!-- =========================
             CATEGORY + TAGS
        ========================= -->

        <div class="article-taxonomy">

            <p class="taxonomy-label">
                Category
            </p>

            <div class="tags mb-5">

                <a
                    href="/blog/category/php"
                    class="tag is-primary"
                >
                    PHP
                </a>

                <a
                    href="/blog/category/backend"
                    class="tag is-link"
                >
                    Backend
                </a>

            </div>


            <p class="taxonomy-label">
                Tags
            </p>

            <div class="tags">

                <a
                    href="/blog/tag/api"
                    class="tag is-info"
                >
                    API
                </a>

                <a
                    href="/blog/tag/rest"
                    class="tag is-warning"
                >
                    REST
                </a>

                <a
                    href="/blog/tag/security"
                    class="tag is-danger"
                >
                    Security
                </a>

                <a
                    href="/blog/tag/php"
                    class="tag is-link"
                >
                    PHP
                </a>

                <a
                    href="/blog/tag/backend"
                    class="tag is-primary"
                >
                    Backend
                </a>

            </div>

        </div>


        <!-- =========================
             SHARE
        ========================= -->

        <section
            class="share-box"
            x-data="shareArticle()"
        >

            <h2 class="title is-5 mb-4">
                Share this article
            </h2>

            <div class="share-buttons">

                <button
                    type="button"
                    class="button is-light"
                    @click="copyLink()"
                >

                    <span class="icon">
                        <i class="fa-solid fa-link"></i>
                    </span>

                    <span
                        x-text="copied ? 'Copied!' : 'Copy link'"
                    >
                        Copy link
                    </span>

                </button>


                <a
                    class="button is-dark"
                    :href="xUrl"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Share on X"
                >

                    <span class="icon">
                        <i class="fa-brands fa-x-twitter"></i>
                    </span>

                    <span>X</span>

                </a>


                <a
                    class="button is-success is-light"
                    :href="whatsappUrl"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Share on WhatsApp"
                >

                    <span class="icon">
                        <i class="fa-brands fa-whatsapp"></i>
                    </span>

                    <span>WhatsApp</span>

                </a>


                <a
                    class="button is-link is-light"
                    :href="facebookUrl"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Share on Facebook"
                >

                    <span class="icon">
                        <i class="fa-brands fa-facebook"></i>
                    </span>

                    <span>Facebook</span>

                </a>


                <a
                    class="button is-info is-light"
                    :href="linkedinUrl"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="Share on LinkedIn"
                >

                    <span class="icon">
                        <i class="fa-brands fa-linkedin"></i>
                    </span>

                    <span>LinkedIn</span>

                </a>


                <a
                    class="button is-danger is-light"
                    :href="emailUrl"
                    aria-label="Share through email"
                >

                    <span class="icon">
                        <i class="fa-solid fa-envelope"></i>
                    </span>

                    <span>Email</span>

                </a>

            </div>

        </section>


        <!-- =========================
             COMMENTS
        ========================= -->

        <section class="comments-section">

            <div class="mb-5">

                <h2 class="title is-3 mb-2">
                    Comments
                </h2>

                <p class="has-text-grey">
                    Join the discussion.
                </p>

            </div>


            <!-- Comment 1 -->

            <article class="comment">

                <div class="is-flex">

                    <div class="comment-avatar mr-4">
                        A
                    </div>

                    <div>

                        <p class="has-text-weight-bold mb-1">
                            Alex
                        </p>

                        <time
                            class="is-size-7 has-text-grey"
                            datetime="2026-09-20"
                        >
                            September 20, 2026
                        </time>

                    </div>

                </div>

                <div class="content mt-3">

                    Very useful explanation. The project
                    structure section is especially helpful.

                </div>

            </article>


            <!-- Comment 2 -->

            <article class="comment">

                <div class="is-flex">

                    <div class="comment-avatar mr-4">
                        R
                    </div>

                    <div>

                        <p class="has-text-weight-bold mb-1">
                            Rahul
                        </p>

                        <time
                            class="is-size-7 has-text-grey"
                            datetime="2026-09-20"
                        >
                            September 20, 2026
                        </time>

                    </div>

                </div>

                <div class="content mt-3">
                    Thanks for sharing this.
                </div>

            </article>


            <!-- Comment Form -->

            <div class="comment-box">

                <h3 class="title is-4 mb-2">
                    Leave a comment
                </h3>

                <p class="has-text-grey mb-5">
                    Your email address will not be published.
                </p>

                <form
                    method="post"
                    action="/blog/production-ready-php-api/comments"
                >

                    <!-- Replace with CI4 CSRF token -->

                    <input
                        type="hidden"
                        name="csrf_token"
                        value=""
                    >

                    <div class="columns is-multiline">

                        <div class="column is-6">

                            <div class="field">

                                <label
                                    class="label"
                                    for="comment-name"
                                >
                                    Name
                                    <span class="has-text-danger">
                                        *
                                    </span>
                                </label>

                                <div class="control has-icons-left">

                                    <input
                                        id="comment-name"
                                        class="input"
                                        type="text"
                                        name="name"
                                        autocomplete="name"
                                        maxlength="100"
                                        required
                                    >

                                    <span class="icon is-left">
                                        <i class="fa-solid fa-user"></i>
                                    </span>

                                </div>

                            </div>

                        </div>


                        <div class="column is-6">

                            <div class="field">

                                <label
                                    class="label"
                                    for="comment-email"
                                >
                                    Email
                                    <span class="has-text-danger">
                                        *
                                    </span>
                                </label>

                                <div class="control has-icons-left">

                                    <input
                                        id="comment-email"
                                        class="input"
                                        type="email"
                                        name="email"
                                        autocomplete="email"
                                        maxlength="254"
                                        required
                                    >

                                    <span class="icon is-left">
                                        <i class="fa-solid fa-envelope"></i>
                                    </span>

                                </div>

                            </div>

                        </div>


                        <div class="column is-12">

                            <div class="field">

                                <label
                                    class="label"
                                    for="comment-website"
                                >
                                    Website
                                </label>

                                <div class="control has-icons-left">

                                    <input
                                        id="comment-website"
                                        class="input"
                                        type="url"
                                        name="website"
                                        autocomplete="url"
                                        maxlength="255"
                                        placeholder="https://example.com"
                                    >

                                    <span class="icon is-left">
                                        <i class="fa-solid fa-globe"></i>
                                    </span>

                                </div>

                            </div>

                        </div>


                        <div class="column is-12">

                            <div class="field">

                                <label
                                    class="label"
                                    for="comment-content"
                                >
                                    Comment
                                    <span class="has-text-danger">
                                        *
                                    </span>
                                </label>

                                <div class="control">

                                    <textarea
                                        id="comment-content"
                                        class="textarea"
                                        name="comment"
                                        rows="7"
                                        maxlength="5000"
                                        required
                                    ></textarea>

                                </div>

                                <p class="help">
                                    Maximum 5000 characters.
                                </p>

                            </div>

                        </div>


                        <div class="column is-12">

                            <button
                                type="submit"
                                class="button is-primary is-medium"
                            >

                                <span class="icon">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </span>

                                <span>
                                    Post Comment
                                </span>

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </section>

    </article>

</div>


<!-- =========================
     RECENT ARTICLES
========================= -->

<section class="recent-section">

    <div class="blog-container">

        <div
            class="is-flex
                   is-justify-content-space-between
                   is-align-items-center
                   mb-6"
        >

            <div>

                <p class="has-text-link has-text-weight-bold mb-2">
                    KEEP READING
                </p>

                <h2 class="title is-3 mb-0">
                    Recently Published
                </h2>

            </div>

            <a
                href="/blog"
                class="button is-light is-hidden-mobile"
            >
                View all articles
            </a>

        </div>


        <div class="columns is-multiline">


            <!-- Card 1 -->

            <div
                class="column is-12-mobile
                       is-6-tablet
                       is-4-desktop"
            >

                <article class="card recent-card">

                    <div class="card-image">

                        <figure class="image">

                            <img
                                src="/images/blog/codeigniter-api.jpg"
                                alt="Building REST APIs with CodeIgniter 4"
                                loading="lazy"
                                width="800"
                                height="450"
                            >

                        </figure>

                    </div>

                    <div class="card-content">

                        <div class="tags">

                            <a
                                href="/blog/tag/codeigniter"
                                class="tag is-light"
                            >
                                CodeIgniter
                            </a>

                            <a
                                href="/blog/tag/api"
                                class="tag is-light"
                            >
                                API
                            </a>

                        </div>

                        <h3 class="title is-5 card-title">

                            <a href="/blog/codeigniter-rest-api">

                                Building REST APIs with
                                CodeIgniter 4

                            </a>

                        </h3>

                        <p class="card-description mb-4">

                            Build clean and maintainable REST
                            APIs using CodeIgniter 4.

                        </p>

                        <small class="has-text-grey read-time">

                            <i class="fa-regular fa-clock"></i>
                            7 min read

                        </small>

                    </div>

                </article>

            </div>


            <!-- Card 2 -->

            <div
                class="column is-12-mobile
                       is-6-tablet
                       is-4-desktop"
            >

                <article class="card recent-card">

                    <div class="card-image">

                        <figure class="image">

                            <img
                                src="/images/blog/php85.jpg"
                                alt="PHP 8.5 features"
                                loading="lazy"
                                width="800"
                                height="450"
                            >

                        </figure>

                    </div>

                    <div class="card-content">

                        <div class="tags">

                            <a
                                href="/blog/tag/php"
                                class="tag is-light"
                            >
                                PHP
                            </a>

                        </div>

                        <h3 class="title is-5 card-title">

                            <a href="/blog/php-8-5-features">

                                PHP 8.5 Features You
                                Should Know

                            </a>

                        </h3>

                        <p class="card-description mb-4">

                            Explore useful features introduced
                            in modern PHP.

                        </p>

                        <small class="has-text-grey read-time">

                            <i class="fa-regular fa-clock"></i>
                            6 min read

                        </small>

                    </div>

                </article>

            </div>


            <!-- Card 3 -->

            <div
                class="column is-12-mobile
                       is-6-tablet
                       is-4-desktop"
            >

                <article class="card recent-card">

                    <div class="card-image">

                        <figure class="image">

                            <img
                                src="/images/blog/api-security.jpg"
                                alt="API authentication and security"
                                loading="lazy"
                                width="800"
                                height="450"
                            >

                        </figure>

                    </div>

                    <div class="card-content">

                        <div class="tags">

                            <a
                                href="/blog/tag/security"
                                class="tag is-light"
                            >
                                Security
                            </a>

                            <a
                                href="/blog/tag/api"
                                class="tag is-light"
                            >
                                API
                            </a>

                        </div>

                        <h3 class="title is-5 card-title">

                            <a href="/blog/secure-api-authentication">

                                Secure API Authentication

                            </a>

                        </h3>

                        <p class="card-description mb-4">

                            Important authentication concepts
                            for modern APIs.

                        </p>

                        <small class="has-text-grey read-time">

                            <i class="fa-regular fa-clock"></i>
                            8 min read

                        </small>

                    </div>

                </article>

            </div>

        </div>


        <a
            href="/blog"
            class="button is-link is-fullwidth is-hidden-tablet mt-5"
        >
            View all articles
        </a>

    </div>

</section>

</main>


<!-- =========================
     FOOTER
========================= -->

<footer class="portfolio-footer">

    <div class="footer-inner">

        <p class="footer-brand mb-5">
            Code With Sushil
        </p>

        <div class="footer-social">

            <a
                href="mailto:your-email@example.com"
                aria-label="Email"
            >
                <i class="fa-solid fa-envelope"></i>
            </a>

            <a
                href="#"
                aria-label="Instagram"
            >
                <i class="fa-brands fa-instagram"></i>
            </a>

            <a
                href="#"
                aria-label="X"
            >
                <i class="fa-brands fa-x-twitter"></i>
            </a>

            <a
                href="https://www.youtube.com/@Code-With-Sushil"
                aria-label="YouTube"
                target="_blank"
                rel="noopener noreferrer"
            >
                <i class="fa-brands fa-youtube"></i>
            </a>

            <a
                href="#"
                aria-label="GitHub"
            >
                <i class="fa-brands fa-github"></i>
            </a>

        </div>

        <p>
            © 2026
            <strong class="has-text-white">
                Sushil Kumar
            </strong>.
            All rights reserved.
        </p>

        <p class="mt-2">
            Built with
            <span
                aria-label="love"
                role="img"
            >
                ❤️
            </span>
            using HTML, CSS & Bulma.
        </p>

    </div>

</footer>

<!-- Prism.js Core -->
<script
    defer
    src="https://cdn.jsdelivr.net/npm/prismjs@1.30.0/prism.min.js"
></script>

<!-- Prism Languages -->
<script
    defer
    src="https://cdn.jsdelivr.net/npm/prismjs@1.30.0/components/prism-markup.min.js"
></script>

<script
    defer
    src="https://cdn.jsdelivr.net/npm/prismjs@1.30.0/components/prism-css.min.js"
></script>

<script
    defer
    src="https://cdn.jsdelivr.net/npm/prismjs@1.30.0/components/prism-javascript.min.js"
></script>

<script
    defer
    src="https://cdn.jsdelivr.net/npm/prismjs@1.30.0/components/prism-json.min.js"
></script>

<script
    defer
    src="https://cdn.jsdelivr.net/npm/prismjs@1.30.0/components/prism-bash.min.js"
></script>

<script
    defer
    src="https://cdn.jsdelivr.net/npm/prismjs@1.30.0/components/prism-php.min.js"
></script>

<script>

function shareArticle() {

    const url = window.location.href;

    const title =
        document.querySelector('h1')?.textContent.trim()
        || document.title;

    const encodedUrl =
        encodeURIComponent(url);

    const encodedTitle =
        encodeURIComponent(title);

    return {

        copied: false,

        xUrl:
            `https://twitter.com/intent/tweet?url=${encodedUrl}&text=${encodedTitle}`,

        whatsappUrl:
            `https://wa.me/?text=${encodedTitle}%20${encodedUrl}`,

        facebookUrl:
            `https://www.facebook.com/sharer/sharer.php?u=${encodedUrl}`,

        linkedinUrl:
            `https://www.linkedin.com/sharing/share-offsite/?url=${encodedUrl}`,

        emailUrl:
            `mailto:?subject=${encodedTitle}&body=${encodedTitle}%0A%0A${encodedUrl}`,

        async copyLink() {

            try {

                if (
                    !navigator.clipboard ||
                    !window.isSecureContext
                ) {
                    throw new Error(
                        'Clipboard API unavailable'
                    );
                }

                await navigator.clipboard.writeText(url);

                this.copied = true;

                setTimeout(() => {
                    this.copied = false;
                }, 2000);

            } catch (error) {

                window.prompt(
                    'Copy this article URL:',
                    url
                );

            }

        }

    };

}

</script>

</body>
</html>
