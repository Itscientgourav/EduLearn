// Mobile menu functionality
const mobileMenu = document.querySelector(".mobile-menu");
const navMenu = document.querySelector(".nav-menu");

mobileMenu.addEventListener("click", () => {
	navMenu.classList.toggle("active");
});

// Function to create scroll functionality for a section
function initializeScroll(sectionId, leftBtnClass, rightBtnClass) {
	const container = document.getElementById(sectionId);
	const leftBtn = document.querySelector(`.${leftBtnClass}`);
	const rightBtn = document.querySelector(`.${rightBtnClass}`);
	const scrollAmount = 400;

	leftBtn.addEventListener("click", () => {
		container.scrollBy({
			left: -scrollAmount,
			behavior: "smooth",
		});
	});

	rightBtn.addEventListener("click", () => {
		container.scrollBy({
			left: scrollAmount,
			behavior: "smooth",
		});
	});

	// Update scroll buttons visibility
	const updateScrollButtons = () => {
		const { scrollLeft, scrollWidth, clientWidth } = container;
		leftBtn.style.opacity = scrollLeft > 0 ? "1" : "0.5";
		rightBtn.style.opacity =
			scrollLeft < scrollWidth - clientWidth ? "1" : "0.5";
	};

	container.addEventListener("scroll", updateScrollButtons);
	window.addEventListener("resize", updateScrollButtons);
	updateScrollButtons();
}

// Initialize scroll for each section
initializeScroll("popular-grid", "scroll-left-popular", "scroll-right-popular");
initializeScroll("ai-grid", "scroll-left-ai", "scroll-right-ai");
// Initialize for web-dev and devops sections similarly

// Add animation on scroll
const observerOptions = {
	root: null,
	rootMargin: "0px",
	threshold: 0.1,
};

const observer = new IntersectionObserver((entries) => {
	entries.forEach((entry) => {
		if (entry.isIntersecting) {
			entry.target.style.opacity = "1";
			entry.target.style.transform = "translateY(0)";
		}
	});
}, observerOptions);

document.querySelectorAll(".course-card").forEach((card) => {
	card.style.opacity = "0";
	card.style.transform = "translateY(20px)";
	card.style.transition = "all 0.5s ease-out";
	observer.observe(card);
});
