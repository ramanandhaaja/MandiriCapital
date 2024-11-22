document.addEventListener('DOMContentLoaded', function() {
    gsap.registerPlugin(ScrollTrigger);

    // Initial state
    gsap.set('.card', {
        opacity: 0,
        scale: 0.95,
        x:-100
    });

    // Hero section animation
    gsap.from('.hero-section', {
        opacity: 0,
        y: 50,
        duration: 1,
        ease: 'power2.out'
    });

    // Cards animation
    const cards = document.querySelectorAll('.card');
    cards.forEach((card, index) => {
        gsap.to(card, {
            scrollTrigger: {
                trigger: card,
                start: 'top bottom-=100',
                end: 'top center',
                toggleActions: 'play none none reverse',
            },
            x:0,
            opacity: 1,
            scale: 1,
            duration: 0.8,
            delay: 0.2,
            ease: 'power2.out'
        });
    });
});
