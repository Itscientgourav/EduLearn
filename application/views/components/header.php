<style>
    #google_translate_element {
        background: white;
        padding: 5px;
        border-radius: 4px;
    }

    /* Google Translate Widget Styling */
    .goog-te-gadget {
        font-family: Arial, sans-serif !important;
        color: transparent !important;
    }

    .goog-te-gadget .goog-te-combo {
        padding: 5px;
        border: 1px solid #ddd;
        border-radius: 4px;
        color: #333;
        font-size: 14px;
    }

    .goog-logo-link {
        display: none !important;
    }
</style>
<header>
    <nav class="nav-container">
        <a href="<?php echo site_url('/'); ?>" style="text-decoration: none !important;">
            <div class="logo">EduLearn</div>
        </a>
        <ul class="nav-menu">
            <li><a href="<?php echo site_url('/'); ?>"><?= $t['nav']['home']; ?></a></li>
            <li><a href="<?php echo site_url('/courses'); ?>"><?= $t['nav']['courses']; ?></a></li>
            <li><a href="<?php echo site_url('/login'); ?>">Login</a></li>
            <li><a href="<?php echo site_url('/resgister'); ?>">Register</a></li>
        </ul>
        <div class="mobile-menu">
            <i class="fas fa-bars"></i>
        </div>
    </nav>
</header>

<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
        }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

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