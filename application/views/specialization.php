<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Online Courses</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary-color: #4A90E2;
            --secondary-color: #2C3E50;
            --accent-color: #E74C3C;
            --background-color: #f8f9fa;
            --success-color: #2ECC71;
            --text-color: #333;
            --light-text: #666;
            --card-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
        }

        /* Header Styles */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
        }

        .nav-menu {
            display: flex;
            gap: 2rem;
            list-style: none;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--secondary-color);
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: var(--primary-color);
        }

        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
        }

        /* Hero Section */
        .course-hero {
            position: relative;
            background: linear-gradient(135deg, #4A90E2 0%, #357ABD 100%);
            padding: 6rem 0 8rem;
            overflow: hidden;
        }

        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0.1;
        }

        .hero-content {
            position: relative;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            color: white;
        }

        .course-category {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 20px;
            margin-bottom: 1rem;
        }

        .course-title {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .course-meta {
            display: flex;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        /* Course Info Cards */
        .info-cards {
            max-width: 1200px;
            margin: -4rem auto 0;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .info-card {
            background: white;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: var(--card-shadow);
            text-align: center;
            z-index: 1;
        }

        .info-card i {
            font-size: 2rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .info-card h3 {
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

        .info-card p {
            color: var(--light-text);
        }

        /* Course Content */
        .course-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 3rem;
        }

        .main-content {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: var(--card-shadow);
        }

        .content-section {
            margin-bottom: 2rem;
        }

        .content-section h2 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--primary-color);
        }

        .content-section ul {
            list-style: none;
            margin-left: 1rem;
        }

        .content-section li {
            margin-bottom: 0.5rem;
            position: relative;
            padding-left: 1.5rem;
        }

        .content-section li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: var(--success-color);
        }

        /* Sidebar */
        .course-sidebar {
            position: sticky;
            top: 2rem;
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: var(--card-shadow);
            height: fit-content;
        }

        .price-tag {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .enroll-btn {
            display: block;
            width: 100%;
            padding: 1rem;
            background: var(--primary-color);
            color: white;
            text-align: center;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 1.5rem;
            transition: all 0.3s;
        }

        .enroll-btn:hover {
            background: #357ABD;
            transform: translateY(-2px);
        }

        .course-features {
            margin-bottom: 1.5rem;
        }

        .feature-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.8rem;
            color: var(--light-text);
        }

        /* Course Curriculum */
        .curriculum-section {
            margin-top: 2rem;
        }

        .module {
            border: 1px solid #eee;
            border-radius: 5px;
            margin-bottom: 1rem;
        }

        .module-header {
            padding: 1rem;
            background: #f8f9fa;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .module-content {
            padding: 1rem;
            display: none;
        }

        .module-content.active {
            display: block;
        }

        .lesson-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 0;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .info-cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .course-content {
                grid-template-columns: 1fr;
            }

            .course-sidebar {
                position: static;
            }
        }

        @media (max-width: 768px) {
            .course-title {
                font-size: 2rem;
            }

            .course-meta {
                flex-direction: column;
                gap: 1rem;
            }

            .info-cards {
                grid-template-columns: 1fr;
            }
        }

        footer {
            background-color: #1a1a1a;
            color: #ffffff;
            padding: 4rem 0 0 0;
        }

        .footer-container {
            max-width: 1400px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 4rem;
            margin-bottom: 3rem;
        }

        .footer-section h3 {
            color: var(--primary-color);
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .footer-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 40px;
            height: 2px;
            background-color: var(--primary-color);
        }

        .footer-section p {
            line-height: 1.6;
            color: #a0a0a0;
            margin-bottom: 1.5rem;
        }

        .social-links {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-links a {
            background-color: rgba(255, 255, 255, 0.1);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: var(--primary-color);
            transform: translateY(-3px);
        }

        .footer-links li {
            margin-bottom: 1rem;
        }

        .footer-links a {
            color: #a0a0a0;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary-color);
        }

        .contact-info li {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
            color: #a0a0a0;
        }

        .contact-info i {
            color: var(--primary-color);
        }

        .newsletter-form {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .newsletter-form input {
            flex: 1;
            padding: 0.8rem;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 5px;
            color: white;
        }

        .newsletter-form button {
            padding: 0.8rem 1.5rem;
            background-color: var(--primary-color);
            border: none;
            border-radius: 5px;
            color: white;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter-form button:hover {
            background-color: #357ABD;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding: 1.5rem 0;
            text-align: center;
            color: #a0a0a0;
        }

        @media (max-width: 992px) {
            .footer-content {
                grid-template-columns: 1fr 1fr;
                gap: 2rem;
            }
        }

        @media (max-width: 576px) {
            .footer-content {
                grid-template-columns: 1fr;
            }

            .newsletter-form {
                flex-direction: column;
            }
        }

        /* Rest of the styles remain the same */

        /* Responsive Design */
        @media (max-width: 1200px) {
            .course-card {
                flex: 0 0 calc(33.333% - 1.5rem);
            }
        }

        @media (max-width: 992px) {
            .course-card {
                flex: 0 0 calc(50% - 1.5rem);
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: white;
                flex-direction: column;
                padding: 1rem;
                text-align: center;
                box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            }

            .nav-menu.active {
                display: flex;
            }

            .mobile-menu {
                display: block;
            }

            .course-card {
                flex: 0 0 calc(100% - 1rem);
            }
        }
    </style>
</head>

<body>
    <!-- Header remains the same -->
    <header>
        <nav class="nav-container">
            <div class="logo">EduLearn</div>
            <ul class="nav-menu">
                <li><a href="<?php echo site_url('/'); ?>">Home</a></li>
                <li><a href="<?php echo site_url('welcome/courses'); ?>">Courses</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="mobile-menu">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>

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
                    <span>4.9 (2,850 ratings)</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-users"></i>
                    <span>15,420 students enrolled</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span>42 hours of content</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Info Cards -->
    <div class="info-cards">
        <div class="info-card">
            <i class="fas fa-video"></i>
            <h3>42</h3>
            <p>Hours of Video</p>
        </div>
        <div class="info-card">
            <i class="fas fa-book"></i>
            <h3>75</h3>
            <p>Lessons</p>
        </div>
        <div class="info-card">
            <i class="fas fa-certificate"></i>
            <h3>Yes</h3>
            <p>Certificate</p>
        </div>
        <div class="info-card">
            <i class="fas fa-infinity"></i>
            <h3>Lifetime</h3>
            <p>Access</p>
        </div>
    </div>

    <!-- Main Content -->
    <div class="course-content">
        <div class="main-content">
            <div class="content-section">
                <h2>Course Description</h2>
                <p>Master modern web development with this comprehensive course covering HTML5, CSS3, JavaScript, React, and more. Perfect for beginners and intermediate developers looking to upgrade their skills.</p>
            </div>

            <div class="content-section">
                <h2>What You'll Learn</h2>
                <ul>
                    <li>Build responsive websites using HTML5 and CSS3</li>
                    <li>Master JavaScript ES6+ and modern development practices</li>
                    <li>Create dynamic web applications with React</li>
                    <li>Implement authentication and database integration</li>
                    <li>Deploy applications to production environments</li>
                </ul>
            </div>

            <div class="curriculum-section">
                <h2>Course Curriculum</h2>
                <div class="module">
                    <div class="module-header">
                        <h3>Module 1: Introduction to Web Development</h3>
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
            <a href="#" class="enroll-btn">Enroll Now</a>
            <div class="course-features">
                <div class="feature-item">
                    <i class="fas fa-check"></i>
                    <span>Full lifetime access</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check"></i>
                    <span>Access on mobile and TV</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check"></i>
                    <span>Certificate of completion</span>
                </div>
                <div class="feature-item">
                    <i class="fas fa-check"></i>
                    <span>Premium support</span>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About EduLearn</h3>
                    <p>EduLearn is a leading online learning platform dedicated to helping students achieve their goals through high-quality courses and expert instructors.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>

                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#courses">All Courses</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#instructors">Instructors</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <ul class="contact-info">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            123 Learning St, Education City
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            (555) 123-4567
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            info@edulearn.com
                        </li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Newsletter</h3>
                    <p>Subscribe to our newsletter for updates and special offers.</p>
                    <form class="newsletter-form" id="newsletter-form">
                        <input type="email" placeholder="Enter your email" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 EduLearn. All rights reserved.</p>
        </div>
    </footer>


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