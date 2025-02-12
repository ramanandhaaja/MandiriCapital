class NumberCounter {
    constructor(elementId) {
        this.element = document.getElementById(elementId);
        this.currentValue = 0;
        const value = this.element.dataset.value;
        // Extract the prefix (any non-numeric characters at the start)
        this.prefix = value.match(/^[^\d-]*/)[0] || '';
        // Extract any suffix (M, B, etc.) after the number
        this.suffix = value.match(/[A-Za-z]+$/)?.[0] || '';
    }

    formatNumber(value) {
        const numericValue = parseFloat(String(value).replace(/[^\d.-]/g, ''));

        const formattedNumber = numericValue.toLocaleString('en-US', {
            minimumFractionDigits: 0,
            maximumFractionDigits: 0
        });

        let result = this.prefix + formattedNumber;
        if (this.suffix) {
            result += this.suffix;
        }
        return result;
    }

    updateDisplay() {
        this.element.textContent = this.formatNumber(Math.round(this.currentValue));
    }

    animate(endValue, duration = 2) {
        // Kill any existing animation
        gsap.killTweensOf(this);

        // Parse the endValue to remove $ and any letters, keep only numbers
        const numericValue = parseFloat(endValue.toString().replace(/[$,A-Za-z]/g, ''));

        // Animate using GSAP
        gsap.to(this, {
            currentValue: numericValue,
            duration: duration,
            ease: "power2.out",
            onUpdate: () => this.updateDisplay()
        });
    }
}

// Function to start counter animation
function startCounter(elementId, endValue, duration = 2) {
    const counter = new NumberCounter(elementId);
    const value = counter.element.dataset.value;
    counter.animate(value, duration);
}

// Initialize animations when page loads
window.addEventListener('DOMContentLoaded', () => {
    // Create ScrollTrigger for the counter section

    ScrollTrigger.create({
        trigger: ".headline-section-two",
        start: "top 80%", // Trigger when the top of the section hits 80% from the top of viewport
        onEnter: () => {
            // Start counters when section comes into view
            document.querySelectorAll('.counter').forEach((counter) => {
                startCounter(counter.id, counter.dataset.value, 1.8);
            });
        },
        once: true // Only trigger once
    });

    // Add fade-in animation for the counter section
    gsap.from('.headline-card-two', {
        scrollTrigger: {
            trigger: ".headline-section-two",
            start: "top 80%",
        },
        y: 50,
        opacity: 0,
        duration: 1,
        stagger: 0.2,
        ease: "power2.out"
    });
});





document.addEventListener('DOMContentLoaded', function () {
    gsap.registerPlugin(ScrollTrigger);

    // Hero section animation
    /*
    gsap.from('.hero-section', {
        opacity: 0,
        y: 50,
        duration: 1,
        ease: 'power2.out'
    });*/

    // Cards animation
    const cards = document.querySelectorAll('.card.small-square.left');
    cards.forEach((card, index) => {
        gsap.fromTo(card,
            {
                opacity: 0,
                scale: 1,
                x: -100
            },
            {
                scrollTrigger: {
                    trigger: card,
                    start: 'top bottom+=50',
                    //end: 'top center',
                    //toggleActions: 'play reverse play reverse',
                },
                x: 0,
                opacity: 1,
                scale: 1,
                duration: 0.8,
                delay: 0.2,
                ease: 'power2.out'
            });
    });

    const cardsright = document.querySelectorAll('.card.small-square.right');
    cardsright.forEach((card, index) => {
        gsap.fromTo(card,
            {
                opacity: 0,
                scale: 1,
                x: 100
            },
            {
                scrollTrigger: {
                    trigger: card,
                    start: 'top bottom+=100',
                    //end: 'top top+=100',
                    //toggleActions: 'play reverse play reverse',

                },
                x: 0,
                opacity: 1,
                scale: 1,
                duration: 0.8,
                delay: 0.2,
                ease: 'power2.out'
            });
    });



    const mediumCards = document.querySelectorAll('.card.medium');
    mediumCards.forEach((card) => {
        gsap.fromTo(card,
            {
                opacity: 0,
                scale: 1,
                y: -100
            },
            {
                scrollTrigger: {
                    trigger: card,
                    start: 'top bottom-=50',
                    //end: 'bottom center',
                    //toggleActions: 'play reverse play reverse',
                },
                y: 0,
                opacity: 1,
                scale: 1,
                duration: 0.8,
                delay: 0.2,
                ease: 'power2.out'
            }
        );
    });


    const headlineGrid = document.querySelectorAll('.headline-grid');
    headlineGrid.forEach((card) => {
        gsap.fromTo(card,
            {
                opacity: 0,
                scale: 1,
                y: 100
            },
            {
                scrollTrigger: {
                    trigger: card,
                    start: 'top bottom',
                    //end: 'bottom center-=100',
                    //toggleActions: 'play reverse play reverse',
                },
                y: 0,
                opacity: 1,
                scale: 1,
                duration: 0.8,
                delay: 0.2,
                ease: 'power2.out'
            }
        );
    });



    const largerightCards = document.querySelectorAll('.card.large.right');
    largerightCards.forEach((card) => {
        gsap.fromTo(card,
            {
                opacity: 0,
                scale: 1,
                x: 100
            },
            {
                scrollTrigger: {
                    trigger: card,
                    start: 'top bottom-=50',
                    //end: 'bottom center',
                    //toggleActions: 'play reverse play reverse',
                },
                x: 0,
                opacity: 1,
                scale: 1,
                duration: 0.8,
                delay: 0.2,
                ease: 'power2.out'
            }
        );
    });

    const largeleftCards = document.querySelectorAll('.card.large.left');
    largeleftCards.forEach((card) => {
        gsap.fromTo(card,
            {
                opacity: 0,
                scale: 1,
                x: -100
            },
            {
                scrollTrigger: {
                    trigger: card,
                    start: 'top bottom-=50',
                    //end: 'bottom center',
                    //toggleActions: 'play reverse play reverse',
                },
                x: 0,
                opacity: 1,
                scale: 1,
                duration: 0.8,
                delay: 0.2,
                ease: 'power2.out'
            }
        );
    });
});
