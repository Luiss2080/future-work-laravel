// ==========================================================================
// HOME PAGE JS - Future Work
// ==========================================================================

class HomePage {
    constructor() {
        this.counters = document.querySelectorAll('.stat-number');
        this.newsletterForm = document.querySelector('.newsletter-form-home');
        this.heroButtons = document.querySelectorAll('.hero-buttons .btn');
        
        this.init();
    }

    init() {
        this.animateCounters();
        this.initNewsletterForm();
        this.initScrollAnimations();
        this.initHeroButtons();
    }

    animateCounters() {
        const animateCounter = (counter) => {
            const target = parseInt(counter.textContent.replace(/[^\d]/g, ''));
            const duration = 2000;
            const step = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += step;
                if (current < target) {
                    counter.textContent = this.formatNumber(Math.floor(current));
                    requestAnimationFrame(updateCounter);
                } else {
                    counter.textContent = this.formatNumber(target);
                }
            };

            updateCounter();
        };

        // Intersection Observer para animar cuando sea visible
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    if (!counter.classList.contains('animated')) {
                        counter.classList.add('animated');
                        animateCounter(counter);
                    }
                }
            });
        }, { threshold: 0.5 });

        this.counters.forEach(counter => {
            observer.observe(counter);
        });
    }

    formatNumber(num) {
        if (num >= 1000000) {
            return (num / 1000000).toFixed(1) + 'M';
        } else if (num >= 1000) {
            return (num / 1000).toFixed(1) + 'K';
        }
        return num.toString();
    }

    initNewsletterForm() {
        if (!this.newsletterForm) return;

        this.newsletterForm.addEventListener('submit', (e) => {
            e.preventDefault();
            this.handleNewsletterSubmit(e);
        });
    }

    async handleNewsletterSubmit(e) {
        const form = e.target;
        const emailInput = form.querySelector('.newsletter-email');
        const submitBtn = form.querySelector('.newsletter-submit');
        const email = emailInput.value.trim();

        if (!this.validateEmail(email)) {
            this.showMessage('Por favor, ingresa un email válido', 'error');
            return;
        }

        // Disable form
        submitBtn.textContent = 'Suscribiendo...';
        submitBtn.disabled = true;

        try {
            // Simulate API call
            await this.subscribeToNewsletter(email);
            
            this.showMessage('¡Gracias! Te has suscrito exitosamente', 'success');
            emailInput.value = '';
        } catch (error) {
            this.showMessage('Error al suscribirse. Intenta de nuevo', 'error');
        } finally {
            submitBtn.textContent = 'Suscribirse';
            submitBtn.disabled = false;
        }
    }

    async subscribeToNewsletter(email) {
        // Simulate API call
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                // 90% success rate for demo
                Math.random() > 0.1 ? resolve() : reject();
            }, 1500);
        });
    }

    validateEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    showMessage(message, type) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `alert alert-${type} alert-dismissible`;
        messageDiv.innerHTML = `
            <span>${message}</span>
            <button type="button" class="close" onclick="this.parentElement.remove()">
                <i class="fas fa-times"></i>
            </button>
        `;

        // Insert after newsletter form
        this.newsletterForm.parentNode.insertBefore(messageDiv, this.newsletterForm.nextSibling);

        // Auto remove after 5 seconds
        setTimeout(() => {
            if (messageDiv.parentNode) {
                messageDiv.remove();
            }
        }, 5000);
    }

    initScrollAnimations() {
        const animateElements = document.querySelectorAll('.feature-card, .stat-card, .process-step');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        animateElements.forEach((element, index) => {
            element.style.opacity = '0';
            element.style.transform = 'translateY(30px)';
            element.style.transition = `all 0.6s ease ${index * 0.1}s`;
            observer.observe(element);
        });
    }

    initHeroButtons() {
        this.heroButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const href = button.getAttribute('href');
                
                if (href && href.startsWith('#')) {
                    e.preventDefault();
                    this.smoothScrollTo(href);
                }
            });
        });
    }

    smoothScrollTo(target) {
        const element = document.querySelector(target);
        if (element) {
            const offsetTop = element.offsetTop - 80; // Account for fixed header
            window.scrollTo({
                top: offsetTop,
                behavior: 'smooth'
            });
        }
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new HomePage();
});