<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/courses/assets/css/style.css">
    <title>Upload your image</title>

</head>
<body>
    <div class="login-visual">
            <div class="visual-content">
                <img src="/courses/image/Group1.svg" alt="Platform Logo" class="visual-logo">
                <h2 class="visual-title">Welcome to Learning</h2>
            </div>
    </div>
        <div class="login-form-container">
            
         <form method="POST" class="login-form">
        <label for="image">upload your profile pic</label>
         <input type="file" name="image" id="image" required>
<!-- where the profile pic will be uploaded and displayed to the user
 before continuing-->
  <img src="" alt="profilr pic">
          <label>remove</label>
          <input type="reset">
            <button type="submit" class="submit-button">
            Sign up
            </button>
        </form>
               
     </div>
    
</body>
</html>