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
        <span>Courses</span>
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

          function changeVideo(src) {
            const video = document.getElementById("courseVideo");
            const source = document.getElementById("videoSource");
            source.src = src;
            video.load();
            video.play();
          }
        </script>
      </nav>
    </div>
  </header>


  <!-- Course Content -->
  <div class="course_container">
    <div class="video-section">
      <video id="courseVideo" controls width="100%" poster="/courses/image/main pic.jpg">
        <source id="videoSource" src="/courses/videos/css_session_1.mp4" type="video/mp4" />
      </video>
      <div class="tabs">
        <nav class="tabs-nav">
          <a href="#" class="active">Overview</a>
          <a href="#">Notes</a>
        </nav>
      </div>
      <div class="course-info">
        <h1>CSS fundamentals</h1>
        <div class="stats">
          <div class="rating"><span class="score">4.4</span><i class="fas fa-star"></i></div>
          <span class="ratings-count">(23 ratings)</span>
          <div class="students"><span class="students-count">406</span> Students</div>
          <div class="duration"><span class="duration-time">33 mins</span> Total</div>
        </div>
        <div class="meta-info">
          <div><i class="fas fa-clock"></i><span>Last updated October 2023</span></div>
        </div>
        <p>Languages: Arabic</p>
      </div>
    </div>
    <div class="sidebar">
      <h2>Course content</h2>
      <div class="section">
        <ul>
          <li><a onclick="changeVideo('/courses/videos/css_session_1.mp4')">Introduction</a></li>
          <li><a onclick="changeVideo('/courses/videos/css_session_2.mp4')">Basic Commands</a></li>
          <li><a onclick="changeVideo('/courses/videos/css_session_2.mp4')">CSS Syntax</a></li>
          <li><a onclick="changeVideo('/courses/videos/css_session_2.mp4')">CSS Selectors</a></li>
          <li><a onclick="changeVideo('/courses/videos/css_session_2.mp4')">How To Add CSS</a></li>
          <li><a onclick="changeVideo('/courses/videos/css_session_2.mp4')">CSS Comments</a></li>
          <li><a onclick="changeVideo('/courses/videos/css_session_2.mp4')">CSS Colors</a></li>
        </ul>
      </div>
    </div>
  </div>
</body>

</html>