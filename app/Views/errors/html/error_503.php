<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Essential for Mobile Responsiveness -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>We'll Be Back Soon! - Maintenance</title>
    
    <!-- Bulma CSS Framework v1.0.4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/1.0.4/css/bulma.min.css">
    
    <!-- FontAwesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- New Google Fonts: Outfit & Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
            padding: 1rem; /* Prevents edge clipping on small screens */
        }

        h1, h2, h3, .title {
            font-family: 'Outfit', sans-serif;
        }

        /* Floating Gear & Pulse Animations */
        @keyframes floatGear {
            0% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-10px) rotate(180deg); }
            100% { transform: translateY(0px) rotate(360deg); }
        }

        @keyframes pulseGlow {
            0% { box-shadow: 0 0 0 0 rgba(72, 95, 199, 0.4); }
            70% { box-shadow: 0 0 0 15px rgba(72, 95, 199, 0); }
            100% { box-shadow: 0 0 0 0 rgba(72, 95, 199, 0); }
        }

        .maintenance-icon-wrapper {
            position: relative;
            width: 100px;
            height: 100px;
            background: var(--bulma-primary, #485fc7);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1.5rem auto;
            color: white;
            font-size: 2.5rem;
            animation: pulseGlow 2s infinite;
        }

        .maintenance-icon-wrapper i {
            animation: floatGear 6s ease-in-out infinite;
        }

        /* Responsive Card Styling */
        .maintenance-card {
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.4);
            border-radius: 1.25rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            width: 100%;
        }

        /* Fluid input focus matching Bulma v1 variables */
        .input:focus {
            border-color: var(--bulma-primary, #485fc7) !important;
            box-shadow: 0 0 0 0.125em rgba(72, 95, 199, 0.25) !important;
        }

        /* Mobile Adjustments */
        @media screen and (max-width: 768px) {
            .maintenance-card {
                padding: 1.5rem !important;
            }
            .title.is-3 {
                font-size: 1.5rem !important;
            }
        }
    </style>
</head>
<body>

    <section class="section w-100 p-0">
        <div class="container">
            <div class="columns is-centered is-mobile">
                <div class="column is-12-mobile is-10-tablet is-6-desktop is-5-widescreen">
                    
                    <!-- Main Card Wrapper -->
                    <div class="card maintenance-card p-5-mobile p-6-tablet has-text-centered">
                        
                        <!-- Animated Icon Wrapper -->
                        <div class="maintenance-icon-wrapper">
                            <i class="fas fa-gears"></i>
                        </div>

                        <!-- Main Headings -->
                        <h1 class="title is-3 has-text-weight-bold mb-3" style="color: #2b2d42;">
                            We'll Be Back Soon!
                        </h1>
                        <p class="subtitle is-6 has-text-grey mb-4">
                            We are currently performing scheduled maintenance to improve your experience. Hang tight, we'll be back online shortly!
                        </p>

                        <!-- Bulma v1 Progress Bar -->
                        <progress class="progress is-small is-link mb-5" max="100">60%</progress>

                        <!-- Notification Subscription Box -->
                        <div class="box p-4 mb-5" style="background: #f8f9fa; border: none; border-radius: 0.75rem;">
                            <p class="is-size-7 has-text-grey-dark mb-3">
                                <i class="fas fa-bell mr-1 has-text-primary"></i> Get notified when we launch:
                            </p>
                            <form onsubmit="event.preventDefault(); alert('Thank you! We will notify you when we are back.');">
                                <div class="field has-addons is-flex-direction-mobile">
                                    <div class="control is-expanded mb-2-mobile">
                                        <input class="input is-small" type="email" placeholder="Enter your email" required>
                                    </div>
                                    <div class="control">
                                        <button type="submit" class="button is-primary is-small is-fullwidth-mobile">
                                            Notify Me
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Social / Contact Links -->
                        <div class="social-links pt-1">
                            <p class="is-size-7 has-text-grey mb-3">Reach out in the meantime:</p>
                            <div class="buttons is-centered are-small">
                                <a href="mailto:support@example.com" class="button is-link is-rounded">
                                    <span class="icon"><i class="fas fa-envelope"></i></span>
                                    <span>Email</span>
                                </a>
                                <a href="https://twitter.com" target="_blank" class="button is-info is-rounded">
                                    <span class="icon"><i class="fab fa-twitter"></i></span>
                                    <span>Twitter</span>
                                </a>
                                
                            </div>
                        </div>

                    </div>

                    <!-- Footer Info -->
                    <div class="has-text-centered mt-4">
                        <p class="is-size-7 has-text-grey">
                            &copy; 2026 Sushil Kumar. All rights reserved.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

</body>
</html>
