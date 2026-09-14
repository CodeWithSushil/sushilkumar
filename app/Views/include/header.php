<nav class="navbar navbar-expand-lg bg-body shadow-sm sticky-top">
    <div class="container-fluid">
        <!-- Mobile Sidebar Toggle -->
        <button type="button" class="btn btn-outline-secondary d-lg-none me-2" data-bs-toggle="offcanvas" data-bs-target="#mobileSidebar" aria-controls="mobileSidebar">
            <i class="bi bi-list fs-4"></i>
        </button>
        	
        <!-- Desktop Sidebar Toggle -->
        <button type="button" class="btn btn-outline-secondary d-none d-lg-inline-flex me-2" id="desktopSidebarToggle" aria-label="Toggle sidebar">
            <i class="bi bi-layout-sidebar"></i>
        </button>
        
        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="/">
            <i class="bi bi-code-slash text-primary"></i>
            Sushil Kumar
        </a>
        	
        <!-- Mobile Theme -->
        <button type="button" class="btn btn-outline-secondary d-lg-none ms-auto" id="mobileThemeToggle">
            <i class="bi bi-moon-stars"></i>
        </button>
        	
        <!-- Desktop Navigation -->
        <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav ms-auto align-items-lg-center">
        		    <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/skills"> Skills </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
                </li>
                <li class="nav-item ms-lg-2">
                    <button type="button" class="btn btn-outline-secondary" id="themeToggle">
                        <i class="bi bi-moon-stars"></i>
                    </button>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="offcanvas offcanvas-start" tabindex="-1" id="mobileSidebar">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">
            <i class="bi bi-person-circle"></i>
            Sushil Kumar
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body">
        <div class="text-center mb-4">
            <div class="avatar mb-3">
                <i class="bi bi-person"></i>
            </div>
            <h5>Sushil Kumar</h5>
            <p class="text-body-secondary">
                Full Stack PHP Developer
            </p>
        </div>

        <nav class="sidebar-nav">
            <a href="/" data-bs-dismiss="offcanvas">
                <i class="bi bi-house"></i>
                <span>Home</span>
            </a>
            <a href="/about" data-bs-dismiss="offcanvas">
                <i class="bi bi-person"></i>
                <span>About</span>
            </a>
            <a href="/skills" data-bs-dismiss="offcanvas">
                <i class="bi bi-lightning"></i>
                <span>Skills</span>
            </a>
            <a href="/projects" data-bs-dismiss="offcanvas">
                <i class="bi bi-folder"></i>
                <span>Projects</span>
            </a>
            <a href="/experience" data-bs-dismiss="offcanvas">
                <i class="bi bi-briefcase"></i>
                <span>Experience</span>
            </a>
            <a href="/services" data-bs-dismiss="offcanvas">
                <i class="bi bi-tools"></i>
                <span>Services</span>
            </a>
            <a href="/contact" data-bs-dismiss="offcanvas">
                <i class="bi bi-envelope"></i>
                <span>Contact</span>
            </a>
            <hr />
            <div class="sidebar-social text-center">
                <p class="small text-body-secondary"> Follow me </p>
                <div class="d-flex justify-content-center gap-2">
                    <a href="#" class="social-link">
                        <i class="bi bi-github"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="#" class="social-link">
                        <i class="bi bi-youtube"></i>
                    </a>
                </div>
            </div>
        </nav>
    </div>
</div>
