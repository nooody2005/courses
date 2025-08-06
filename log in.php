<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-visual">
            <div class="visual-content">
                <img src="./image/Group1.svg" alt="Platform Logo" class="visual-logo">
                <h2 class="visual-title">Welcome to Learning</h2>
            </div>
        </div>
        <div class="login-form-container">
            <div class="form-wrapper">
                <div class="form-header">
                    <h1 class="form-title">Welcome Back</h1>
                    <p class="form-subtitle">Sign in to continue your learning journey</p>
                </div>

                <form method="POST" class="login-form">
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="Enter your email" 
                            class="form-input"
                            required 
                        />
                    </div>

                    <div class="form-group">
                        <label for="password" class="form-label">Password</label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            placeholder="Enter your password" 
                            class="form-input"
                            required 
                        />
                    </div>

                    <div class="form-options">
                        <label class="checkbox-container">
                            <input type="checkbox" name="remember" class="form-checkbox">
                            <span class="checkmark"></span>
                            Remember me
                        </label>
                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>

                    <button type="submit" class="submit-button">
                        Sign In
                    </button>
                </form>
                <div class="signup-link">
                    <p>Don't have an account? <a href="sign up.php" class="link">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
