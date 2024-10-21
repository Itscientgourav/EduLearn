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
			--card-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
		}

		body {
			background-color: var(--background-color);
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
		.hero {
			margin-top: 80px;
			background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
			padding: 4rem 1rem;
			text-align: center;
			color: white;
		}

		.hero h1 {
			font-size: 2.5rem;
			margin-bottom: 1rem;
		}

		.hero p {
			font-size: 1.2rem;
			margin-bottom: 2rem;
		}

		 /* Course Section Styles */
         .course-section {
            max-width: 1400px;
            margin: 3rem auto;
            padding: 0 1rem;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            padding: 0 1rem;
        }

        .section-title {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .section-title h2 {
            color: var(--secondary-color);
            font-size: 1.8rem;
        }

        .section-icon {
            width: 40px;
            height: 40px;
            background: var(--primary-color);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .view-all {
            color: var(--primary-color);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 500;
            transition: all 0.3s;
        }

        .view-all:hover {
            gap: 0.8rem;
        }

        .scroll-buttons {
            display: flex;
            gap: 1rem;
        }

        .scroll-btn {
            background-color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s;
        }

        .scroll-btn:hover {
            transform: scale(1.1);
        }

        .controls {
            display: flex;
            gap: 2rem;
            align-items: center;
        }

        .filter-section {
            max-width: 1200px;
            margin: -50px auto 30px;
            padding: 20px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .search-container {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .search-box {
            flex: 1;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 12px 45px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
            transition: all 0.3s;
        }

        .search-input:focus {
            border-color: #818cf8;
            box-shadow: 0 0 0 3px rgba(129, 140, 248, 0.1);
        }

        .search-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #6b7280;
        }

        .filter-toggle {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
        }

        .filter-toggle:hover {
            background: #f9fafb;
        }

        .categories {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }

        .category-pill {
            padding: 8px 20px;
            border-radius: 50px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            background: #f3f4f6;
            color: #4b5563;
        }

        .category-pill.active {
            background: linear-gradient(135deg, #818cf8 0%, #8b5cf6 100%);
            color: white;
            box-shadow: 0 2px 4px rgba(139, 92, 246, 0.2);
        }

        .expanded-filters {
            display: none;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
        }

        .expanded-filters.show {
            display: grid;
        }

        .filter-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .filter-group label {
            font-size: 14px;
            font-weight: 500;
            color: #374151;
        }

        .filter-group select {
            padding: 8px 12px;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            outline: none;
            transition: all 0.3s;
        }

        .filter-group select:focus {
            border-color: #818cf8;
            box-shadow: 0 0 0 3px rgba(129, 140, 248, 0.1);
        }

        .course-container {
            position: relative;
            overflow: hidden;
            padding: 1rem;
        }

        .course-grid {
            display: flex;
            gap: 2rem;
            overflow-x: auto;
            scroll-behavior: smooth;
            padding: 1rem;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .course-grid::-webkit-scrollbar {
            display: none;
        }

        .course-card {
            flex: 0 0 calc(25% - 1.5rem);
            min-width: 300px;
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: var(--card-shadow);
            transition: transform 0.3s;
            position: relative;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .course-image {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .course-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .course-card:hover .course-image img {
            transform: scale(1.1);
        }

        .course-tag {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: var(--accent-color);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 20px;
            font-size: 0.8rem;
        }

        .course-content {
            padding: 1.5rem;
        }

        .course-content h3 {
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
            font-size: 1.2rem;
        }

        .course-stats {
            display: flex;
            gap: 1rem;
            margin: 1rem 0;
            color: #666;
            font-size: 0.9rem;
        }

        .course-stat {
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .price-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }

        .price {
            font-size: 1.25rem;
            color: var(--primary-color);
            font-weight: bold;
        }

        .btn {
            display: inline-block;
            padding: 0.8rem 1.5rem;
            background-color: var(--primary-color);
            color: white;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn a {
            color: var(--text-color);
            text-decoration: none;
        }

        .btn:hover {
            background-color: #357ABD;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(74, 144, 226, 0.3);
        }

        /* Section-specific colors */
        .popular .section-icon {
            background-color: #E74C3C;
        }

        .ai-ml .section-icon {
            background-color: #9B59B6;
        }

        .web-dev .section-icon {
            background-color: #2ECC71;
        }

        .devops .section-icon {
            background-color: #F1C40F;
        }

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
            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
            .controls {
                width: 100%;
                justify-content: space-between;
            }
        }

        @media (max-width: 576px) {
            .course-card {
                flex: 0 0 calc(100% - 1rem);
            }
            .section-title h2 {
                font-size: 1.5rem;
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
				<li><a href="<?php echo site_url('courses'); ?>">Courses</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<div class="mobile-menu">
				<i class="fas fa-bars"></i>
			</div>
		</nav>
	</header>

	<!-- Hero section remains the same -->
	<section class="hero">
		<h1>Transform Your Future with Online Learning</h1>
		<p>Access quality education from anywhere in the world</p>
		<a href="#courses" class="btn">Explore Courses</a>
	</section>

    <div class="filter-section">
        <div class="search-container">
            <div class="search-box">
                <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" class="search-input" placeholder="What do you want to learn?">
            </div>
            <button class="filter-toggle">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="4" y1="21" x2="4" y2="14"></line>
                    <line x1="4" y1="10" x2="4" y2="3"></line>
                    <line x1="12" y1="21" x2="12" y2="12"></line>
                    <line x1="12" y1="8" x2="12" y2="3"></line>
                    <line x1="20" y1="21" x2="20" y2="16"></line>
                    <line x1="20" y1="12" x2="20" y2="3"></line>
                    <line x1="1" y1="14" x2="7" y2="14"></line>
                    <line x1="9" y1="8" x2="15" y2="8"></line>
                    <line x1="17" y1="16" x2="23" y2="16"></line>
                </svg>
                Filters
            </button>
        </div>

        <div class="categories">
            <button class="category-pill active">All</button>
            <button class="category-pill">Programming</button>
            <button class="category-pill">Design</button>
            <button class="category-pill">Business</button>
            <button class="category-pill">Marketing</button>
            <button class="category-pill">Personal Development</button>
        </div>

        <div class="expanded-filters">
            <div class="filter-group">
                <label>Level</label>
                <select>
                    <option>All Levels</option>
                    <option>Beginner</option>
                    <option>Intermediate</option>
                    <option>Advanced</option>
                </select>
            </div>
            <div class="filter-group">
                <label>Duration</label>
                <select>
                    <option>Any Duration</option>
                    <option>0-2 Hours</option>
                    <option>2-5 Hours</option>
                    <option>5+ Hours</option>
                </select>
            </div>
            <div class="filter-group">
                <label>Price</label>
                <select>
                    <option>All Prices</option>
                    <option>Free</option>
                    <option>Paid</option>
                </select>
            </div>
        </div>
    </div>

	<!-- Enhanced Courses Section -->
	<section class="course-section popular">
		<div class="section-header">
			<div class="section-title">
				<div class="section-icon">
					<i class="fas fa-star"></i>
				</div>
				<h2>Popular Courses</h2>
			</div>
			<div class="controls">
				<a href="#" class="view-all">
					View All Courses <i class="fas fa-arrow-right"></i>
				</a>
				<div class="scroll-buttons">
					<button class="scroll-btn scroll-left-popular">
						<i class="fas fa-chevron-left"></i>
					</button>
					<button class="scroll-btn scroll-right-popular">
						<i class="fas fa-chevron-right"></i>
					</button>
				</div>
			</div>
		</div>
		<div class="course-container">
			<div class="course-grid" id="popular-grid">
				<!-- Popular Course Cards -->
				<!-- Card 1 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera-course-photos/fc/c1b8dfbac740999b6256aca490de43/Python-Image.jpg?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&fit=crop&q=50" alt="Python Programming">
						<span class="course-tag">Bestseller</span>
					</div>
					<div class="course-content">
						<h3>Python Programming Masterclass</h3>
						<p>Complete Python bootcamp from zero to hero</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 2.5k Students
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.9
							</span>
						</div>
						<div class="price-row">
							<span class="price">$89.99</span>
							<button class="btn"><a href="<?php echo site_url('specializations/SocialScience'); ?>">Enroll Now</a></button>
						</div>
					</div>
				</div>
				<!-- Add more popular course cards here -->
			</div>
		</div>
	</section>

	<!-- AI & Machine Learning Section -->
	<section class="course-section ai-ml">
		<div class="section-header">
			<div class="section-title">
				<div class="section-icon">
					<i class="fas fa-brain"></i>
				</div>
				<h2>AI & Machine Learning</h2>
			</div>
			<div class="controls">
				<a href="#" class="view-all">
					View All AI Courses <i class="fas fa-arrow-right"></i>
				</a>
				<div class="scroll-buttons">
					<button class="scroll-btn scroll-left-ai">
						<i class="fas fa-chevron-left"></i>
					</button>
					<button class="scroll-btn scroll-right-ai">
						<i class="fas fa-chevron-right"></i>
					</button>
				</div>
			</div>
		</div>
		<div class="course-container">
			<div class="course-grid" id="ai-grid">
				<!-- AI Course Cards -->
				<!-- Card 1 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera-course-photos/0f/b90b206eb511e6a1c0d77b7ec6029c/machine_design_coursera_icon.jpg?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&fit=crop&q=50" alt="Machine Learning">
						<span class="course-tag">Hot</span>
					</div>
					<div class="course-content">
						<h3>Machine Learning A-Z</h3>
						<p>Complete guide to machine learning & AI</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 1.8k Students
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.8
							</span>
						</div>
						<div class="price-row">
							<span class="price">$129.99</span>
							<button class="btn"><a href="<?php echo site_url('specializations/Math'); ?>">Enroll Now</a></button>
						</div>
					</div>
				</div>
				<!-- Add more AI course cards here -->
			</div>
		</div>
	</section>

	<!-- Web Development Section -->
	<section class="course-section web-dev">
		<!-- Similar structure as above with web development courses -->
	</section>

	<!-- DevOps Section -->
	<section class="course-section devops">
		<!-- Similar structure as above with DevOps courses -->
	</section>


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
		// Mobile menu functionality
		const mobileMenu = document.querySelector('.mobile-menu');
		const navMenu = document.querySelector('.nav-menu');

		mobileMenu.addEventListener('click', () => {
			navMenu.classList.toggle('active');
		});

		  // Function to create scroll functionality for a section
          function initializeScroll(sectionId, leftBtnClass, rightBtnClass) {
            const container = document.getElementById(sectionId);
            const leftBtn = document.querySelector(`.${leftBtnClass}`);
            const rightBtn = document.querySelector(`.${rightBtnClass}`);
            const scrollAmount = 400;

            leftBtn.addEventListener('click', () => {
                container.scrollBy({
                    left: -scrollAmount,
                    behavior: 'smooth'
                });
            });

            rightBtn.addEventListener('click', () => {
                container.scrollBy({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            });

            // Update scroll buttons visibility
            const updateScrollButtons = () => {
                const { scrollLeft, scrollWidth, clientWidth } = container;
                leftBtn.style.opacity = scrollLeft > 0 ? '1' : '0.5';
                rightBtn.style.opacity = scrollLeft < (scrollWidth - clientWidth) ? '1' : '0.5';
            };

            container.addEventListener('scroll', updateScrollButtons);
            window.addEventListener('resize', updateScrollButtons);
            updateScrollButtons();
        }

        // Initialize scroll for each section
        initializeScroll('popular-grid', 'scroll-left-popular', 'scroll-right-popular');
        initializeScroll('ai-grid', 'scroll-left-ai', 'scroll-right-ai');
        // Initialize for web-dev and devops sections similarly

        // Add animation on scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.course-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.5s ease-out';
            observer.observe(card);
        });

                // Toggle expanded filters
                const filterToggle = document.querySelector('.filter-toggle');
        const expandedFilters = document.querySelector('.expanded-filters');

        filterToggle.addEventListener('click', () => {
            expandedFilters.classList.toggle('show');
        });

        // Category pills functionality
        const categoryPills = document.querySelectorAll('.category-pill');
        
        categoryPills.forEach(pill => {
            pill.addEventListener('click', () => {
                // Remove active class from all pills
                categoryPills.forEach(p => p.classList.remove('active'));
                // Add active class to clicked pill
                pill.classList.add('active');
            });
        });

        // Search input functionality
        const searchInput = document.querySelector('.search-input');
        
        searchInput.addEventListener('input', (e) => {
            const searchTerm = e.target.value.toLowerCase();
            // Add your search logic here
            console.log('Searching for:', searchTerm);
        });
	</script>