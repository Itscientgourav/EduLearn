<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css'); ?>">
</head>
<body>
    <div class="container">
        <div class="registration-card">
            <h2>Create an Account</h2>
            <form action="<?php echo site_url('auth/do_register'); ?>" method="post">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" required>
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="input-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" required>
                </div>
                <button type="submit" class="btn">Register</button>
                <?php if ($this->session->flashdata('error')): ?>
                    <div class="error-message"><?php echo $this->session->flashdata('error'); ?></div>
                <?php endif; ?>
            </form>
            <p>Already have an account? <a href="<?php echo site_url('/login'); ?>">Login here</a></p>
            <p>Back to <a href="<?php echo site_url('/'); ?>">Homepage</a></p>
        </div>
    </div>
</body>
</html>