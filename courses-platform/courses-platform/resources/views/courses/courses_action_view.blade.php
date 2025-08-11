<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>courses</title>
  <link rel="stylesheet" href="{{ asset('/courses/assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/courses/assets/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('/courses/assets/css/style.css') }}">

  

  
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="logo">
        <a href="{{ route('home') }}">
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
              <img src="{{ asset('/courses/image/settings.png') }}" style="vertical-align: middle; width: 20px;">
              <span style="margin-left: 5px;">Settings</span>
            </button>
          </li>

          <!-- Collapsible Settings Menu -->
          <ul id="settingsMenu" style="display: none; margin-left: 25px;">
            <li><a href="#">Change Profile Picture</a></li>
            <li><a href="#">Change Password</a></li>
          </ul>

          <li><a href="{{ route('logout') }}" class="log-out">Log out</a></li>
        </ul>
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




<div class="main-content">

  

<h3 class="table-title">All Courses</h3>

<table class="courses-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Course Name</th>
            <th>Description</th>
            <th>Image</th>
            <th>Videos</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course->id }}</td>
                <td>{{ $course->course_name }}</td>
                <td>{{ $course->description ?? 'No description' }}</td>
                <td>
                    @if($course->image)
                        <img src="{{ asset('image/' . $course->image) }}" alt="Course Image" width="100">

                    @else
                        No Image
                    @endif
                </td>
             <td>
              @if($course->videos->count() > 0)
                <ul style="list-style: none; padding: 0; margin: 0;">
                  @foreach ($course->videos as $video)
                    <li style="margin-bottom: 10px;">
                      <video width="200" controls>
                        <source src="{{ asset('videos/' . $video->video_file) }}" type="video/mp4">
                      Your browser not support videos 
                      </video>
                    </li>
                  @endforeach
                </ul>
              @else
                No videos
              @endif
            </td>

                <td>
                <a href="{{ route('courses.Edit_course', $course->id) }}" class="btn btn-update">Edit course</a>
                <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display: inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-delete" onclick="return confirm('are you sure ..you want to delete ');">Delete course</button>
            </form>

              </td>

            </tr>
        @endforeach
    </tbody>
</table>

<style>
.table-title {
    text-align: center;
    margin: 20px 0;
    font-size: 22px;
    font-weight: bold;
}

.courses-table {
    width: 80%;
    margin: 0 auto 40px auto;
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    border-radius: 10px;
    overflow: hidden;
}

.courses-table th, .courses-table td {
    padding: 12px 15px;
    border: 1px solid #ddd;
    text-align: center;
}

.courses-table th {
    background-color: #f4f4f4;
    font-weight: bold;
}

.courses-table tr:hover {
    background-color: #f9f9f9;
}

.courses-table img {
    max-width: 100px;
    height: auto;
    border-radius: 5px;
}

.btn {
  padding: 6px 12px;
  text-decoration: none;
  border-radius: 5px;
  font-size: 14px;
  margin: 2px;
  display: inline-block; /* خليها inline-block بس */
  width: auto; /* أو خليها مافيش عرض محدد */
  min-width: 0; /* لو في حد أدنى */
}


.btn-update {
    background-color: #4CAF50;
    color: white;
}

.btn-delete {
    background-color: #f44336;
    color: white;
    border: none;
    cursor: pointer;
}

.btn-delete:hover, .btn-update:hover {
    opacity: 0.8;
}

.main-content {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.courses-table {
    width: 90%;
    margin-top: 20px;
}

</style>


</body>

</html>




   <div class="main-content">
      <!-- //action wasn't added to the form-->
      <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data" class="add_course_form actions-main2">
        @csrf
        <div class="actions-main">
          <a href="{{ route('courses.add_course') }}">add course</a>

        </div>
      </form>
    </div>
  </div>
















  