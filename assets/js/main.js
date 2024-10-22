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