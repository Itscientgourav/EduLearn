<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Reset Password</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/forgot.css'); ?>">
</head>
<body>
    <div class="decoration">
        <svg class="blob blob-1" viewBox="0 0 200 200">
            <path d="M44.7,-76.4C58.8,-69.2,71.8,-59.1,79.6,-45.8C87.4,-32.6,90,-16.3,89.4,-0.3C88.8,15.7,85,31.3,76.8,44.3C68.7,57.3,56.2,67.6,42.2,74.6C28.2,81.6,14.1,85.3,-0.7,86.5C-15.5,87.7,-31,86.4,-45.6,80.3C-60.1,74.2,-73.7,63.3,-81.9,49.2C-90.1,35,-92.9,17.5,-91.4,0.9C-89.9,-15.7,-84,-31.5,-75.2,-45.1C-66.4,-58.7,-54.6,-70.2,-40.9,-77.5C-27.1,-84.8,-13.6,-87.9,1,-89.5C15.6,-91.1,31.2,-88.3,44.7,-76.4Z" transform="translate(100 100)" />
        </svg>
        <svg class="blob blob-2" viewBox="0 0 200 200">
            <path d="M47.7,-73.2C62.9,-66.7,77,-56.1,84.9,-41.8C92.8,-27.4,94.5,-9.2,91.1,7.5C87.7,24.2,79.1,39.5,67.8,51.5C56.4,63.5,42.3,72.2,27,77.8C11.7,83.4,-4.9,85.8,-21.1,82.6C-37.3,79.4,-53.2,70.6,-65.8,58C-78.3,45.4,-87.5,29,-90.2,11.3C-92.9,-6.4,-89.1,-25.5,-79.8,-40.7C-70.5,-55.9,-55.7,-67.2,-40.4,-73.8C-25.1,-80.3,-9.3,-82.1,3.9,-78.1C17.1,-74.1,34.2,-64.3,47.7,-73.2Z" transform="translate(100 100)" />
        </svg>
    </div>

    <div class="reset-container">
        <div class="logo"><a href="<?php echo site_url('/'); ?>">EduLearn</a></div>
        <div class="header-text">
            <h1>Forgot Your Password?</h1>
            <p>Don't worry! It happens to the best of us. Enter your email address below and we'll help you reset your password.</p>
        </div>

        <div class="tips-section">
            <h2>📝 Important Information</h2>
            <ul>
                <li>Make sure to enter the email address associated with your account</li>
                <li>Check your spam folder if you don't see the reset email</li>
                <li>Reset link will expire in 24 hours for security</li>
                <li>Contact support if you need additional assistance</li>
            </ul>
        </div>

        <form>
            <div class="form-group">
                <input type="email" id="email" required>
                <label for="email">Email Address</label>
            </div>
            <button type="submit" class="btn-reset">Send Reset Link</button>
        </form>

        <div class="back-to-login">
            <a href="<?php echo site_url('/login'); ?>">← Back to Login</a>
        </div>
    </div>
</body>
</html>