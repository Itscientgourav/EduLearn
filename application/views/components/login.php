<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body>
    <div class="container">
        <div class="login-card">
            <h2>Welcome Back</h2>
            <form action="<?php echo site_url('auth/do_login'); ?>" method="post">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <button type="submit" class="btn">Login</button>
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="error-message"><?php echo $this->session->flashdata('error'); ?></div>
                <?php endif; ?>
            </form>
            <p>You don't have an account? <a href="<?php echo site_url('/resgister'); ?>">Register here</a></p>
            <p>Back to <a href="<?php echo site_url('/'); ?>">Homepage</a></p>
        </div>
    </div>
</body>
</html>
