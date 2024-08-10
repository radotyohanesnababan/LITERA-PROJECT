document.addEventListener('DOMContentLoaded', () => {
    const carouselItems = document.getElementById('carousel-items');
    const slides = Array.from(carouselItems.children);
    const indicators = document.querySelectorAll('[data-carousel-slide-to]');
    const prevButton = document.querySelector('[data-carousel-prev]');
    const nextButton = document.querySelector('[data-carousel-next]');
    let currentSlide = 0;
    
    const updateSlidePosition = () => {
        const offset = currentSlide * -50;
        carouselItems.style.transform = `translateX(${offset}%)`;
        indicators.forEach((indicator, index) => {
            indicator.classList.toggle('bg-black', index === currentSlide);
            indicator.classList.toggle('bg-gray-400', index !== currentSlide);
        });

        // Show/hide arrows based on current slide
        if (currentSlide === 0) {
            prevButton.style.display = 'none';
        } else {
            prevButton.style.display = 'flex';
        }

        if (currentSlide === slides.length - 2) {
            nextButton.style.display = 'none';
        } else {
            nextButton.style.display = 'flex';
        }
    };

    prevButton.addEventListener('click', () => {
        currentSlide = (currentSlide === 0) ? slides.length - 2 : currentSlide - 1;
        updateSlidePosition();
    });

    nextButton.addEventListener('click', () => {
        currentSlide = (currentSlide === slides.length - 2) ? 0 : currentSlide + 1;
        updateSlidePosition();
    });

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide = index;
            updateSlidePosition();
        });
    });

    updateSlidePosition();
});
