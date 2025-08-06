<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Platform</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="index.php">
                    <img src="image/logo page.svg" alt="Platform Logo" />
                </a>
            </div>
            <nav class="navigation">
                <a href="log in.php" class="nav-link">Log In</a>
                <a href="sign up.php" class="nav-link">Sign Up</a>
                <a href="#courses" class="nav-link">Courses</a>
            </nav>
        </div>
    </header>
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-images">
                    <div class="image-stack">
                        <img src="./image/main pic.jpg" alt="Technical Learning" class="hero-img hero-img-1">
                    </div>

                </div>
                <!-- <div class="arrow">
                    <img class="arrow-image" src="image/WhatsApp_Image_2025-08-06_at_19.55.46_c444e8ec-removebg-preview.png" alt="">
                </div> -->
                <div class="hero-text">
                    <h1 class="hero-title">Our Goal</h1>
                    <p class="hero-description">
                        we are dedicated to providing high-quality, practical tech education with a
                        focus on Full Stack development. We aim to help learners
                        gain real-world skills that prepare them for careers in modern web
                        and software development. </p>
                    <a href="sign up.php" class="cta-button">Join for Free</a>
                </div>
            </div>
        </div>
    </section>
    <section id="courses" class="courses-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Most Popular Certificates</h2>
                <p class="section-description">Explore our most popular programs, get job-ready for an in-demand career</p>
            </div>
            <div class="courses-grid">
                <div class="course-card">
                    <div class="course-image">
                        <img src="./image/css.jpg" alt="CSS">
                        <div class="course-badges">
                            <span class="badge badge-free">Free Trial</span>
                            <span class="badge badge-ai">AI skills ✨</span>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="course-logo">
                            <img src="./image/Google.svg" alt="Google" class="google-logo">
                        </div>
                        <h3 class="course-title">Google Data Analytics</h3>
                        <div class="course-info">
                            <span class="info-item">
                                <i class="icon-degree"></i>
                                Build toward a degree
                            </span>
                            <span class="course-type">Professional Certificate</span>
                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-image">
                        <img src="./image/html.jpg" alt="HTML">
                        <div class="course-badges">
                            <span class="badge badge-free">Free Trial</span>
                            <span class="badge badge-ai">AI skills ✨</span>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="course-logo">
                            <img src="./image/Google.svg" alt="Google" class="google-logo">
                        </div>
                        <h3 class="course-title">Google Project Management</h3>
                        <div class="course-info">
                            <span class="info-item">
                                <i class="icon-degree"></i>
                                Build toward a degree
                            </span>
                            <span class="course-type">Professional Certificate</span>
                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-image">
                        <img src="./image/php.jpg" alt="PHP">
                        <div class="course-badges">
                            <span class="badge badge-free">Free Trial</span>
                            <span class="badge badge-ai">AI skills ✨</span>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="course-logo">
                            <img src="./image/Google.svg" alt="Google" class="google-logo">
                        </div>
                        <h3 class="course-title">Google IT Support</h3>
                        <div class="course-info">
                            <span class="info-item">
                                <i class="icon-degree"></i>
                                Build toward a degree
                            </span>
                            <span class="course-type">Professional Certificate</span>
                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-image">
                        <img src="./image/laravel.jpg" alt="Laravel">
                        <div class="course-badges">
                            <span class="badge badge-free">Free Trial</span>
                            <span class="badge badge-ai">AI skills ✨</span>
                        </div>
                    </div>
                    <div class="course-content">
                        <div class="course-logo">
                            <img src="./image/Google.svg" alt="Google" class="google-logo">
                        </div>
                        <h3 class="course-title">Google UX Design</h3>
                        <div class="course-info">
                            <span class="info-item">
                                <i class="icon-degree"></i>
                                Build toward a degree
                            </span>
                            <span class="course-type">Professional Certificate</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="courses-actions">
                <button class="btn btn-primary">Show 8 more</button>
                <button class="btn btn-secondary">View all →</button>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <p>© 2025 iti team. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>git commit -m "Initial commit"