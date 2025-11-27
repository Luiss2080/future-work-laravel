// ==========================================================================
//   CONTACT PAGE JS - Future Work
// ==========================================================================

class ContactPage {
    constructor() {
        this.init();
    }

    init() {
        this.bindEvents();
        this.initializeForm();
    }

    bindEvents() {
        const form = document.getElementById('contactForm');
        if (form) {
            form.addEventListener('submit', this.handleSubmit.bind(this));
        }
    }

    initializeForm() {
        const inputs = document.querySelectorAll('.contact-form input, .contact-form textarea');
        inputs.forEach(input => {
            input.addEventListener('blur', this.validateField.bind(this));
            input.addEventListener('input', this.clearErrors.bind(this));
        });
    }

    handleSubmit(e) {
        e.preventDefault();
        
        const form = e.target;
        const formData = new FormData(form);
        
        if (this.validateForm(form)) {
            this.submitForm(formData);
        }
    }

    validateForm(form) {
        let isValid = true;
        const requiredFields = form.querySelectorAll('[required]');
        
        requiredFields.forEach(field => {
            if (!this.validateField({ target: field })) {
                isValid = false;
            }
        });
        
        return isValid;
    }

    validateField(e) {
        const field = e.target;
        const value = field.value.trim();
        const fieldType = field.type;
        const fieldName = field.name;
        
        let isValid = true;
        let message = '';
        
        // Clear previous errors
        this.clearFieldError(field);
        
        // Check if required field is empty
        if (field.hasAttribute('required') && !value) {
            isValid = false;
            message = 'Este campo es requerido';
        }
        
        // Validate email
        if (fieldType === 'email' && value) {
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(value)) {
                isValid = false;
                message = 'Ingrese un email válido';
            }
        }
        
        // Validate phone
        if (fieldName === 'telefono' && value) {
            const phoneRegex = /^[\d\s\-\+\(\)]{8,}$/;
            if (!phoneRegex.test(value)) {
                isValid = false;
                message = 'Ingrese un teléfono válido';
            }
        }
        
        if (!isValid) {
            this.showFieldError(field, message);
        }
        
        return isValid;
    }

    showFieldError(field, message) {
        field.classList.add('is-invalid');
        
        let errorDiv = field.nextElementSibling;
        if (!errorDiv || !errorDiv.classList.contains('invalid-feedback')) {
            errorDiv = document.createElement('div');
            errorDiv.classList.add('invalid-feedback');
            field.parentNode.insertBefore(errorDiv, field.nextSibling);
        }
        
        errorDiv.textContent = message;
    }

    clearFieldError(field) {
        field.classList.remove('is-invalid');
        
        const errorDiv = field.nextElementSibling;
        if (errorDiv && errorDiv.classList.contains('invalid-feedback')) {
            errorDiv.remove();
        }
    }

    clearErrors(e) {
        const field = e.target;
        if (field.classList.contains('is-invalid') && field.value.trim()) {
            this.clearFieldError(field);
        }
    }

    async submitForm(formData) {
        const submitBtn = document.querySelector('.contact-form button[type="submit"]');
        const originalText = submitBtn.textContent;
        
        try {
            // Show loading state
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Enviando...';
            
            // Simulate API call (replace with actual endpoint)
            await this.simulateApiCall(formData);
            
            // Show success message
            this.showSuccessMessage();
            
            // Reset form
            document.getElementById('contactForm').reset();
            
        } catch (error) {
            console.error('Error submitting form:', error);
            this.showErrorMessage('Error al enviar el mensaje. Por favor intente nuevamente.');
            
        } finally {
            // Restore button
            submitBtn.disabled = false;
            submitBtn.textContent = originalText;
        }
    }

    simulateApiCall(formData) {
        return new Promise((resolve) => {
            setTimeout(() => {
                console.log('Form data:', Object.fromEntries(formData));
                resolve();
            }, 2000);
        });
    }

    showSuccessMessage() {
        const alert = document.createElement('div');
        alert.className = 'alert alert-success alert-dismissible fade show';
        alert.innerHTML = `
            <i class="fas fa-check-circle me-2"></i>
            ¡Mensaje enviado con éxito! Te contactaremos pronto.
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        const form = document.getElementById('contactForm');
        form.parentNode.insertBefore(alert, form);
        
        // Auto-remove after 5 seconds
        setTimeout(() => {
            if (alert.parentNode) {
                alert.remove();
            }
        }, 5000);
    }

    showErrorMessage(message) {
        const alert = document.createElement('div');
        alert.className = 'alert alert-danger alert-dismissible fade show';
        alert.innerHTML = `
            <i class="fas fa-exclamation-circle me-2"></i>
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        const form = document.getElementById('contactForm');
        form.parentNode.insertBefore(alert, form);
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new ContactPage();
});