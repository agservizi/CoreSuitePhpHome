/* Funzionalità FAQ */
document.addEventListener('DOMContentLoaded', function() {
    // Toggle FAQ
    document.querySelectorAll('.faq-toggle').forEach(button => {
        button.addEventListener('click', function() {
            const content = this.nextElementSibling;
            const icon = this.querySelector('.faq-icon');
            
            // Toggle content visibility
            content.classList.toggle('hidden');
            
            // Rotate icon
            if (content.classList.contains('hidden')) {
                icon.style.transform = 'rotate(0deg)';
            } else {
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
    
    // Testimonial slider
    const slider = document.getElementById('testimonials-slider');
    const dots = document.querySelectorAll('.testimonial-dot');
    const prevButton = document.getElementById('prev-testimonial');
    const nextButton = document.getElementById('next-testimonial');
    let currentSlide = 0;
    const slideCount = document.querySelectorAll('.testimonial-slide').length;
    
    function updateSlider() {
        slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        
        // Update dots
        dots.forEach((dot, index) => {
            if (index === currentSlide) {
                dot.classList.remove('bg-blue-200');
                dot.classList.add('bg-blue-500');
            } else {
                dot.classList.remove('bg-blue-500');
                dot.classList.add('bg-blue-200');
            }
        });
    }
    
    // Next slide
    function nextSlide() {
        currentSlide = (currentSlide + 1) % slideCount;
        updateSlider();
    }
    
    // Previous slide
    function prevSlide() {
        currentSlide = (currentSlide - 1 + slideCount) % slideCount;
        updateSlider();
    }
    
    // Add event listeners
    if (prevButton && nextButton) {
        prevButton.addEventListener('click', prevSlide);
        nextButton.addEventListener('click', nextSlide);
    }
    
    // Click on dots
    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            currentSlide = index;
            updateSlider();
        });
    });
    
    // Auto-slide
    let slideInterval = setInterval(nextSlide, 5000);
    
    // Pause on hover
    const testimonialsContainer = document.getElementById('testimonials-container');
    if (testimonialsContainer) {
        testimonialsContainer.addEventListener('mouseenter', () => {
            clearInterval(slideInterval);
        });
        
        testimonialsContainer.addEventListener('mouseleave', () => {
            slideInterval = setInterval(nextSlide, 5000);
        });
    }
});
