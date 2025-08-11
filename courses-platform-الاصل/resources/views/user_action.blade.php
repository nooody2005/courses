<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Courses</title>
  <link rel="stylesheet" href="{{ asset('/courses/assets/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('/courses/assets/css/fontawesome.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('/courses/assets/css/style.css') }}">

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f4f6f9;
      margin: 0;
      padding: 0;
    }

    .table-container {
      margin: 20px;
    }

     table {
    border-collapse: collapse;
    background: #fff;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    width: 70%; /* يقلل عرض الجدول شوية عشان يبان في النص */
    margin-left: 300px;
  }

    thead {
      background: #4e73df;
      color: white;
    }

    th,
    td {
      padding: 12px 20px;
      text-align: left;
    }

    tbody tr:nth-child(even) {
      background: #f8f9fc;
    }

    tbody tr:hover {
      background: #eef1f7;
    }

    .action-btn {
      padding: 6px 12px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 14px;
      margin: 0 2px;
    }

    .edit-btn {
      background: #1cc88a;
      color: white;
    }

    .delete-btn {
      background: #e74a3b;
      color: white;
    }


    h3{
    position: absolute;
        margin-left: 550px;
        margin-top: -20px;
    }
  </style>
</head>

<body>
  <header class="header">
    <div class="container">
      <div class="logo">
        <a href="{{ route('admin_dash') }}">
          <img src="{{ asset('/courses/image/logo page.svg') }}" alt="Platform Logo" />
        </a>
        <span>Courses</span>
      </div>
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
          <li>
            <a href="" class="active main-icon">
              <i class="fa-solid fa-house"></i>
              <span>Main</span>
            </a>
          </li>
          <li>
            <button id="toggleSettings" style="background: none; border: none; cursor: pointer;">
              <img src="{{ asset('/courses/image/settings.png') }}" style="vertical-align: middle; width: 20px;">
              <span style="margin-left: 5px;">Settings</span>
            </button>
          </li>
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
      <h3>All Users</h3>
      <div class="table-container">
        <table>
          <thead>
            <tr>
              <th>Username</th>
              <th>Email</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
@foreach($users as $admin)
<tr>

    <td>{{ $admin->username }}</td>
    <td>{{ $admin->email }}</td>
    <td>  <button class="action-btn edit-btn"><i class="fa-solid fa-pen"></i></button>
                <button class="action-btn delete-btn"><i class="fa-solid fa-trash"></i></button>
</td>
</tr>
@endforeach



          </tbody>
        </table>
      </div>
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
