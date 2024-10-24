<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Join Us</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/register.css'); ?>">
</head>

<body>
    <!-- Background SVG Shapes -->
    <svg class="background-shapes" width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
        <defs>
            <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#4A90E2;stop-opacity:0.5" />
                <stop offset="100%" style="stop-color:#45B7D1;stop-opacity:0.5" />
            </linearGradient>
            <linearGradient id="grad2" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" style="stop-color:#E74C3C;stop-opacity:0.5" />
                <stop offset="100%" style="stop-color:#FF6B6B;stop-opacity:0.5" />
            </linearGradient>
        </defs>

        <!-- Animated Shape 1 -->
        <path class="shape shape1" fill="url(#grad1)" d="M20,20 Q30,0 40,20 T60,20 T80,20">
            <animateTransform
                attributeName="transform"
                type="rotate"
                from="0 50 50"
                to="360 50 50"
                dur="20s"
                repeatCount="indefinite" />
        </path>

        <!-- Animated Shape 2 -->
        <circle class="shape shape2" cx="70" cy="70" r="15" fill="url(#grad2)">
            <animate
                attributeName="r"
                values="15;20;15"
                dur="5s"
                repeatCount="indefinite" />
        </circle>

        <!-- Animated Shape 3 -->
        <rect class="shape shape3" x="20" y="60" width="20" height="20" fill="url(#grad1)">
            <animateTransform
                attributeName="transform"
                type="scale"
                values="1;1.2;1"
                dur="7s"
                repeatCount="indefinite" />
        </rect>

        <!-- Animated Shape 4 -->
        <polygon class="shape shape4" points="80,50 90,65 70,65" fill="url(#grad2)">
            <animateTransform
                attributeName="transform"
                type="rotate"
                from="0 80 60"
                to="-360 80 60"
                dur="15s"
                repeatCount="indefinite" />
        </polygon>
    </svg>

    <div class="register-container">
        <div class="register-logo">
            <h1><a href="<?php echo site_url('/'); ?>">EduLearn</a></h1>
            <p>Start Your Learning Journey</p>
            <?php if ($this->session->flashdata('error')): ?>
                <div class="error-message"><?php echo $this->session->flashdata('error'); ?></div>
            <?php endif; ?>
        </div>

        <form action="<?php echo site_url('auth/do_register'); ?>" method="post">
            <div class="form-group">
                <input type="text" id="name" placeholder="Full Name" required>
                <label for="name">Full Name</label>
            </div>

            <div class="form-group">
                <input type="email" id="email" placeholder="Email Address" required>
                <label for="email">Email Address</label>
            </div>

            <div class="form-group">
                <input type="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>

            <div class="form-group">
                <input type="password" id="confirm-password" placeholder="Confirm Password" required>
                <label for="confirm-password">Confirm Password</label>
            </div>

            <button type="submit" class="register-button">Create Account</button>

            <div class="login-link">
                Already have an account? <a href="<?php echo site_url('/login'); ?>">Log In</a>
            </div>
        </form>
    </div>
</body>

</html>