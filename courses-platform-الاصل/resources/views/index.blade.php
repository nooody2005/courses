<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Platform</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('image/logo page.svg') }}" alt="Platform Logo" />
                </a>
                <span>Courses</span>
            </div>
            <nav class="navigation">
                @auth
                <a href="{{ url('/main') }}" class="nav-link">My Learning</a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="nav-link"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Log Out
                    </a>
                </form>
                @else
                <a href="{{ route('login') }}" class="nav-link">Log In</a>
                <a href="{{ route('register') }}" class="nav-link">Sign Up</a>
                @endauth
                <a href="#courses" class="nav-link">Courses</a>
            </nav>
        </div>
    </header>

    <section class="hero-section">
        <div class="container">
            <div class="hero-content">
                <div class="hero-images">
                    <div class="image-stack">
                        <img src="{{ asset('image/main pic.jpg') }}" alt="Technical Learning" class="hero-img hero-img-1">
                    </div>
                </div>
                <div class="hero-text">
                    <h1 class="hero-title">Our Goal</h1>
                    <p class="hero-description">
                        we are dedicated to providing high-quality, practical tech education with a
                        focus on Full Stack development. We aim to help learners
                        gain real-world skills that prepare them for careers in modern web
                        and software development. </p>
                    <a href="{{ route('register') }}" class="cta-button">Join for Free</a>
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
                @foreach ($courses as $course)
                <div class="course-card">
                    <div class="course-image">
                        <img src="{{ asset('image/' . $course->image) }}" alt="{{ $course->course_name }}">
                    </div>
                    <div class="course-content">
                        <div class="course-logo">
                            <img src="{{ asset('image/ColoredLogo.svg') }}" alt="iti" class="iti-logo">
                        </div>
                        <h3 class="course-title">{{ $course->course_name }}</h3>
                        <div class="course-info">
                            <span class="info-item">
                                <i class="icon-degree"></i>
                                {{ $course->description }}
                            </span>
                            <span class="course-type">Professional Certificate</span>
                            @auth
                            <a href="{{ route('enroll', $course->id) }}">
                                <button class="enroll">Enroll</button>
                            </a>
                            @else
                            <a href="{{ route('login') }}">
                                <button class="enroll">Enroll</button>
                            </a>
                            @endauth
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-content">
            <div class="footer_logo">
                <img src="{{ asset('/image/Group1.svg') }}" alt="Logo" />
            </div>
            <div class="quick_links">
                <h4>QUICK LINKS</h4>
                <a href="#">About Us</a>
                <a href="#">Contact</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Help</a>
            </div>
            <div class="contact">
                <h4>CONTACT</h4>
                <div id="email">
                    <img src="{{ asset('/image/email.jpg') }}" alt="Email Icon" />
                    <p>Email: coursera@gamil.com</p>
                </div>
                <div id="phone">
                    <img src="{{ asset('/image/phone.jpg') }}" alt="Phone Icon" />
                    <p>Phone: +20 123 456 789</p>
                </div>
                <div id="address">
                    <img src="{{ asset('/image/address.jpg') }}" alt="Address Icon" />
                    <p>Address: Cairo, Egypt</p>
                </div>
            </div>
            <div class="sponsor">
                <h3>OUR SPONSOR</h3>
                <a href="https://iti.gov.eg/home">
                    <img src="{{ asset('/image/ColoredLogo.svg') }}" alt="ITI Logo">
                </a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 coursera. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>