<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Online Courses</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/courseInfo.css'); ?>">
</head>

<body>
    <!-- Header remains the same -->
	<?php $this->load->view('components/header');  ?> 

    <!-- Hero Section with SVG Background -->
    <section class="course-hero">
        <div class="hero-bg">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
                <pattern id="pattern" x="0" y="0" width="10" height="10" patternUnits="userSpaceOnUse">
                    <circle cx="2" cy="2" r="1" fill="white" />
                </pattern>
                <rect x="0" y="0" width="100%" height="100%" fill="url(#pattern)" />
            </svg>
        </div>
        <div class="hero-content">
            <span class="course-category"><?= isset($courseName) ? htmlspecialchars($courseName) : 'Unknown'; ?></span>
            <h1 class="course-title">Advanced Web Development Masterclass 2024</h1>
            <div class="course-meta">
                <div class="meta-item">
                    <i class="fas fa-star"></i>
                    <span>4.9 (2,850 <?= $t['ratings']; ?>)</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span>15,420 <?= $t['students_enrolled']; ?></span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span>42 <?= $t['hours_of_content']; ?></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Cards -->
    <div class="info-cards">
        <div class="info-card">
            <i class="fas fa-video"></i>
            <h3>42</h3>
            <p><?= $t['hours_of_video']; ?></p>
        </div>
        <div class="info-card">
            <i class="fas fa-book"></i>
            <h3>75</h3>
            <p><?= $t['lessons']; ?></p>
        </div>
        <div class="info-card">
            <i class="fas fa-certificate"></i>
            <h3>Yes</h3>
            <p><?= $t['certificate']; ?></p>
        </div>
        <div class="info-card">
            <i class="fas fa-infinity"></i>
            <h3>Lifetime</h3>
            <p><?= $t['access']; ?></p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="course-content">
        <div class="main-content">
            <div class="content-section">
                <h2><?= $t['course_description']; ?></h2>
                <p>Master modern web development with this comprehensive course covering HTML5, CSS3, JavaScript, React, and more. Perfect for beginners and intermediate developers looking to upgrade their skills.</p>
            </div>

            <div class="content-section">
                <h2><?= $t['what_you_will_learn']; ?></h2>
                <ul>
                    <li>Build responsive websites using HTML5 and CSS3</li>
                    <li>Master JavaScript ES6+ and modern development practices</li>
                    <li>Create dynamic web applications with React</li>
                    <li>Implement authentication and database integration</li>
                    <li>Deploy applications to production environments</li>
                </ul>
            </div>

            <div class="curriculum-section">
                <h2><?= $t['course_curriculum']; ?></h2>
                <div class="module">
                    <div class="module-header">
                        <h3><?= $t['modules']; ?> 1: Introduction to Web Development</h3>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="module-content">
                        <div class="lesson-item">
                            <i class="fas fa-play-circle"></i>
                            <span>Getting Started with HTML</span>
                        </div>
                        <!-- Add more lessons -->
                    </div>
                </div>
                <!-- Add more modules -->
            </div>
        </div>

        <div class="course-sidebar">
            <div class="price-tag">$99.99</div>
            <a href="#" class="enroll-btn"><?= $t['enrollbtn']; ?></a>
            <div class="course-features">
                <div class="feature-item">
                    <i class="fas fa-check"></i>
                    <span><?= $t['full_lifetime_access']; ?></span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check"></i>
                    <span><?= $t['access_on_mobile_and_tv']; ?></span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check"></i>
                    <span><?= $t['certificate_of_completion']; ?></span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check"></i>
                    <span><?= $t['premium_support']; ?></span>
                </div>
            </div>
        </div>
    </div>

    	<!-- Footer remains the same -->
	<?php $this->load->view('components/footer');  ?>
	<!-- Include your JavaScript file -->
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>

    <script>
        // Module accordion functionality
        document.querySelectorAll('.module-header').forEach(header => {
            header.addEventListener('click', () => {
                const content = header.nextElementSibling;
                content.classList.toggle('active');
                const icon = header.querySelector('i');
                icon.classList.toggle('fa-chevron-down');
                icon.classList.toggle('fa-chevron-up');
            });
        });
    </script>