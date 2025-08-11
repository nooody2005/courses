<!DOCTYPE html>
<html lang="en">

<head>

   <link rel="stylesheet" href="{{ asset('/courses/assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/courses/assets/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('/courses/assets/css/style.css') }}">

  

  <meta charset="UTF-8">
  <link rel="stylesheet" href="/courses/assets/css/style.css">
  <title>Update user</title>
</head>
<body>
  <header class="header">
    <div class="container">
      <div class="logo">
        <a href="index.php">
          <img src="{{ asset('courses/image/logo page.svg') }}" alt="Platform Logo" />
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
          <li><a href="logout.php" class="log-out">Log out</a></li>
        </ul>
      </div>
    </div>
    <div class="main-content">
      <!-- //action wasn't added to the form-->
      <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data" class="add_course_form">
  @csrf

  <label>Course Name:</label>
  <input type="text" name="course_name" placeholder="Course name" required>

  <label>Course Image:</label>
  <input type="file" name="course_image" accept="image/*" required>

  <label>Description:</label>
  <textarea name="description" placeholder="Add description" rows="5" required></textarea>

  <hr>

  <label>Video Title:</label>
  <input type="text" name="videos[0][video_title]" placeholder="Video title" required>

  <label>Video File:</label>
  <input type="file" name="videos[0][video_file]" accept="video/*" required>

  <!-- لو عايزة تدي إمكانية رفع أكثر من فيديو -->
  <div id="additional-videos"></div>

  <button type="button" id="add-video-btn">Add Another Video</button>

  <button type="submit">Finish</button>
</form>

<script>
  let videoCount = 1;
  document.getElementById('add-video-btn').addEventListener('click', function() {
    const container = document.getElementById('additional-videos');
    const newVideoHTML = `
      <hr>
      <label>Video Title:</label>
      <input type="text" name="videos[${videoCount}][video_title]" placeholder="Video title" required>

      <label>Video File:</label>
      <input type="file" name="videos[${videoCount}][video_file]" accept="video/*" required>
    `;
    container.insertAdjacentHTML('beforeend', newVideoHTML);
    videoCount++;
  });
</script>

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
</body>

</html>