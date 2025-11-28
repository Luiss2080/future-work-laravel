// ==========================================================================
// AUTH JS - Future Work
// ==========================================================================

document.addEventListener('DOMContentLoaded', function() {
    // Mejorar experiencia de usuario en formularios de autenticación
    initAuthForms();
});

function initAuthForms() {
    const authForms = document.querySelectorAll('.auth-form');
    
    authForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"]');
            
            if (submitBtn) {
                // Deshabilitar botón y mostrar loading
                submitBtn.disabled = true;
                submitBtn.classList.add('btn-loading');
                
                const originalText = submitBtn.innerHTML;
                const isLogin = submitBtn.innerHTML.includes('Iniciar Sesión');
                const isRegister = submitBtn.innerHTML.includes('Crear Mi Cuenta');
                
                if (isLogin) {
                    submitBtn.innerHTML = `
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <i class="fas fa-sign-in-alt me-2"></i>
                        Iniciando sesión...
                    `;
                } else if (isRegister) {
                    submitBtn.innerHTML = `
                        <div class="spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <i class="fas fa-user-plus me-2"></i>
                        Creando cuenta...
                    `;
                }
                
                // Restaurar si hay error después de 5 segundos
                setTimeout(() => {
                    if (submitBtn.disabled) {
                        submitBtn.disabled = false;
                        submitBtn.classList.remove('btn-loading');
                        submitBtn.innerHTML = originalText;
                    }
                }, 5000);
            }
        });
    });
    
    // Efectos en inputs
    const formInputs = document.querySelectorAll('.auth-form .form-control');
    formInputs.forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('focused');
        });
    });
    
    // Validación en tiempo real
    const passwordInput = document.querySelector('input[name="password"]');
    const confirmPasswordInput = document.querySelector('input[name="password_confirmation"]');
    
    if (passwordInput && confirmPasswordInput) {
        confirmPasswordInput.addEventListener('input', function() {
            if (this.value && passwordInput.value !== this.value) {
                this.setCustomValidity('Las contraseñas no coinciden');
            } else {
                this.setCustomValidity('');
            }
        });
    }
}