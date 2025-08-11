<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Learning Platform</title>
    {{-- 1. Corrected CSS Path --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-visual">
            <div class="visual-content">
                <img src="{{ asset('image/Group1.svg') }}" alt="Platform Logo" class="visual-logo">
                <h2 class="visual-title">Join Our Learning Community</h2>
            </div>
        </div>
        <div class="login-form-container">
            <div class="form-wrapper">
                <div class="form-header">
                    <h1 class="form-title">Create your account</h1>
                    <p class="form-subtitle">Learn fullstack from our top tutors!</p>
                </div>
                
                {{-- 2. Updated Form Action and CSRF Token --}}
                <form method="POST" class="login-form" action="{{ route('register') }}">
                    @csrf

                    <div class="form-row">
                        <div class="form-group">
                            {{-- 3. Corrected Input Name --}}
                            <label for="full_name" class="form-label">Full Name</label>
                            <input type="text" id="full_name" name="full_name" placeholder="Enter your full name" class="form-input" required autofocus />
                            @error('full_name') <span class="error-message">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" id="username" name="username" placeholder="Choose a username" class="form-input" required />
                             @error('username') <span class="error-message">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" class="form-input" required />
                        @error('email') <span class="error-message">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" class="form-input" required />
                             @error('phone') <span class="error-message">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="date_of_birth" class="form-label">Date of Birth</label>
                            <input type="date" id="date_of_birth" name="date_of_birth" class="form-input" required />
                             @error('date_of_birth') <span class="error-message">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="country" class="form-label">Country</label>
                        <select id="country" name="country" class="form-input" required>
                            <option value="" hidden>Select your country</option>
                            <option value="EG">Egypt</option>
                            {{-- Add other countries as needed --}}
                        </select>
                         @error('country') <span class="error-message">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" id="password" name="password" placeholder="Create a password" class="form-input" required />
                            @error('password') <span class="error-message">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            {{-- 3. Corrected Input Name for Confirmation --}}
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" class="form-input" required />
                        </div>
                    </div>

                    <button type="submit" class="submit-button">
                        Create Account
                    </button>
                </form>

                <div class="signup-link">
                    {{-- 4. Updated Login Link --}}
                    <p>Already have an account? <a href="{{ route('login') }}" class="link">Log in</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>