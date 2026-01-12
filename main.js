// SMK Metland - Main JavaScript File

document.addEventListener('DOMContentLoaded', function() {
    
    // Hero Carousel Auto-scroll
    const heroSlides = document.querySelectorAll('.hero-slide');
    if (heroSlides.length > 0) {
        let currentSlide = 0;
        
        function nextSlide() {
            heroSlides[currentSlide].classList.remove('active');
            currentSlide = (currentSlide + 1) % heroSlides.length;
            heroSlides[currentSlide].classList.add('active');
        }
        
        // Change slide every 5 seconds
        setInterval(nextSlide, 5000);
    }
    
    // Partnership Logos Auto-scroll (Duplicate items for seamless loop)
    const partnershipLogos = document.querySelector('.partnership-logos');
    if (partnershipLogos) {
        const items = partnershipLogos.querySelectorAll('.partnership-item');
        if (items.length > 0) {
            // Clone all items for seamless scroll
            items.forEach(item => {
                const clone = item.cloneNode(true);
                partnershipLogos.appendChild(clone);
            });
        }
    }
    
    // Mobile Menu Toggle
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const navbarMenu = document.getElementById('navbar-menu');
    
    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function() {
            navbarMenu.classList.toggle('active');
            this.classList.toggle('active');
        });
    }
    
    // Close mobile menu when clicking outside
    document.addEventListener('click', function(event) {
        if (navbarMenu && mobileMenuToggle) {
            if (!navbarMenu.contains(event.target) && !mobileMenuToggle.contains(event.target)) {
                navbarMenu.classList.remove('active');
                mobileMenuToggle.classList.remove('active');
            }
        }
    });
    
    // Back to Top Button
    const backToTopBtn = document.getElementById('back-to-top');
    
    if (backToTopBtn) {
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });
        
        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }
    
    // Smooth Scroll for Anchor Links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href.length > 1) {
                e.preventDefault();
                const target = document.querySelector(href);
                if (target) {
                    const offsetTop = target.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    });
    
    // Animate on Scroll (Simple version)
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);
    
    // Observe elements for animation
    document.querySelectorAll('.program-card, .facility-card, .testimonial-item').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });
    
    // Form Validation (if forms exist)
    const forms = document.querySelectorAll('form');
    forms.forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!form.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            }
            form.classList.add('was-validated');
        });
    });
    
    // Dropdown Menu
    const dropdowns = document.querySelectorAll('.dropdown');
    dropdowns.forEach(dropdown => {
        const link = dropdown.querySelector('.nav-link');
        if (link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                dropdown.classList.toggle('active');
            });
        }
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(event) {
        dropdowns.forEach(dropdown => {
            if (!dropdown.contains(event.target)) {
                dropdown.classList.remove('active');
            }
        });
    });
    
    // Counter Animation (for stats)
    const counters = document.querySelectorAll('.stat-item h4');
    const animateCounter = (counter) => {
        const target = parseInt(counter.innerText.replace(/\D/g, ''));
        if (target && !counter.classList.contains('counted')) {
            counter.classList.add('counted');
            let current = 0;
            const increment = target / 50;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    counter.innerText = target.toString();
                    clearInterval(timer);
                } else {
                    counter.innerText = Math.floor(current).toString();
                }
            }, 30);
        }
    };
    
    const counterObserver = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
            }
        });
    }, { threshold: 0.5 });
    
    counters.forEach(counter => {
        counterObserver.observe(counter);
    });
    
    console.log('SMK Metland Website - JavaScript Loaded Successfully!');
});
