<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="stylesheet" href="{{ asset('/courses/assets/css/all.min.css') }}">
   <link rel="stylesheet" href="{{ asset('/courses/assets/css/fontawesome.min.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
   <link rel="stylesheet" href="{{ asset('/courses/assets/css/style.css') }}">

  <meta charset="UTF-8">
  <title>Edit Course</title>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="logo">
        <a href="{{ url('/') }}">
          <img src="{{ asset('courses/image/logo page.svg') }}" alt="Platform Logo" />
        </a>
        <span>Courses</span>
      </div>
      <nav class="navigation"></nav>
    </div>
  </header>

  <div class="main-layout">
    <div class="side_bar">
      <header class="side_bar-header">
        <img src="{{ asset('/courses/image/laravel.jpg') }}" alt="" class="personal-image">
        <button class="user_image" id="toggleSidebar">
          <a href="#"><img class="menu-item collapsible" src="{{ asset('/courses/image/side_bar.jpg') }}" alt="side bar"></a>
        </button>
      </header>
      <div class="submenu">
        <ul class="menu-list">
          <li><a href="#" class="active main-icon"><i class="fa-solid fa-house"></i><span>Main</span></a></li>
          <li>
            <button id="toggleSettings" style="background: none; border: none; cursor: pointer;">
              <img src="/courses/image/settings.png" style="vertical-align: middle; width: 20px;">
              <span style="margin-left: 5px;">Settings</span>
            </button>
          </li>
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

      <form method="POST" action="{{ route('courses.update', $course->id) }}" enctype="multipart/form-data" class="add_course_form">
        @csrf
        @method('PUT')

        <label>Course Name:</label>
        <input type="text" name="course_name" placeholder="Course name" value="{{ old('course_name', $course->course_name) }}" required>

        <label>Current Course Image:</label><br>
        <img src="{{ asset('image/' . $course->image) }}" alt="Course Image" style="max-width: 200px; margin-bottom: 10px;"><br>

        <label>Change Course Image:</label>
        <input type="file" name="course_image" accept="image/*">

        <label>Description:</label>
        <textarea name="description" placeholder="Add description" rows="5" required>{{ old('description', $course->description) }}</textarea>

        <hr>

        <h3>Existing Videos</h3>
        @foreach ($course->videos as $index => $video)
          <div style="margin-bottom: 15px; border-bottom: 1px solid #ccc; padding-bottom: 10px;">
            <label>Video Title:</label>
            <input type="text" name="existing_videos[{{ $video->id }}][video_title]" value="{{ old("existing_videos.$video->id.video_title", $video->video_title) }}" required>

            <p>Current Video File: <a href="{{ asset('videos/' . $video->video_file) }}" target="_blank">{{ $video->video_file }}</a></p>

            <label>Change Video File (optional):</label>
            <input type="file" name="existing_videos[{{ $video->id }}][video_file]" accept="video/*">
          </div>
        @endforeach

        <hr>

        <h3>Add New Videos</h3>
        <div id="additional-videos"></div>
        <button type="button" id="add-video-btn">Add Another Video</button>

        <br><br>
        <button type="submit">Update Course</button>
      </form>

    </div>
  </div>

  <script>
    let videoCount = 0;
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
