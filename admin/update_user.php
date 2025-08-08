
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
<!-- //action wasn't added to the form-->
<form method="POST" action="user_action.php" enctype="multipart/form-data">
    <div class="form-row">
                        <div class="form-group">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input 
                                type="text" 
                                id="fullname" 
                                name="fullname" 
                                placeholder="Enter your full name" 
                                class="form-input"
                               
                            />
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input 
                                type="text" 
                                id="username" 
                                name="username" 
                                placeholder="Choose a username" 
                                class="form-input"
                               
                            />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="Enter your email" 
                            class="form-input"
                           
                        />
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input 
                                type="tel" 
                                id="phone" 
                                name="phone" 
                                placeholder="Enter your phone number" 
                                class="form-input"
                               
                            />
                        </div>
                        <div class="form-group">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input 
                                type="date" 
                                id="dob" 
                                name="dob" 
                                class="form-input"
                               
                            />
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select id="country" name="country" class="form-input" required>
                            <option value="" hidden>Select your country</option>
                            <option value="DZ">Algeria</option>
                            <option value="BH">Bahrain</option>
                            <option value="KM">Comoros</option>
                            <option value="DJ">Djibouti</option>
                            <option value="EG">Egypt</option>
                            <option value="IQ">Iraq</option>
                            <option value="JO">Jordan</option>
                            <option value="KW">Kuwait</option>
                            <option value="LB">Lebanon</option>
                            <option value="LY">Libya</option>
                            <option value="MR">Mauritania</option>
                            <option value="MA">Morocco</option>
                            <option value="OM">Oman</option>
                            <option value="PS">Palestine</option>
                            <option value="QA">Qatar</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="SO">Somalia</option>
                            <option value="SD">Sudan</option>
                            <option value="SY">Syria</option>
                            <option value="TN">Tunisia</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="YE">Yemen</option>
                        </select>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input 
                                type="password" 
                                id="password" 
                                name="password" 
                                placeholder="Create a password" 
                                class="form-input"
                               
                            />
                        </div>
  
  <input name="position" type="number">
  </label>
  <button type="submit">Update</button>
</form>
  </div>
</body>
</html>
