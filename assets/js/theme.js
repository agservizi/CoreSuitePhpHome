// Dark Mode Toggle
const darkModeToggle = document.createElement('button');
darkModeToggle.classList.add(
    'fixed', 'right-4', 'bottom-4', 'z-50',
    'w-12', 'h-12', 'rounded-full', 'bg-white',
    'dark:bg-gray-800', 'shadow-lg', 'flex',
    'items-center', 'justify-center',
    'transition-colors', 'duration-300',
    'hover:bg-gray-100', 'dark:hover:bg-gray-700',
    'focus:outline-none', 'focus:ring-2',
    'focus:ring-primary-500'
);

// Funzione per aggiornare l'icona del dark mode
function updateDarkModeIcon() {
    const isDark = document.documentElement.classList.contains('dark');
    darkModeToggle.innerHTML = isDark
        ? '<i class="fas fa-sun text-yellow-500"></i>'
        : '<i class="fas fa-moon text-gray-700"></i>';
}

// Funzione per gestire il toggle del dark mode
function toggleDarkMode() {
    if (document.documentElement.classList.contains('dark')) {
        document.documentElement.classList.remove('dark');
        localStorage.setItem('darkMode', 'light');
    } else {
        document.documentElement.classList.add('dark');
        localStorage.setItem('darkMode', 'dark');
    }
    updateDarkModeIcon();
}

// Inizializzazione del dark mode
function initDarkMode() {
    const savedTheme = localStorage.getItem('darkMode');
    if (savedTheme === 'dark' || 
        (!savedTheme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    }
    updateDarkModeIcon();
    darkModeToggle.addEventListener('click', toggleDarkMode);
    document.body.appendChild(darkModeToggle);
}

// Gestione del preloader
const preloader = document.getElementById('preloader');
window.addEventListener('load', () => {
    preloader.style.opacity = '0';
    setTimeout(() => {
        preloader.style.display = 'none';
    }, 500);
});

// Intersection Observer per le animazioni
const animateOnScroll = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate-slide-up');
            entry.target.style.opacity = '1';
        }
    });
}, {
    threshold: 0.1,
    rootMargin: '50px'
});

// Applicazione delle animazioni agli elementi
document.addEventListener('DOMContentLoaded', () => {
    initDarkMode();

    // Animazioni per le cards
    document.querySelectorAll('.card-feature, .testimonial-card').forEach(el => {
        el.style.opacity = '0';
        animateOnScroll.observe(el);
    });

    // Gestione del menu mobile
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.mobile-menu');
    
    mobileMenuButton?.addEventListener('click', () => {
        mobileMenu?.classList.toggle('hidden');
    });

    // Smooth scroll per i link interni
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

                // Chiudi il menu mobile dopo il click
                mobileMenu?.classList.add('hidden');
            }
        });
    });

    // Navbar scroll effect
    const navbar = document.querySelector('nav');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar?.classList.add('bg-white/95', 'dark:bg-gray-900/95', 'backdrop-blur-md', 'shadow-lg');
        } else {
            navbar?.classList.remove('bg-white/95', 'dark:bg-gray-900/95', 'backdrop-blur-md', 'shadow-lg');
        }
    });

    // Carosello testimonianze
    const testimonials = document.querySelectorAll('.testimonial-card');
    let currentTestimonial = 0;

    function showTestimonial(index) {
        testimonials.forEach((t, i) => {
            t.classList.toggle('active', i === index);
        });
    }

    if (testimonials.length > 0) {
        setInterval(() => {
            currentTestimonial = (currentTestimonial + 1) % testimonials.length;
            showTestimonial(currentTestimonial);
        }, 5000);
    }

    // Lazy loading per le immagini
    if ('loading' in HTMLImageElement.prototype) {
        const images = document.querySelectorAll('img[loading="lazy"]');
        images.forEach(img => {
            img.src = img.dataset.src;
        });
    } else {
        // Fallback per browser che non supportano il lazy loading nativo
        const script = document.createElement('script');
        script.src = 'https://cdnjs.cloudflare.com/ajax/libs/lozad.js/1.16.0/lozad.min.js';
        script.async = true;
        document.body.appendChild(script);
        
        script.onload = () => {
            const observer = lozad();
            observer.observe();
        };
    }
});
