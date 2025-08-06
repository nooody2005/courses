<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <!-- style-> width was used here -->
   <div class="logo">
        <div class="image">
            <a href=""><img src="/courses/image/Group.svg" alt="logo" /></a>
        </div>
    </div>
    <nav>
        <a href="/courses/login in.php">log in</a>
        <a href="/courses/sign up.php">sign up</a>
        <a href="#courses">courses</a>
    </nav>
     
    <div id="courses" class="course_section">
        <h2>Discover our courses</h2>
        <!-- css -->
         <!-- add here validation for every enroll to make sure the user is signed in if they are normalizer_get_raw_decomposition
         display the other page clled signed up.php first -->
        <div class="card">
      <img src="/courses/image/css.jpg" style="width:50px" alt="CSS">
      <div class="card-body">
        <div class="card-title">CSS</div>
        <div class="card-text">Learn how to style beautiful, responsive websites by joining this class and mastering CSS.</div>
        <a href="#" class="enroll-btn">Enroll</a>
      </div>
    </div>

    <!-- HTML Course -->
    <div class="card">
      <img src="/courses/image/html.jpg" style="width:50px" alt="HTML">
      <div class="card-body">
        <div class="card-title">HTML</div>
        <div class="card-text">Discover the structure of the web. Join this class to build your foundation with HTML.</div>
        <a href="#" class="enroll-btn">Enroll</a>
      </div>
    </div>

    <!-- JavaScript Course -->
    <div class="card">
      <img src="https://source.unsplash.com/featured/?javascript" alt="JavaScript">
      <div class="card-body">
        <div class="card-title">JavaScript</div>
        <div class="card-text">Bring your websites to life. Join this class to master dynamic web interactions with JS.</div>
        <a href="#" class="enroll-btn">Enroll</a>
      </div>
    </div>

    <!-- PHP Course -->
    <div class="card">
      <img src="/courses/image/php.jpg" style="width:50px" alt="PHP">
      <div class="card-body">
        <div class="card-title">PHP</div>
        <div class="card-text">Learn how to build powerful server-side applications by joining our PHP course today.</div>
        <a href="#" class="enroll-btn">Enroll</a>
      </div>
    </div>

    <!-- Laravel Course -->
    <div class="card">
      <img src="/courses/image/css.jpg" style="width:50px" alt="Laravel">
      <div class="card-body">
        <div class="card-title">Laravel</div>
        <div class="card-text">Master modern PHP development with Laravel. Join this class to level up your skills.</div>
        <a href="#" class="enroll-btn">Enroll</a>
      </div>
    </div>
<div class="side_bar">
    <div class="user_image">


    </div>
  <a href="#"><img class="menu-item collapsible" src="/courses/image/side_bar.jpg" alt="side bar"></a>

  <div class="submenu">
    <a href="#">Change Profile Picture</a>
    <a href="#">Change Password</a>
    <a href="#">Change Username</a>
    <a href="#">Delete Account</a>
    <a class="menu-item delete" href="learning.php">My learning journey</a>
    <a href="logout.php">log out</a>
  </div>
</div>
<!--collaspe menue -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
  const collapsible = document.querySelector(".collapsible");
  const submenu = document.querySelector(".submenu");

  collapsible.addEventListener("click", () => {
    submenu.style.display = submenu.style.display === "block" ? "none" : "block";
    collapsible.textContent = submenu.style.display === "block" ? "Settings " : "Settings ";
  });
});
</script>
<!--collaspe menue -->
</div>
    <footer>
    
    <div class="footor_logo">
      <img src="/courses/image/group.svg" style= "width:100px" alt="Logo" />
    </div>

    <div class="quick_links">
      <h4>Quick Links</h4>
      <a href="#">About Us</a>
      <a href="#">Contact</a>
      <a href="#">Privacy Policy</a>
      <a href="#">Help</a>
    </div>

    <div class=" contact">
      <h4>Contact</h4>
      <div id="email">
         <img src="/courses/image/email.jpg" style= "width:100px" alt="" />
         <p>Email: coursera@gamil.com</p>
      </div>

     <div id="phone">
        <img src="/courses/image/phone.jpg" style= "width:100px" alt="" />
          <p>Phone: +20 123 456 789</p>
      </div>

       <div id="address">  
        <img src="/courses/image/address.jpg" style= "width:100px" alt="" />
        <p>Address: Cairo, Egypt</p>
      </div>
      
    </div>

  <div class="footer-bottom">
    <p>&copy; 2025 coursera. All rights reserved.</p>
  </div>
  <div>
    <h3> Our sponsor</h3>
    <a href="https://iti.gov.eg/home">
        <img src="/courses/image/ColoredLogo.svg">
    </a>
  </div>
</footer>
</body>
</html>