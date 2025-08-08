<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/courses/assets/css/style2.css">

  <title>CSS course</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="logo">
        <a href="index.php">
          <img src="/courses/image/logo page.svg" alt="Platform Logo" />
        </a>
      </div>
      <nav class="navigation">
        <div class="side_bar">
          <div class="user_image">
            <img src="/courses/image/laravel.jpg" alt="">
          </div>
          <a href="#"><img class="menu-item collapsible" src="/courses/image/side_bar.jpg" alt="side bar"></a>
          <div class="submenu">
            <div class="settings-toggle">
              <label>Settings</label>
              <img style="width:32px" src="/courses/image/settings.png" alt="settings">
            </div>
            <div class="settings-options">
              <a href="#">Change Profile Picture</a>
              <a href="#">Change Password</a>
              <a href="#">Change Username</a>
              <a href="#">Delete Account</a>
            </div>
            <a class="menu-item delete" href="learning.php">My learning journey</a>
            <a href="logout.php">Log out</a>
          </div>
        </div>
        <script>
          document.addEventListener("DOMContentLoaded", () => {
            const collapsible = document.querySelector(".collapsible");
            const submenu = document.querySelector(".submenu");
            const settingsToggle = document.querySelector(".settings-toggle");
            const settingsOptions = document.querySelector(".settings-options");
            collapsible.addEventListener("click", (e) => {
              e.preventDefault();
              submenu.style.display = submenu.style.display === "block" ? "none" : "block";
            });
            settingsToggle.addEventListener("click", () => {
              settingsOptions.style.display = settingsOptions.style.display === "block" ? "none" : "block";
            });
          });
        </script>
    </div>
  </header>
  <div class="added courses">
<!-- 
  enrolled courses should be added here 
  -->
  </div>
  
</body>
</html>