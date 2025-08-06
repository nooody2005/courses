<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Learning Platform</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-visual">
            <div class="visual-content">
                <img src="image/Group1.svg" alt="Platform Logo" class="visual-logo">
                <h2 class="visual-title">Join Our Learning Community</h2>
            </div>
        </div>
        <div class="login-form-container">
            <div class="form-wrapper">
                <div class="form-header">
                    <h1 class="form-title">Create your account</h1>
                    <p class="form-subtitle">Learn fullstack from our top tutors!</p>
                </div>
                <form method="POST" class="login-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="fullname" class="form-label">Full Name</label>
                            <input 
                                type="text" 
                                id="fullname" 
                                name="fullname" 
                                placeholder="Enter your full name" 
                                class="form-input"
                                required 
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
                                required 
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
                            required 
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
                                required 
                            />
                        </div>
                        <div class="form-group">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input 
                                type="date" 
                                id="dob" 
                                name="dob" 
                                class="form-input"
                                required 
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
                                required 
                            />
                        </div>
                        <div class="form-group">
                            <label for="conpassword" class="form-label">Confirm Password</label>
                            <input 
                                type="password" 
                                id="conpassword" 
                                name="conpassword" 
                                placeholder="Confirm your password" 
                                class="form-input"
                                required 
                            />
                        </div>
                    </div>
                    <div class="form-options">
                        <label class="checkbox-container">
                            <input type="checkbox" name="terms" class="form-checkbox" required>
                            <span class="checkmark"></span>
                            I agree to the <a href="#" class="link">Terms and Conditions</a>
                        </label>
                    </div>
                    <button type="submit" class="submit-button">
                        Create Account
                    </button>
                </form>
                <div class="signup-link">
                    <p>Already have an account? <a href="log in.php" class="link">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
