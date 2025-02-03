// Store current slide index for each carousel
const carouselStates = {};

function moveSlide(n, carouselIndex) {
    console.log('Moving slide:', n, 'for carousel:', carouselIndex);
    const currentIndex = carouselStates[carouselIndex] || 1;
    showSlide(currentIndex + n, carouselIndex);
}

function currentSlide(n, carouselIndex) {
    console.log('Setting current slide:', n, 'for carousel:', carouselIndex);
    showSlide(n, carouselIndex);
}

function showSlide(n, carouselIndex) {
    console.log('Showing slide:', n, 'for carousel:', carouselIndex);
    const slides = document.querySelectorAll(`.carousel-slide[data-carousel="${carouselIndex}"]`);
    const dots = document.querySelectorAll(`.dot[data-carousel="${carouselIndex}"]`);
    
    console.log('Found slides:', slides.length, 'and dots:', dots.length);
    if (!slides.length) return;

    // Update carousel state
    if (n > slides.length) {
        carouselStates[carouselIndex] = 1;
    } else if (n < 1) {
        carouselStates[carouselIndex] = slides.length;
    } else {
        carouselStates[carouselIndex] = n;
    }

    const currentIndex = carouselStates[carouselIndex];
    console.log('Current index for carousel', carouselIndex, ':', currentIndex);

    // Hide all slides
    slides.forEach(slide => {
        slide.classList.remove("active");
    });

    // Remove active state from all dots
    dots.forEach(dot => {
        dot.classList.remove("active");
    });

    // Show current slide and activate corresponding dot
    slides[currentIndex - 1].classList.add("active");
    dots[currentIndex - 1].classList.add("active");
}

// Initialize all carousels
document.addEventListener('DOMContentLoaded', () => {
    console.log('DOM Content Loaded - Initializing carousels');
    const carousels = document.querySelectorAll('.carousel-container');
    console.log('Found carousels:', carousels.length);
    
    carousels.forEach(carousel => {
        const carouselId = carousel.id;
        console.log('Initializing carousel:', carouselId);
        
        // Extract the full identifier (e.g., 'odd-1' or 'even-2')
        const identifier = carouselId.replace('carousel-', '');
        carouselStates[identifier] = 1;
        showSlide(1, identifier);
    });
});

// Auto advance slides every 5 seconds
/*
setInterval(() => {
    moveSlide(1, 1); // Assuming the first carousel has index 1
}, 5000);
*/
