<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="logo">
                <a href="{{ url('/dashboard') }}">
                    <img src="{{ asset('image/logo page.svg') }}" alt="Platform Logo" />
                </a>
                <span>Courses</span>
            </div>
            <nav class="navigation">
                <a href="#courses" class="nav-link">Courses</a>
            </nav>
        </div>
    </header>

    <div class="main-layout">
        <div class="side_bar">
            <header class="side_bar-header">

                @if (Auth::user()->profile_picture)
                <img src="{{ asset('storage/' . Auth::user()->profile_picture) . '?v=' . time() }}" alt="Profile Picture" class="personal-image">
                @else
                <img src="{{ asset('image/default-avatar.png') }}" alt="Profile Picture" class="personal-image">
                @endif

                <button class="user_image" id="toggleSidebar">
                    <a href="#"><img class="menu-item collapsible" src="{{ asset('image/side_bar.jpg') }}" alt="side bar"></a>
                </button>
            </header>

            <div class="submenu">
                <ul class="menu-list">
                    <li>
                        <a href="{{ route('dashboard') }}" class="active main-icon">
                            <i class="fa-solid fa-house"></i>
                            <span>Main</span>
                        </a>
                    </li>
                    <li>
                        <button id="toggleSettings" style="background: none; border: none; cursor: pointer;">
                            <img src="{{ asset('image/settings.png') }}" style="vertical-align: middle; width: 20px;">
                            <span style="margin-left: 5px;">Settings</span>
                        </button>
                    </li>
                    <ul id="settingsMenu" style="display: none; margin-left: 25px;">

                        <li><a href="{{ route('account.settings') }}">Edit Profile</a></li>

                    </ul>
                    <li><a class="menu-item delete" href="{{ route('my-learning') }}">My learning journey</a></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="log-out" onclick="event.preventDefault(); this.closest('form').submit();">
                                Log out
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <section id="courses" class="courses-section content-wrapper">
            <div class="container">
                @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                <div class="section-header">
                    <h2 class="section-title">Discover our courses</h2>
                </div>

                <div class="courses-grid">
                    @forelse ($courses as $course)
                    <div class="course-card">
                        <div class="course-image">
                            <img src="{{ asset('image/' . $course->image) }}" alt="{{ $course->course_name }}">
                        </div>
                        <div class="course-content">
                            <h3 class="course-title">{{ $course->course_name }}</h3>
                            <div class="course-info">
                                <span class="info-item">{{ $course->description }}</span>
                                <span class="course-type">Professional Certificate</span>

                                @if (in_array($course->id, $enrolledCourseIds))
                                <a href="{{ route('courses.show', $course->id) }}" class="enroll enrolled">Go to Course</a>
                                @else
                                <a href="{{ route('enroll', $course->id) }}" class="enroll">Enroll</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @empty
                    <p>No courses available at the moment.</p>
                    @endforelse
                </div>
            </div>
        </section>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleBtn = document.getElementById("toggleSidebar");
            const sidebar = document.querySelector(".side_bar");
            const toggleSettingsBtn = document.getElementById("toggleSettings");
            const settingsMenu = document.getElementById("settingsMenu");

            if (toggleBtn && sidebar) {
                toggleBtn.addEventListener("click", function() {
                    sidebar.classList.toggle("collapsed");
                });
            }

            if (toggleSettingsBtn && settingsMenu) {
                toggleSettingsBtn.addEventListener("click", function() {
                    settingsMenu.style.display = settingsMenu.style.display === "none" ? "block" : "none";
                });
            }
        });
    </script>

    <footer>
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
    </footer>
</body>

</html>