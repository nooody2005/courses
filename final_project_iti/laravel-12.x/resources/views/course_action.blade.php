
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>courses</title>
  <link rel="stylesheet" href="{{ asset('dashboard/assets/courses/assets/css/style.css') }}">
</head>
<body>
   <header class="header">
    <div class="container">
      <div class="logo">
        <a href="index.php">
          <img src="{{ asset('dashboard/assets/courses/image/logo page.svg') }}" alt="Platform Logo" />
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
        <img src="{{ asset('dashboard/assets/courses/image/laravel.jpg') }}" alt="" class="personal-image">
        <button class="user_image" id="toggleSidebar">
          <a href="#"><img class="menu-item collapsible" src="{{ asset('dashboard/assets/courses/image/side_bar.jpg') }}" alt="side bar"></a>
        </button>
      </header>

      <div class="submenu">
        <ul class="menu-list">
          <li>
          <img style="width:40px" src="{{ asset('dashboard/assets/courses/image/home.png') }}" >
          <a href="" class="active">Main</a>
        </li>

          <!-- Collapsible Settings Button -->
          <li>
            <button id="toggleSettings" style="background: none; border: none; cursor: pointer;">
              <img src="{{ asset('dashboard/assets/courses/image/settings.png') }}" style="vertical-align: middle; width: 20px;">
              <span style="margin-left: 5px;">Settings</span>
            </button>
          </li>

          <!-- Collapsible Settings Menu -->
          <ul id="settingsMenu" style="display: none; margin-left: 25px;">
            <li><a href="#">Change Profile Picture</a></li>
            <li><a href="#">Change Password</a></li>
          </ul>

          <li><a href="logout.php">Log out</a></li>
        </ul>
      </div>
    </div>


  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const toggleBtn = document.getElementById("toggleSidebar");
      const sidebar = document.querySelector(".side_bar");
      const toggleSettingsBtn = document.getElementById("toggleSettings");
      const settingsMenu = document.getElementById("settingsMenu");

      toggleBtn.addEventListener("click", function () {
        sidebar.classList.toggle("collapsed");
      });

      toggleSettingsBtn.addEventListener("click", function () {
        settingsMenu.style.display = settingsMenu.style.display === "none" ? "block" : "none";
      });
    });
  </script>


  <div class="main-content">
    <h3>All Students</h3>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Email</th>
          <th>Phone</th>
          <th>City</th>
          <th>Skills</th>
          <th>Monitor</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>

  </div>
    <a href="add_course.php">add course</a>
</body>
</html>
