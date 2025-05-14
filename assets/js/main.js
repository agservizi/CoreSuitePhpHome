// Initialize AOS (Animate On Scroll)
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        duration: 800,
        once: true,
        offset: 100,
        easing: 'ease-in-out'
    });

    // Navbar scroll behavior
    const navbar = document.querySelector('.main-header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('navbar-white', 'shadow-sm');
            navbar.classList.remove('navbar-dark', 'bg-transparent');
        } else {
            navbar.classList.remove('navbar-white', 'shadow-sm');
            navbar.classList.add('navbar-dark', 'bg-transparent');
        }
    });

    // Smooth scroll for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Video Background Fallback
    const video = document.getElementById('heroVideo');
    if (video) {
        video.addEventListener('error', function() {
            video.style.display = 'none';
            document.querySelector('.video-background').style.background = 
                'linear-gradient(135deg, var(--primary-color), var(--secondary-color))';
        });
    }

    // Testimonial Tabs Animation
    const testimonialTabs = document.querySelectorAll('[data-toggle="pill"]');
    testimonialTabs.forEach(tab => {
        tab.addEventListener('shown.bs.tab', function(e) {
            const target = document.querySelector(e.target.getAttribute('href'));
            if (target) {
                target.querySelector('.testimonial-content').style.opacity = 0;
                setTimeout(() => {
                    target.querySelector('.testimonial-content').style.opacity = 1;
                }, 50);
            }
        });
    });

    // Add loading animation to CTA buttons
    document.querySelectorAll('.btn-primary, .btn-hero').forEach(button => {
        button.addEventListener('click', function(e) {
            if (this.getAttribute('href').startsWith('http')) {
                e.preventDefault();
                this.classList.add('disabled');
                const originalText = this.innerHTML;
                this.innerHTML = '<span class="spinner-border spinner-border-sm mr-2"></span>Caricamento...';
                setTimeout(() => {
                    window.location.href = this.getAttribute('href');
                }, 500);
            }
        });
    });

    // Lazy Loading per le immagini
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src;
                    img.removeAttribute('data-src');
                    img.classList.add('loaded');
                    observer.unobserve(img);
                }
            });
        });

        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    }

    // Floating Cards Animation
    const cards = document.querySelectorAll('.floating-card');
    cards.forEach(card => {
        let randomDelay = Math.random() * 2;
        card.style.animationDelay = `${randomDelay}s`;
    });

    // Progress Bar Animation
    const progressBars = document.querySelectorAll('.progress-bar');
    const animateProgress = (entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.width = entry.target.getAttribute('aria-valuenow') + '%';
                observer.unobserve(entry.target);
            }
        });
    };

    const progressObserver = new IntersectionObserver(animateProgress, {
        threshold: 0.5
    });

    progressBars.forEach(bar => {
        bar.style.width = '0';
        progressObserver.observe(bar);
    });
});
