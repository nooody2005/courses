<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Platform</title>
    <link rel="stylesheet" href="dashboard/assets/courses/assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <!-- <div class="side-menu">
                <img src="./image/side-menu.svg" alt="">
            </div> -->
            <div class="logo">
                <a href="index.php">
                    <img src="{{ asset('dashboard/assets/courses/image/logo page.svg') }}" alt="Platform Logo" />
                </a>
                <span>
                    Courses</span>
            </div>
            <nav class="navigation">
                <a href="{{ route('login') }}" class="nav-link">Log In</a>
                <a href="{{ route('createu') }}" class="nav-link">Sign Up</a>
                <a href="#courses" class="nav-link">Courses</a>
            </nav>
        </div>
    </header>
    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-images">
                    <div class="image-stack">
                        <img src="{{ asset('dashboard/assets/courses/image/main pic.jpg') }}" alt="Technical Learning" class="hero-img hero-img-1">
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
                        <img src="{{ asset('dashboard/assets/image/css.jpg') }}" alt="CSS">
                        <!-- <div class="course-badges">
                            <span class="badge badge-free">Free Trial</span>
                            <span class="badge badge-ai">AI skills ✨</span>
                        </div> -->
                    </div>
                    <div class="course-content">
                        <div class="course-logo">
                            <img src="{{ asset('dashboard/assets/courses/image/ColoredLogo.svg') }}" alt="iti" class="iti-logo">
                        </div>
                        <h3 class="course-title">CSS</h3>
                        <div class="course-info">
                            <span class="info-item">
                                <i class="icon-degree"></i>
                                Learn how to style beautiful, responsive websites by joining this class and CSS.
                            </span>
                            <span class="course-type">Professional Certificate</span>
                            <button class="enroll">Enroll</button>
                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('dashboard/assets/courses/image/html.jpg') }}" alt="HTML">
                        <!-- <div class="course-badges">
                            <span class="badge badge-free">Free Trial</span>
                            <span class="badge badge-ai">AI skills ✨</span>
                        </div> -->
                    </div>
                    <div class="course-content">
                        <div class="course-logo">
                            <img src="{{ asset('dashboard/assets/courses/image/ColoredLogo.svg') }}" alt="iti" class="iti-logo">
                        </div>
                        <h3 class="course-title">Html</h3>
                        <div class="course-info">
                            <span class="info-item">
                                <i class="icon-degree"></i>
                                Discover the structure of the web. Join this class to build your foundation with HTML. </span>
                            <span class="course-type">Professional Certificate</span>
                            <button class="enroll">Enroll</button>
                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('dashboard/assets/courses/image/php.jpg') }}" alt="PHP">
                        <!-- <div class="course-badges">
                            <span class="badge badge-free">Free Trial</span>
                            <span class="badge badge-ai">AI skills ✨</span>
                        </div> -->
                    </div>
                    <div class="course-content">
                        <div class="course-logo">
                            <img src="{{ asset('dashboard/assets/courses/image/ColoredLogo.svg') }}" alt="iti" class="iti-logo">
                        </div>
                        <h3 class="course-title">Php</h3>
                        <div class="course-info">
                            <span class="info-item">
                                <i class="icon-degree"></i>
                                Learn how to build powerful server-side applications by joining our PHP course today </span>
                            <span class="course-type">Professional Certificate</span>
                            <button class="enroll">Enroll</button>
                        </div>
                    </div>
                </div>
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('dashboard/assets/courses/image/laravel.jpg') }}" alt="Laravel">
                        <!-- <div class="course-badges">
                            <span class="badge badge-free">Free Trial</span>
                            <span class="badge badge-ai">AI skills ✨</span>
                        </div> -->
                    </div>


                    <div class="course-content">
                        <div class="course-logo">
                            <img src="{{ asset('dashboard/assets/courses/image/ColoredLogo.svg') }}" alt="iti" class="iti-logo">
                        </div>
                        <h3 class="course-title">Laravel</h3>
                        <div class="course-info">
                            <span class="info-item">
                                <i class="icon-degree"></i>
                                Master modern PHP development with Laravel. Join this class to level up your skills.
                            </span>
                            <span class="course-type">Professional Certificate</span>
                            <button class="enroll">Enroll</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <footer>
        <div class="footer-content">

            <div class="footer_logo">
                <img src="{{ asset('dashboard/assets/courses/image/Group.svg') }}" alt="Logo" />
            </div>

            <div class="quick_links">
                <h4>QUICK LINKS</h4>
                <a href="#">About Us</a>
                <a href="#">Contact</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Help</a>
            </div>
@if (1)
{{ asset('dashboard\assets\courses\login_pop.php') }}

@endif
            <div class="contact">
                <h4>CONTACT</h4>
                <div id="email">
                    <img src="{{ asset('dashboard/assets/courses/image/email.jpg') }}" alt="Email Icon" />
                    <p>Email: coursera@gamil.com</p>
                </div>
                <div id="phone">
                    <img src="{{ asset('dashboard/assets/courses/image/phone.jpg') }}" alt="Phone Icon" />
                    <p>Phone: +20 123 456 789</p>
                </div>
                <div id="address">
                    <img src="{{ asset('dashboard/assets/courses/image/address.jpg') }}" alt="Address Icon" />
                    <p>Address: Cairo, Egypt</p>
                </div>
            </div>

            <div class="sponsor">
                <h3>OUR SPONSOR</h3>
                <a href="https://iti.gov.eg/home">
                    <img src="{{ asset('dashboard/assets/courses/image/ColoredLogo.svg') }}" alt="ITI Logo">
                </a>
            </div>

        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 coursera. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
