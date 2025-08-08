
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <link rel="stylesheet" href="/courses/assets/css/style.css">
  <title>Update user</title>
 
</head>
<body>
    <header class="header">
    <div class="container">
      <div class="logo">
        <a href="index.php">
          <img src="/courses/image/logo page.svg" alt="Platform Logo" />
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
        <img src="/courses/image/laravel.jpg" alt="" class="personal-image">
        <button class="user_image" id="toggleSidebar">
          <a href="#"><img class="menu-item collapsible" src="/courses/image/side_bar.jpg" alt="side bar"></a>
        </button>
      </header>

      <div class="submenu">
        <ul class="menu-list">
          <li>
          <img style="width:40px" src="/courses/image/home.png" >
          <a href="" class="active">Main</a>
        </li>

          <!-- Collapsible Settings Button -->
          <li>
            <button id="toggleSettings" style="background: none; border: none; cursor: pointer;">
              <img src="/courses/image/settings.png" style="vertical-align: middle; width: 20px;">
              <span style="margin-left: 5px;">Settings</span>
            </button>
          </li>

          <!-- Collapsible Settings Menu -->
          <ul id="settingsMenu" style="display: none; margin-left: 25px;">
            <li><a href="#">Change Profile Picture</a></li>
            <li><a href="#">Change Password</a></li>
          </ul>

          <li><a class="menu-item delete" href="learning.php">My learning journey</a></li>
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


<!-- //action wasn't added to the form-->
<form method="POST" action="" enctype="multipart/form-data">
  <label>
    Course Name:
    <input type="text" name="course_name" placeholder="Course name" required>
  </label>

  <label>
    Course Image:
    <input type="file" name="course_image"  required>
  </label>

  <label>
    Description:
    <textarea name="description" placeholder="Add description" rows="5" required></textarea>
  </label>

  <a href="add_video.php">Add a video</a>

  <button type="submit">Finish</button>
</form>
  </div>
</body>
</html>
