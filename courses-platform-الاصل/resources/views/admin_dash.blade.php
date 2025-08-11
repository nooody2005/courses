<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/courses/assets/css/all.min.css') }}">
  <link rel="stylesheet" href="/courses/assets/css/fontawesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('/courses/assets/css/style.css') }}">
  <title>Home</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="logo">
        <a href="index.php">
          <img src="{{ asset('/courses/image/logo page.svg') }}" alt="Platform Logo" />
        </a>
        <span>Courses</span>
      </div>
      <nav class="navigation">
        <!-- <a href="#courses" class="nav-link">Courses</a> -->
      </nav>
    </div>
  </header>

  <div class="main-layout">
    <div class="side_bar">
      <header class="side_bar-header">
        <!-- //user uploaded image -->
        <img src="{{ asset('/courses/image/laravel.jpg') }}" alt="" class="personal-image">
        <button class="user_image" id="toggleSidebar">
          <a href="#"><img class="menu-item collapsible" src="{{ asset('/courses/image/side_bar.jpg') }}" alt="side bar"></a>
        </button>
      </header>

      <div class="submenu">
        <ul class="menu-list">
          <li>
            <a href="" class="active main-icon">
              <i class="fa-solid fa-house"></i>
              <span>Main</span>
            </a>
          </li>

          <!-- Collapsible Settings Button -->
          <li>
            <button id="toggleSettings" style="background: none; border: none; cursor: pointer;">
              <img src="{{ asset('/courses/image/settings.png') }}" style="vertical-align: middle; width: 20px;">
              <span style="margin-left: 5px;">Settings</span>
            </button>
          </li>

          <!-- Collapsible Settings Menu -->
          <ul id="settingsMenu" style="display: none; margin-left: 25px;">
            <li><a href="#">Change Profile Picture</a></li>
            <li><a href="#">Change Password</a></li>
          </ul>
           <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a href="{{ route('logout') }}" class="log-out" onclick="event.preventDefault(); this.closest('form').submit();">
                                Log out
                            </a>
                        </form>
        </ul>
      </div>
    </div>

    <div class="main-content">
      <!-- //action wasn't added to the form-->
      <form method="POST" action="" enctype="multipart/form-data" class="add_course_form actions-main2 ">
        <div class="actions-main">
          <a href="">Courses actions</a>
          <a href="{{ route('user_action_view') }}">user actions</a>
        </div>
      </form>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const toggleBtn = document.getElementById("toggleSidebar");
      const sidebar = document.querySelector(".side_bar");
      const toggleSettingsBtn = document.getElementById("toggleSettings");
      const settingsMenu = document.getElementById("settingsMenu");

      toggleBtn.addEventListener("click", function() {
        sidebar.classList.toggle("collapsed");
      });

      toggleSettingsBtn.addEventListener("click", function() {
        settingsMenu.style.display = settingsMenu.style.display === "none" ? "block" : "none";
      });
    });
  </script>

  <footer>
    <div class="footer-content">
      <div class="footer_logo">
        <img src="{{ asset('/courses/image/Group1.svg') }}" alt="Logo" />
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
          <img src="{{ asset('/courses/image/email.jpg') }}" alt="Email Icon" />
          <p>Email: coursera@gamil.com</p>
        </div>
        <div id="phone">
          <img src="{{ asset('/courses/image/phone.jpg') }}" alt="Phone Icon" />
          <p>Phone: +20 123 456 789</p>
        </div>
        <div id="address">
          <img src="{{ asset('/courses/image/address.jpg') }}" alt="Address Icon" />
          <p>Address: Cairo, Egypt</p>
        </div>
      </div>

      <div class="sponsor">
        <h3>OUR SPONSOR</h3>
        <a href="https://iti.gov.eg/home">
          <img src="{{ asset('/courses/image/ColoredLogo.svg') }}" alt="ITI Logo">
        </a>
      </div>
    </div>

    <div class="footer-bottom">
      <p>&copy; 2025 coursera. All rights reserved.</p>
    </div>
  </footer>
</body>

</html>