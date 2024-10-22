<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduLearn - Online Courses</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/course.css'); ?>">
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

    <div class="filter-section">
        <div class="search-container">
            <div class="search-box">
                <svg class="search-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
                <input type="text" class="search-input" placeholder="<?= $t['learn_prompt']; ?>">
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
                <?= $t['filters']; ?>
            </button>
        </div>

        <div class="categories">
            <button class="category-pill active"><?= $t['all']; ?></button>
            <button class="category-pill"><?= $t['programming']; ?></button>
            <button class="category-pill"><?= $t['design']; ?></button>
            <button class="category-pill"><?= $t['business']; ?></button>
            <button class="category-pill"><?= $t['marketing']; ?></button>
            <button class="category-pill"><?= $t['personal_development']; ?></button>
        </div>

        <div class="expanded-filters">
            <div class="filter-group">
                <label><?= $t['level']; ?></label>
                <select>
                    <option><?= $t['all_levels']; ?></option>
                    <option><?= $t['levels']['beginner']; ?></option>
                    <option><?= $t['levels']['intermediate']; ?></option>
                    <option><?= $t['levels']['advanced']; ?></option>
                </select>
            </div>
            <div class="filter-group">
                <label><?= $t['duration']; ?></label>
                <select>
                    <option><?= $t['any_duration']; ?></option>
                    <option><?= $t['durations']['hours_0_2']; ?></option>
                    <option><?= $t['durations']['hours_2_5']; ?></option>
                    <option><?= $t['durations']['hours_5_plus']; ?></option>
                </select>
            </div>
            <div class="filter-group">
                <label><?= $t['price']; ?></label>
                <select>
                    <option><?= $t['all_prices']; ?></option>
                    <option><?= $t['prices']['free']; ?></option>
                    <option><?= $t['prices']['paid']; ?></option>
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
                <h2><?= $t['popular_courses']; ?></h2>
            </div>
            <div class="controls">
                <a href="#" class="view-all">
                    <?= $t['view_all_courses']; ?> <i class="fas fa-arrow-right"></i>
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
                        <span class="course-tag"><?= $t['courseBedge1']; ?></span>
                    </div>
                    <div class="course-content">
                        <h3>Python Programming Masterclass</h3>
                        <p>Complete Python bootcamp from zero to hero</p>
                        <div class="course-stats">
                            <span class="course-stat">
                                <i class="fas fa-user"></i> 2.5k <?= $t['courseLabel']; ?>
                            </span>
                            <span class="course-stat">
                                <i class="fas fa-star"></i> 4.9
                            </span>
                        </div>
                        <div class="price-row">
                            <span class="price">$89.99</span>
                            <button class="btn"><a href="<?php echo site_url('specializations/SocialScience'); ?>"><?= $t['enrollbtn']; ?></a></button>
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
                <h2><?= $t['ai_machine_learning']; ?></h2>
            </div>
            <div class="controls">
                <a href="#" class="view-all">
                    <?= $t['view_all_ai_courses']; ?> <i class="fas fa-arrow-right"></i>
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
                        <span class="course-tag"><?= $t['courseBedge5']; ?></span>
                    </div>
                    <div class="course-content">
                        <h3>Machine Learning A-Z</h3>
                        <p>Complete guide to machine learning & AI</p>
                        <div class="course-stats">
                            <span class="course-stat">
                                <i class="fas fa-user"></i> 1.8k <?= $t['courseLabel']; ?>
                            </span>
                            <span class="course-stat">
                                <i class="fas fa-star"></i> 4.8
                            </span>
                        </div>
                        <div class="price-row">
                            <span class="price">$129.99</span>
                            <button class="btn"><a href="<?php echo site_url('specializations/Math'); ?>"><?= $t['enrollbtn']; ?></a></button>
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

    <!-- Footer remains the same -->
    <?php $this->load->view('components/footer');  ?>
    <!-- Include your JavaScript file -->
    <script src="<?php echo base_url('assets/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/course.js'); ?>"></script>
    <script>
        // Toggle expanded filters
        const filterToggle = document.querySelector(".filter-toggle");
        const expandedFilters = document.querySelector(".expanded-filters");

        filterToggle.addEventListener("click", () => {
            expandedFilters.classList.toggle("show");
        });

        // Category pills functionality
        const categoryPills = document.querySelectorAll(".category-pill");

        categoryPills.forEach((pill) => {
            pill.addEventListener("click", () => {
                // Remove active class from all pills
                categoryPills.forEach((p) => p.classList.remove("active"));
                // Add active class to clicked pill
                pill.classList.add("active");
            });
        });

        // Search input functionality
        const searchInput = document.querySelector(".search-input");

        searchInput.addEventListener("input", (e) => {
            const searchTerm = e.target.value.toLowerCase();
            // Add your search logic here
            console.log("Searching for:", searchTerm);
        });
    </script>
</body>

</html>