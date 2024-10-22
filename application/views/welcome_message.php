<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EduLearn - Online Courses</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
</head>

<body>
	<!-- Header remains the same -->
	<?php $this->load->view('components/header');  ?> 

	<!-- Hero section remains the same -->
	<section class="hero">
		<h1><?= $t['headline']; ?></h1>
		<p><?= $t['subheadline']; ?></p>
		<a href="<?php echo site_url('courses'); ?>" class="btn"><?= $t['explore']; ?></a>
	</section>

	<!-- Enhanced Courses Section -->
	<section class="courses" id="courses">
		<div class="courses-header">
			<h2><?= $t['popular_courses']; ?></h2>
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
						<span class="course-tag"><?= $t['courseBedge1']; ?></span>
					</div>
					<div class="course-content">
						<h3>Web Development Masterclass</h3>
						<p>Learn modern web development with HTML, CSS, and JavaScript</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 1.2k <?= $t['courseLabel']; ?>
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.8
							</span>
						</div>
						<div class="price-row">
							<span class="price">$99.99</span>
							<button class="btn"><?= $t['enrollbtn']; ?></button>
						</div>
					</div>
				</div>

				<!-- Course Card 2 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://coursera_assets.s3.amazonaws.com/collections/product-images/applied-data-science.jpeg?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&fit=crop&q=50" alt="Data Science Course">
						<span class="course-tag"><?= $t['courseBedge5']; ?></span>
					</div>
					<div class="course-content">
						<h3>Data Science Fundamentals</h3>
						<p>Master data analysis and machine learning basics</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 950 <?= $t['courseLabel']; ?>
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.9
							</span>
						</div>
						<div class="price-row">
							<span class="price">$149.99</span>
							<button class="btn"><?= $t['enrollbtn']; ?></button>
						</div>
					</div>
				</div>

				<!-- Course Card 3 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://d15cw65ipctsrr.cloudfront.net/55/3d79d0624d4c2ea0f3deb1e39e0593/DMI-Logo_1200x1200.png?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&q=50&fit=crop" alt="Digital Marketing Course">
						<span class="course-tag"><?= $t['courseBedge3']; ?></span>
					</div>
					<div class="course-content">
						<h3>Digital Marketing Pro</h3>
						<p>Learn to create effective marketing strategies</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 750 <?= $t['courseLabel']; ?>
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.7
							</span>
						</div>
						<div class="price-row">
							<span class="price">$79.99</span>
							<button class="btn"><?= $t['enrollbtn']; ?></button>
						</div>
					</div>
				</div>

				<!-- Course Card 4 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera-course-photos/e6/8f0440758611e8bbc5cde522cfff09/visual_logo_03c.jpg?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&q=50&fit=crop" alt="UI/UX Design Course">
						<span class="course-tag"><?= $t['courseBedge2']; ?></span>
					</div>
					<div class="course-content">
						<h3>UI/UX Design Essential</h3>
						<p>Create beautiful and functional user interfaces</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 850 <?= $t['courseLabel']; ?>
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.8
							</span>
						</div>
						<div class="price-row">
							<span class="price">$129.99</span>
							<button class="btn"><?= $t['enrollbtn']; ?></button>
						</div>
					</div>
				</div>

				<!-- Course Card 5 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera-course-photos/e6/8f0440758611e8bbc5cde522cfff09/visual_logo_03c.jpg?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&q=50&fit=crop" alt="UI/UX Design Course">
						<span class="course-tag"><?= $t['courseBedge2']; ?></span>
					</div>
					<div class="course-content">
						<h3>UI/UX Design Essential</h3>
						<p>Create beautiful and functional user interfaces</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 850 <?= $t['courseLabel']; ?>
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.8
							</span>
						</div>
						<div class="price-row">
							<span class="price">$129.99</span>
							<button class="btn"><?= $t['enrollbtn']; ?></button>
						</div>
					</div>
				</div>

				<!-- Course Card 5 -->
				<div class="course-card">
					<div class="course-image">
						<img src="https://d3njjcbhbojbot.cloudfront.net/api/utilities/v1/imageproxy/https://s3.amazonaws.com/coursera-course-photos/e6/8f0440758611e8bbc5cde522cfff09/visual_logo_03c.jpg?auto=format%2Ccompress%2C%20enhance&dpr=1&w=265&h=216&q=50&fit=crop" alt="UI/UX Design Course">
						<span class="course-tag"><?= $t['courseBedge2']; ?></span>
					</div>
					<div class="course-content">
						<h3>UI/UX Design Essential</h3>
						<p>Create beautiful and functional user interfaces</p>
						<div class="course-stats">
							<span class="course-stat">
								<i class="fas fa-user"></i> 850 <?= $t['courseLabel']; ?>
							</span>
							<span class="course-stat">
								<i class="fas fa-star"></i> 4.8
							</span>
						</div>
						<div class="price-row">
							<span class="price">$129.99</span>
							<button class="btn"><?= $t['enrollbtn']; ?></button>
						</div>
					</div>
				</div>

				<!-- Additional cards (5-8) with the same structure -->
				<!-- Copy and paste cards 1-4 here and modify content -->
			</div>
		</div>
	</section>

	<!-- Footer remains the same -->
	<?php $this->load->view('components/footer');  ?>
	<!-- Include your JavaScript file -->
	<script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
</body>
</html>