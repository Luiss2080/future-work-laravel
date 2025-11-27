// ==========================================================================
// AUTH MODAL JS - Future Work
// ==========================================================================

class AuthModal {
    constructor() {
        this.loginForm = document.getElementById('loginForm');
        this.loginModal = document.getElementById('loginModal');
        
        this.init();
    }

    init() {
        if (this.loginForm) {
            this.loginForm.addEventListener('submit', (e) => this.handleLogin(e));
        }
    }

    async handleLogin(e) {
        e.preventDefault();
        
        const formData = new FormData(this.loginForm);
        const submitBtn = this.loginForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        
        // Disable form
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Iniciando sesión...';
        
        try {
            const response = await fetch(this.loginForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': window.FutureWork.csrfToken
                }
            });
            
            const data = await response.json();
            
            if (response.ok && data.success) {
                // Show success message
                this.showMessage('Inicio de sesión exitoso', 'success');
                
                // Close modal
                const modal = bootstrap.Modal.getInstance(this.loginModal);
                if (modal) {
                    modal.hide();
                }
                
                // Redirect based on user type
                setTimeout(() => {
                    if (data.redirect) {
                        window.location.href = data.redirect;
                    } else if (data.user && data.user.tipo_usuario === 'admin') {
                        window.location.href = '/admin/dashboard';
                    } else {
                        window.location.href = '/admin/dashboard';
                    }
                }, 1000);
                
            } else {
                // Show error message
                this.showMessage(data.message || 'Error en el inicio de sesión', 'error');
            }
            
        } catch (error) {
            console.error('Login error:', error);
            this.showMessage('Error de conexión. Intenta de nuevo.', 'error');
        } finally {
            // Re-enable form
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalText;
        }
    }

    showMessage(message, type) {
        // Remove existing alerts
        const existingAlerts = this.loginModal.querySelectorAll('.alert');
        existingAlerts.forEach(alert => alert.remove());
        
        // Create new alert
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${type === 'success' ? 'success' : 'danger'} alert-dismissible fade show`;
        alertDiv.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        // Insert alert at the top of modal body
        const modalBody = this.loginModal.querySelector('.modal-body');
        modalBody.insertBefore(alertDiv, modalBody.firstChild);
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new AuthModal();
});