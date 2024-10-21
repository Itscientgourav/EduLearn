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

		/* Enhanced Course Section */
		.courses {
			max-width: 1400px;
			margin: 4rem auto;
			padding: 0 1rem;
		}

		.courses-header {
			display: flex;
			justify-content: space-between;
			align-items: center;
			margin-bottom: 2rem;
			padding: 0 1rem;
		}

		.courses-header h2 {
			color: var(--secondary-color);
			font-size: 2rem;
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
			/* Firefox */
			-ms-overflow-style: none;
			/* IE and Edge */
		}

		.course-grid::-webkit-scrollbar {
			display: none;
			/* Chrome, Safari, Opera */
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

		.btn:hover {
			background-color: #357ABD;
			transform: translateY(-2px);
			box-shadow: 0 5px 15px rgba(74, 144, 226, 0.3);
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

	<!-- Enhanced Courses Section -->
	<section class="courses" id="courses">
		<div class="courses-header">
			<h2>Popular Courses</h2>
			<div class="scroll-buttons">
				<button class="scroll-btn scroll-left">
					<i class="fas fa-chevron-left"></i>
				</button>
				<button class="scroll-btn scroll-right">
					<i class="fas fa-chevron-right"></i>
				</button>
			</div>
		</div>
		<div class="course-container">
			<div class="course-grid">
				<!-- Course Card 1 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera-course-photos/31/1a5cdc77aa4e32bcbad9cd4fd1dc84/Screen-Shot-2023-02-17-at-10.42.25-AM.png?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&q=50&fit=crop" alt="Web Development Course">
						<span class="course-tag">Bestseller</span>
					</div>
					<div class="course-content">
						<h3>Web Development Masterclass</h3>
						<p>Learn modern web development with HTML, CSS, and JavaScript</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 1.2k Students
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.8
							</span>
						</div>
						<div class="price-row">
							<span class="price">$99.99</span>
							<button class="btn">Enroll Now</button>
						</div>
					</div>
				</div>

				<!-- Course Card 2 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/collections/product-images/applied-data-science.jpeg?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&fit=crop&q=50" alt="Data Science Course">
						<span class="course-tag">Hot</span>
					</div>
					<div class="course-content">
						<h3>Data Science Fundamentals</h3>
						<p>Master data analysis and machine learning basics</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 950 Students
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.9
							</span>
						</div>
						<div class="price-row">
							<span class="price">$149.99</span>
							<button class="btn">Enroll Now</button>
						</div>
					</div>
				</div>

				<!-- Course Card 3 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://d15cw65ipctsrr.cloudfront.net/55/3d79d0624d4c2ea0f3deb1e39e0593/DMI-Logo_1200x1200.png?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&q=50&fit=crop" alt="Digital Marketing Course">
						<span class="course-tag">New</span>
					</div>
					<div class="course-content">
						<h3>Digital Marketing Pro</h3>
						<p>Learn to create effective marketing strategies</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 750 Students
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.7
							</span>
						</div>
						<div class="price-row">
							<span class="price">$79.99</span>
							<button class="btn">Enroll Now</button>
						</div>
					</div>
				</div>

				<!-- Course Card 4 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera-course-photos/e6/8f0440758611e8bbc5cde522cfff09/visual_logo_03c.jpg?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&q=50&fit=crop" alt="UI/UX Design Course">
						<span class="course-tag">Popular</span>
					</div>
					<div class="course-content">
						<h3>UI/UX Design Essential</h3>
						<p>Create beautiful and functional user interfaces</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 850 Students
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.8
							</span>
						</div>
						<div class="price-row">
							<span class="price">$129.99</span>
							<button class="btn">Enroll Now</button>
						</div>
					</div>
				</div>

				<!-- Course Card 5 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera-course-photos/e6/8f0440758611e8bbc5cde522cfff09/visual_logo_03c.jpg?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&q=50&fit=crop" alt="UI/UX Design Course">
						<span class="course-tag">Popular</span>
					</div>
					<div class="course-content">
						<h3>UI/UX Design Essential</h3>
						<p>Create beautiful and functional user interfaces</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 850 Students
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.8
							</span>
						</div>
						<div class="price-row">
							<span class="price">$129.99</span>
							<button class="btn">Enroll Now</button>
						</div>
					</div>
				</div>

				<!-- Course Card 5 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera-course-photos/e6/8f0440758611e8bbc5cde522cfff09/visual_logo_03c.jpg?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&q=50&fit=crop" alt="UI/UX Design Course">
						<span class="course-tag">Popular</span>
					</div>
					<div class="course-content">
						<h3>UI/UX Design Essential</h3>
						<p>Create beautiful and functional user interfaces</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 850 Students
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.8
							</span>
						</div>
						<div class="price-row">
							<span class="price">$129.99</span>
							<button class="btn">Enroll Now</button>
						</div>
					</div>
				</div>

				<!-- Additional cards (5-8) with the same structure -->
				<!-- Copy and paste cards 1-4 here and modify content -->
			</div>
		</div>
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

		// Horizontal scroll functionality for course cards
		const scrollContainer = document.querySelector('.course-grid');
		const scrollLeftBtn = document.querySelector('.scroll-left');
		const scrollRightBtn = document.querySelector('.scroll-right');
		const scrollAmount = 400; // Adjust scroll amount as needed

		scrollLeftBtn.addEventListener('click', () => {
			scrollContainer.scrollBy({
				left: -scrollAmount,
				behavior: 'smooth'
			});
		});

		scrollRightBtn.addEventListener('click', () => {
			scrollContainer.scrollBy({
				left: scrollAmount,
				behavior: 'smooth'
			});
		});

		// Update scroll buttons visibility
		const updateScrollButtons = () => {
			const {
				scrollLeft,
				scrollWidth,
				clientWidth
			} = scrollContainer;
			scrollLeftBtn.style.opacity = scrollLeft > 0 ? '1' : '0.5';
			scrollRightBtn.style.opacity = scrollLeft < (scrollWidth - clientWidth) ? '1' : '0.5';
		};

		scrollContainer.addEventListener('scroll', updateScrollButtons);
		window.addEventListener('resize', updateScrollButtons);
		updateScrollButtons();

		// Newsletter form submission
		const newsletterForm = document.getElementById('newsletter-form');
		newsletterForm.addEventListener('submit', (e) => {
			e.preventDefault();
			const email = e.target.querySelector('input[type="email"]').value;

			// Show success message
			const button = e.target.querySelector('button');
			const originalText = button.textContent;
			button.textContent = 'Subscribed!';
			button.style.backgroundColor = '#28a745';

			// Reset form and button after delay
			setTimeout(() => {
				e.target.reset();
				button.textContent = originalText;
				button.style.backgroundColor = '';
			}, 2000);
		});

		// Smooth scroll for navigation links
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function(e) {
				e.preventDefault();
				const target = document.querySelector(this.getAttribute('href'));
				if (target) {
					target.scrollIntoView({
						behavior: 'smooth',
						block: 'start'
					});
					// Close mobile menu if open
					navMenu.classList.remove('active');
				}
			});
		});

		// Add scroll animation for course cards
		const observerOptions = {
			root: null,
			rootMargin: '0px',
			threshold: 0.1
		};

		const courseCards = document.querySelectorAll('.course-card');

		const observer = new IntersectionObserver((entries) => {
			entries.forEach(entry => {
				if (entry.isIntersecting) {
					entry.target.style.opacity = '1';
					entry.target.style.transform = 'translateY(0)';
				}
			});
		}, observerOptions);

		courseCards.forEach(card => {
			card.style.opacity = '0';
			card.style.transform = 'translateY(20px)';
			card.style.transition = 'all 0.5s ease-out';
			observer.observe(card);
		});

		// Add sticky header on scroll
		const header = document.querySelector('header');
		let lastScroll = 0;

		window.addEventListener('scroll', () => {
			const currentScroll = window.pageYOffset;

			if (currentScroll <= 0) {
				header.classList.remove('scroll-up');
				return;
			}

			if (currentScroll > lastScroll && !header.classList.contains('scroll-down')) {
				// Scrolling down
				header.classList.remove('scroll-up');
				header.classList.add('scroll-down');
			} else if (currentScroll < lastScroll && header.classList.contains('scroll-down')) {
				// Scrolling up
				header.classList.remove('scroll-down');
				header.classList.add('scroll-up');
			}
			lastScroll = currentScroll;
		});
	</script>