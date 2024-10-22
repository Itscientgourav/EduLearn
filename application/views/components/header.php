<header>
    <div class="top-bar">
        <div class="top-bar-container">
            <div class="location-time">
                <div class="location-info">
                    <i class="fas fa-map-marker-alt"></i>
                    <span id="location"><?php echo $country; ?></span>
                </div>
                <div class="time-info">
                    <i class="far fa-clock"></i>
                    <?php echo $t['time']; ?><span id="current-time"><?php echo $currentTime; ?></span>
                </div>
            </div>
            <div class="dropdown-container">
                <div class="dropdown-wrapper" style="position: relative;">
                    <div class="dropdown-label" onclick="toggleDropdown('menu-dropdown', this)">
                        <i class="fas fa-bars"></i>
                        <span><?= $t['menu']; ?></span>
                    </div>
                    <div id="menu-dropdown" class="dropdown-content">
                        <a href="#"><i class="fas fa-home"></i>Home</a>
                        <a href="#"><i class="fas fa-user"></i>Profile</a>
                        <div class="separator"></div>
                        <a href="#"><i class="fas fa-cog"></i>Settings</a>
                        <a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
                    </div>
                </div>
                <div class="dropdown-wrapper" style="position: relative;">
                    <div class="dropdown-label" onclick="toggleDropdown('language-dropdown', this)">
                        <i class="fas fa-globe"></i>
                        <span><?= $t['language']; ?></span>
                    </div>
                    <div id="language-dropdown" class="dropdown-content">
                        <a href="<?php echo site_url('en'); ?>"><i class="fas fa-check"></i><?= $t['languages']['en']; ?></a>
                        <a href="<?php echo site_url('hi'); ?>"><i class="fas fa-check"></i><?= $t['languages']['hi']; ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="nav-container">
        <a href="<?php echo site_url('/'); ?>" style="text-decoration: none !important;">
            <div class="logo">EduLearn</div>
        </a>
        <ul class="nav-menu">
            <li><a href="<?php echo site_url('/'); ?>"><?= $t['nav']['home']; ?></a></li>
            <li><a href="<?php echo site_url('courses'); ?>"><?= $t['nav']['courses']; ?></a></li>
            <li><a href="#about"><?= $t['nav']['about']; ?></a></li>
            <li><a href="#contact"><?= $t['nav']['contact']; ?></a></li>
        </ul>
        <div class="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
</header>

<script>
    // Initialize the start time from PHP
    let startTime = "<?php echo $currentTime; ?>";
    let currentTime = new Date(startTime);

    function updateTime() {
        // Increment the time by one second
        currentTime.setSeconds(currentTime.getSeconds() + 1);

        // Get hours, minutes, seconds
        let hours = currentTime.getHours();
        let minutes = currentTime.getMinutes().toString().padStart(2, '0');
        let seconds = currentTime.getSeconds().toString().padStart(2, '0');

        // Determine if it's AM or PM
        let ampm = hours >= 12 ? 'PM' : 'AM';

        // Convert hours to 12-hour format
        hours = hours % 12;
        hours = hours ? hours : 12; // the hour '0' should be '12'

        // Format the time in 'YYYY-MM-DD HH:MM:SS AM/PM'
        let day = currentTime.getDate().toString().padStart(2, '0');
        let month = (currentTime.getMonth() + 1).toString().padStart(2, '0');
        let year = currentTime.getFullYear();

        let formattedTime = `${day}/${month}/${year} ${hours}:${minutes}:${seconds} ${ampm}`;

        // Update the HTML element with the current time
        document.getElementById('current-time').innerText = formattedTime;
    }

    // Update the time every second
    setInterval(updateTime, 1000);

    // Toggle dropdowns
    function toggleDropdown(dropdownId, labelElement) {
        const dropdowns = document.getElementsByClassName('dropdown-content');
        const labels = document.getElementsByClassName('dropdown-label');

        // Close all dropdowns first
        Array.from(dropdowns).forEach(dropdown => {
            if (dropdown.id !== dropdownId) {
                dropdown.classList.remove('show');
            }
        });
        Array.from(labels).forEach(label => {
            if (label !== labelElement) {
                label.classList.remove('active');
            }
        });

        // Toggle the clicked dropdown
        document.getElementById(dropdownId).classList.toggle('show');
        labelElement.classList.toggle('active');
    }

    // Close dropdowns when clicking outside
    window.onclick = function(event) {
        if (!event.target.closest('.dropdown-wrapper')) {
            const dropdowns = document.getElementsByClassName('dropdown-content');
            const labels = document.getElementsByClassName('dropdown-label');

            Array.from(dropdowns).forEach(dropdown => {
                dropdown.classList.remove('show');
            });
            Array.from(labels).forEach(label => {
                label.classList.remove('active');
            });
        }
    }
</script>