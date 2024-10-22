<footer>
    <div class="footer-container">
        <div class="footer-content">
            <div class="footer-section">
                <h3><?= $t['about']; ?></h3>
                <p><?= $t['about_description']; ?></p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>

            <div class="footer-section">
                <h3><?= $t['footerquick_links']; ?></h3>
                <ul class="footer-links">
                    <li><a href="#home"><?= $t['quick_links']['home']; ?></a></li>
                    <li><a href="#courses"><?= $t['quick_links']['all_courses']; ?></a></li>
                    <li><a href="#about"><?= $t['quick_links']['about_us']; ?></a></li>
                    <li><a href="#instructors"><?= $t['quick_links']['instructors']; ?></a></li>
                    <li><a href="#contact"><?= $t['quick_links']['contact']; ?></a></li>
                </ul>
            </div>

            <div class="footer-section">
                <h3><?= $t['footercontact']; ?></h3>
                <ul class="contact-info">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <?= $t['contact_info']['address']; ?>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <?= $t['contact_info']['phone']; ?>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <?= $t['contact_info']['email']; ?>
                    </li>
                </ul>
            </div>

            <div class="footer-section">
                <h3><?= $t['newsletter']['heading']; ?></h3>
                <p><?= $t['newsletter']['description']; ?></p>
                <form class="newsletter-form" id="newsletter-form">
                    <input type="email" placeholder="<?= $t['newsletter']['email_placeholder']; ?>" required>
                    <button type="submit"><?= $t['newsletter']['subscribe']; ?></button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p><?= $t['footer']; ?></p>
    </div>
</footer>