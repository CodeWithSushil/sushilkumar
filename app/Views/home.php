<?= $this->extend('layouts/main') ?>
<?= $this->section('head') ?>
<meta name="description" content="Sushil Kumar | Full Stack PHP/Laravel Developer, Freelancer, open source contributor, content creator on YouTube and Instagram.">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="main-content">
    <section id="home" class="hero-section">
        <span class="badge text-bg-primary mb-3"> Available for freelance work </span>
        <h1 class="display-5 fw-bold">Hi, I'm

            <span class="text-primary">Sushil Kumar </span>
        </h1>


            <h2
                class="h4 text-body-secondary">

                Full Stack PHP Developer

            </h2>


            <p
                class="lead text-body-secondary mt-3">

                I build secure, scalable and modern
                web applications using PHP,
                JavaScript, SQL and modern technologies.

            </p>


            <div
                class="d-flex justify-content-center flex-wrap gap-2 mt-4">


                <a
                    href="#contact"
                    class="btn btn-primary">

                    <i class="bi bi-send me-1"></i>

                    Hire Me

                </a>


                <a
                    href="#projects"
                    class="btn btn-outline-secondary">

                    <i class="bi bi-folder me-1"></i>

                    View Projects

                </a>


            </div>

        </section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>
<script src="/assets/js/main.js" defer></script>
<?= $this->endSection() ?>
