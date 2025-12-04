/* JavaScript para página de Contacto */

class ContactoManager {
    constructor() {
        this.initEventListeners();
        this.initFormValidation();
        this.initMapInteraction();
    }

    initEventListeners() {
        // Evento para el formulario de contacto
        const form = document.getElementById('contactForm');
        if (form) {
            form.addEventListener('submit', this.handleFormSubmit.bind(this));
        }

        // Eventos para validación en tiempo real
        const inputs = document.querySelectorAll('#contactForm input, #contactForm textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', () => this.validateField(input));
            input.addEventListener('input', () => this.clearFieldError(input));
        });

        // Evento para el botón de WhatsApp
        const whatsappBtn = document.querySelector('.btn-whatsapp');
        if (whatsappBtn) {
            whatsappBtn.addEventListener('click', this.handleWhatsAppClick.bind(this));
        }

        // Eventos para los botones de redes sociales
        const socialButtons = document.querySelectorAll('.social-btn');
        socialButtons.forEach(btn => {
            btn.addEventListener('click', this.handleSocialClick.bind(this));
        });
    }

    initFormValidation() {
        this.validationRules = {
            nombre: {
                required: true,
                minLength: 2,
                pattern: /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/
            },
            email: {
                required: true,
                pattern: /^[^\s@]+@[^\s@]+\.[^\s@]+$/
            },
            telefono: {
                required: false,
                pattern: /^[\d\s\-\+\(\)]+$/,
                minLength: 7
            },
            asunto: {
                required: true,
                minLength: 5
            },
            mensaje: {
                required: true,
                minLength: 10,
                maxLength: 1000
            }
        };
    }

    validateField(field) {
        const fieldName = field.name;
        const value = field.value.trim();
        const rules = this.validationRules[fieldName];
        
        if (!rules) return true;

        // Limpiar errores previos
        this.clearFieldError(field);

        // Validar campo requerido
        if (rules.required && !value) {
            this.showFieldError(field, 'Este campo es requerido');
            return false;
        }

        // Si el campo está vacío y no es requerido, está ok
        if (!value && !rules.required) {
            return true;
        }

        // Validar longitud mínima
        if (rules.minLength && value.length < rules.minLength) {
            this.showFieldError(field, `Mínimo ${rules.minLength} caracteres`);
            return false;
        }

        // Validar longitud máxima
        if (rules.maxLength && value.length > rules.maxLength) {
            this.showFieldError(field, `Máximo ${rules.maxLength} caracteres`);
            return false;
        }

        // Validar patrón
        if (rules.pattern && !rules.pattern.test(value)) {
            let message = 'Formato inválido';
            if (fieldName === 'email') message = 'Email inválido';
            if (fieldName === 'telefono') message = 'Teléfono inválido';
            if (fieldName === 'nombre') message = 'Solo letras y espacios';
            this.showFieldError(field, message);
            return false;
        }

        // Si llegamos aquí, el campo es válido
        this.showFieldSuccess(field);
        return true;
    }

    showFieldError(field, message) {
        field.classList.add('error');
        field.classList.remove('success');
        
        const errorDiv = field.parentNode.querySelector('.field-error') || document.createElement('div');
        errorDiv.className = 'field-error';
        errorDiv.textContent = message;
        
        if (!field.parentNode.querySelector('.field-error')) {
            field.parentNode.appendChild(errorDiv);
        }
    }

    showFieldSuccess(field) {
        field.classList.add('success');
        field.classList.remove('error');
    }

    clearFieldError(field) {
        field.classList.remove('error', 'success');
        const errorDiv = field.parentNode.querySelector('.field-error');
        if (errorDiv) {
            errorDiv.remove();
        }
    }

    async handleFormSubmit(e) {
        e.preventDefault();
        
        const form = e.target;
        const formData = new FormData(form);
        const submitBtn = form.querySelector('button[type="submit"]');
        
        // Validar todos los campos
        let isValid = true;
        const fields = form.querySelectorAll('input, textarea');
        fields.forEach(field => {
            if (!this.validateField(field)) {
                isValid = false;
            }
        });

        if (!isValid) {
            this.showMessage('Por favor corrige los errores en el formulario', 'error');
            return;
        }

        // Mostrar loading
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Enviando...';
        submitBtn.disabled = true;

        try {
            // Simular envío del formulario (aquí iría la petición real)
            await this.submitForm(formData);
            
            // Éxito
            this.showMessage('¡Mensaje enviado correctamente! Te contactaremos pronto.', 'success');
            form.reset();
            
            // Limpiar estados de validación
            fields.forEach(field => this.clearFieldError(field));
            
        } catch (error) {
            console.error('Error al enviar formulario:', error);
            this.showMessage('Error al enviar el mensaje. Intenta de nuevo.', 'error');
        } finally {
            // Restaurar botón
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }
    }

    async submitForm(formData) {
        // Simular petición AJAX (reemplazar con llamada real)
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                // Simulamos éxito en el 90% de los casos
                if (Math.random() > 0.1) {
                    resolve();
                } else {
                    reject(new Error('Error simulado'));
                }
            }, 2000);
        });
    }

    showMessage(message, type) {
        // Crear elemento de mensaje
        const messageDiv = document.createElement('div');
        messageDiv.className = `alert alert-${type}`;
        messageDiv.textContent = message;

        // Insertar al inicio del formulario
        const form = document.getElementById('contactForm');
        form.insertBefore(messageDiv, form.firstChild);

        // Auto-remover después de 5 segundos
        setTimeout(() => {
            if (messageDiv.parentNode) {
                messageDiv.remove();
            }
        }, 5000);

        // Scroll al mensaje
        messageDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    handleWhatsAppClick(e) {
        e.preventDefault();
        const phoneNumber = '1234567890'; // Reemplazar con número real
        const message = encodeURIComponent('Hola, estoy interesado en sus servicios de Future Work.');
        const whatsappUrl = `https://wa.me/${phoneNumber}?text=${message}`;
        window.open(whatsappUrl, '_blank');
        
        // Analytics
        this.trackEvent('contact', 'whatsapp_click');
    }

    handleSocialClick(e) {
        const socialNetwork = e.currentTarget.getAttribute('data-social');
        this.trackEvent('social', `${socialNetwork}_click`);
    }

    initMapInteraction() {
        const mapContainer = document.querySelector('.mapa-container');
        if (mapContainer) {
            mapContainer.addEventListener('click', this.handleMapClick.bind(this));
        }
    }

    handleMapClick(e) {
        // Abrir en Google Maps
        const address = encodeURIComponent('Madrid, España'); // Reemplazar con dirección real
        const mapsUrl = `https://www.google.com/maps/search/?api=1&query=${address}`;
        window.open(mapsUrl, '_blank');
        
        this.trackEvent('contact', 'map_click');
    }

    // Función para tracking de eventos (Google Analytics, etc.)
    trackEvent(category, action, label = '') {
        if (typeof gtag !== 'undefined') {
            gtag('event', action, {
                event_category: category,
                event_label: label
            });
        }
        console.log(`Event: ${category} - ${action} - ${label}`);
    }
}

// Utilidades adicionales
const ContactoUtils = {
    // Formatear número de teléfono
    formatPhone(phone) {
        return phone.replace(/\D/g, '').replace(/(\d{3})(\d{3})(\d{4})/, '($1) $2-$3');
    },

    // Validar email más robusta
    isValidEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    },

    // Escapar HTML para seguridad
    escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }
};

// Inicializar cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', () => {
    new ContactoManager();
    
    // Efectos adicionales
    ContactoEffects.init();
});

// Efectos visuales adicionales
const ContactoEffects = {
    init() {
        this.initScrollAnimations();
        this.initHoverEffects();
    },

    initScrollAnimations() {
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observar elementos que se animan al scroll
        const animatedElements = document.querySelectorAll('.info-card, .form-group');
        animatedElements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    },

    initHoverEffects() {
        // Efecto hover en botones sociales
        const socialBtns = document.querySelectorAll('.social-btn');
        socialBtns.forEach(btn => {
            btn.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-3px)';
            });
            
            btn.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });
    }
};