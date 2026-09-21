<?= $this->extend('layouts/main') ?>
<?= $this->section('head') ?>
<meta name="description" content="Sushil Kumar | Full Stack PHP/Laravel Developer, Freelancer, open source contributor, content creator on YouTube and Instagram.">
<style>
.blog-card {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .blog-card .card-content {
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .blog-card .button {
            margin-top: auto;
            align-self: flex-start;
        }
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>

<section class="container my-3 px-3">
    <div class="columns is-multiline">

        <!-- Card 1 -->
        <div class="column is-12-mobile is-6-tablet is-4-desktop is-3-widescreen">

            <article class="card blog-card">

                <div class="card-image">
                    <figure class="image is-16by9">
                        <img
                            src="https://images.unsplash.com/photo-1558494949-ef010cbdcc31?auto=format&fit=crop&w=1000&q=80"
                            alt="Building a production-ready PHP API"
                            loading="lazy"
                        >
                    </figure>
                </div>

                <div class="card-content">

                    <div class="tags">
                    	<span class="tag is-primary">API</span>
                        <span class="tag is-link">PHP</span>
                    </div>

                    <h2 class="title is-5">
                        Building a Production-Ready PHP API
                    </h2>

                    <p class="content">
                        Learn how to structure a secure and maintainable PHP API.
                    </p>

                    <div class="is-flex is-justify-content-space-between">
                        <time datetime="2026-09-20">
                            Sep 20, 2026
                        </time>

                        <span>8 min read</span>
                    </div>

                    <a
                        href="/blog/production-ready-php-api"
                        class="button is-link is-light mt-4"
                    >
                        Read article
                    </a>

                </div>
            </article>
        </div>
    </div>
</section>
<?= $this->endSection() ?>
<?= $this->section('scripts') ?>
<?= $this->endSection() ?>
