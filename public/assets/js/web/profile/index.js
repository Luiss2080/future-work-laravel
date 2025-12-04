// Profile Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Elementos del DOM
    const navItems = document.querySelectorAll('.nav-item');
    const sections = document.querySelectorAll('.profile-section');
    const changeAvatarBtn = document.querySelector('.change-avatar-btn');
    const profileForm = document.querySelector('.profile-form');

    // Navegación entre secciones
    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remover clase activa de todos los items
            navItems.forEach(nav => nav.classList.remove('active'));
            sections.forEach(section => section.classList.remove('active'));
            
            // Agregar clase activa al item clickeado
            this.classList.add('active');
            
            // Mostrar la sección correspondiente
            const targetId = this.getAttribute('href').substring(1);
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                targetSection.classList.add('active');
            }
        });
    });

    // Cambio de avatar
    if (changeAvatarBtn) {
        changeAvatarBtn.addEventListener('click', function() {
            // Crear input file dinámicamente
            const fileInput = document.createElement('input');
            fileInput.type = 'file';
            fileInput.accept = 'image/*';
            fileInput.style.display = 'none';
            
            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        const avatarImg = document.querySelector('.avatar-img');
                        if (avatarImg) {
                            avatarImg.src = e.target.result;
                        }
                    };
                    reader.readAsDataURL(file);
                }
                // Remover el input después de usar
                document.body.removeChild(fileInput);
            });
            
            document.body.appendChild(fileInput);
            fileInput.click();
        });
    }

    // Manejo del formulario de perfil
    if (profileForm) {
        profileForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Mostrar indicador de carga
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Guardando...';
            submitBtn.disabled = true;
            
            // Simular envío de datos (aquí iría la lógica AJAX real)
            setTimeout(() => {
                // Simular respuesta exitosa
                showNotification('Perfil actualizado correctamente', 'success');
                
                // Restaurar botón
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }, 1500);
        });
    }

    // Botones para agregar experiencia, educación, etc.
    const addExperienceBtn = document.querySelector('.experience-list + .btn-outline');
    if (addExperienceBtn) {
        addExperienceBtn.addEventListener('click', function(e) {
            e.preventDefault();
            showAddExperienceModal();
        });
    }

    // Función para mostrar notificaciones
    function showNotification(message, type = 'info') {
        // Crear elemento de notificación
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 1rem 1.5rem;
            background: ${type === 'success' ? '#4CAF50' : '#2196F3'};
            color: white;
            border-radius: 8px;
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        `;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        // Mostrar notificación
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        // Ocultar después de 3 segundos
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                document.body.removeChild(notification);
            }, 300);
        }, 3000);
    }

    // Función para mostrar modal de agregar experiencia
    function showAddExperienceModal() {
        // Aquí iría la lógica para mostrar un modal
        // Por ahora solo mostramos una notificación
        showNotification('Funcionalidad de agregar experiencia en desarrollo', 'info');
    }

    // Validación en tiempo real de campos
    const inputs = document.querySelectorAll('input, textarea');
    inputs.forEach(input => {
        input.addEventListener('blur', function() {
            validateField(this);
        });
    });

    function validateField(field) {
        const value = field.value.trim();
        const fieldName = field.name;
        
        // Remover clases de validación previas
        field.classList.remove('field-error', 'field-success');
        
        // Validaciones básicas
        if (fieldName === 'full_name' && value.length < 2) {
            field.classList.add('field-error');
            return false;
        }
        
        if (fieldName === 'phone' && value && !/^\+?[\d\s-()]+$/.test(value)) {
            field.classList.add('field-error');
            return false;
        }
        
        if (value) {
            field.classList.add('field-success');
        }
        
        return true;
    }

    // Progreso de completado del perfil
    function updateProfileCompletion() {
        const requiredFields = ['full_name', 'phone', 'location', 'bio'];
        const completedFields = requiredFields.filter(field => {
            const input = document.querySelector(`[name="${field}"]`);
            return input && input.value.trim() !== '';
        });
        
        const completionPercentage = Math.round((completedFields.length / requiredFields.length) * 100);
        
        // Actualizar barra de progreso si existe
        const progressFill = document.querySelector('.progress-fill');
        if (progressFill) {
            progressFill.style.width = `${completionPercentage}%`;
        }
        
        return completionPercentage;
    }

    // Actualizar progreso inicial
    updateProfileCompletion();

    // Auto-guardar cambios (opcional)
    let autoSaveTimeout;
    inputs.forEach(input => {
        input.addEventListener('input', function() {
            clearTimeout(autoSaveTimeout);
            autoSaveTimeout = setTimeout(() => {
                // Aquí iría la lógica de auto-guardado
                console.log('Auto-guardando cambios...');
            }, 2000);
        });
    });
});