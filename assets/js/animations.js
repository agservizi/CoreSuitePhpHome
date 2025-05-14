// Intersection Observer per le animazioni
const animateOnScroll = () => {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animated');
            }
        });
    }, {
        threshold: 0.1,
        rootMargin: '50px'
    });

    // Osserva tutti gli elementi con data-animate
    document.querySelectorAll('[data-animate]').forEach(el => {
        observer.observe(el);
    });
};

// Effetto parallax per lo sfondo
const parallaxEffect = () => {
    document.addEventListener('mousemove', (e) => {
        const parallaxElements = document.querySelectorAll('[data-parallax]');
        const mouseX = (e.clientX / window.innerWidth - 0.5) * 2;
        const mouseY = (e.clientY / window.innerHeight - 0.5) * 2;

        parallaxElements.forEach(el => {
            const speed = el.getAttribute('data-parallax') || 20;
            const x = mouseX * speed;
            const y = mouseY * speed;
            el.style.transform = `translate(${x}px, ${y}px)`;
        });
    });
};

// Effetto hover per le cards
const cardHoverEffect = () => {
    document.querySelectorAll('.card-feature').forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const centerX = rect.width / 2;
            const centerY = rect.height / 2;
            
            const angleX = (y - centerY) / 10;
            const angleY = -(x - centerX) / 10;
            
            card.style.transform = `perspective(1000px) rotateX(${angleX}deg) rotateY(${angleY}deg) scale3d(1.05, 1.05, 1.05)`;
        });

        card.addEventListener('mouseleave', () => {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
        });
    });
};

// Animazione numeri
const animateNumbers = () => {
    const numberElements = document.querySelectorAll('[data-number-animate]');
    
    const animateValue = (el, start, end, duration) => {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const current = Math.floor(progress * (end - start) + start);
            el.textContent = current.toLocaleString();
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const endValue = parseInt(el.getAttribute('data-number-animate'));
                animateValue(el, 0, endValue, 2000);
                observer.unobserve(el);
            }
        });
    }, { threshold: 0.5 });

    numberElements.forEach(el => observer.observe(el));
};

// Smooth scroll
const initSmoothScroll = () => {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
};

// Inizializzazione
document.addEventListener('DOMContentLoaded', () => {
    animateOnScroll();
    parallaxEffect();
    cardHoverEffect();
    animateNumbers();
    initSmoothScroll();
});
