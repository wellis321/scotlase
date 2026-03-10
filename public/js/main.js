/**
 * Scotlase Solutions - Main JavaScript
 */

document.addEventListener('DOMContentLoaded', function () {
    // Mobile nav toggle
    const navToggle = document.querySelector('.nav-toggle');
    const mainNav = document.querySelector('.main-nav');

    if (navToggle && mainNav) {
        navToggle.addEventListener('click', function () {
            mainNav.classList.toggle('open');
            navToggle.setAttribute('aria-expanded', mainNav.classList.contains('open'));
        });

        // Close nav when clicking a link
        mainNav.querySelectorAll('a').forEach(function (link) {
            link.addEventListener('click', function () {
                mainNav.classList.remove('open');
                navToggle.setAttribute('aria-expanded', 'false');
            });
        });
    }

    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            if (targetId === '#') return;
            const target = document.querySelector(targetId);
            if (target) {
                e.preventDefault();
                target.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    // Scroll reveal animations
    const scrollReveals = document.querySelectorAll('.scroll-reveal');
    if (scrollReveals.length && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('revealed');
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        scrollReveals.forEach(function (el) {
            observer.observe(el);
        });
    } else {
        scrollReveals.forEach(function (el) {
            el.classList.add('revealed');
        });
    }
});
