// ==========================================================================
// AUTH JS - Future Work
// ==========================================================================

document.addEventListener('DOMContentLoaded', function() {
    initAuthForms();
});

function initAuthForms() {
    const authForms = document.querySelectorAll('.auth-form');
    
    authForms.forEach(form => {
        form.addEventListener('submit', function(e) {
            const submitBtn = form.querySelector('button[type="submit"]');
            
            if (submitBtn) {
                submitBtn.disabled = true;
                const originalText = submitBtn.innerHTML;
                
                if (originalText.includes('Iniciar Sesión')) {
                    submitBtn.innerHTML = 'Iniciando sesión...';
                } else if (originalText.includes('Crear Cuenta')) {
                    submitBtn.innerHTML = 'Creando cuenta...';
                }
                
                // Restaurar si hay error después de 5 segundos
                setTimeout(() => {
                    if (submitBtn.disabled) {
                        submitBtn.disabled = false;
                        submitBtn.innerHTML = originalText;
                    }
                }, 5000);
            }
        });
    });
    
    // Validación de confirmación de contraseña
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