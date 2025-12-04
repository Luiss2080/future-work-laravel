/* JavaScript para página de Subir CV */

class CVManager {
    constructor() {
        this.maxFileSize = 5 * 1024 * 1024; // 5MB
        this.allowedTypes = ['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'];
        this.currentFile = null;
        
        this.initEventListeners();
        this.initFileUpload();
        this.initFormValidation();
    }

    initEventListeners() {
        const form = document.getElementById('cvForm');
        if (form) {
            form.addEventListener('submit', this.handleFormSubmit.bind(this));
        }

        // Validación en tiempo real
        const inputs = document.querySelectorAll('#cvForm input, #cvForm select, #cvForm textarea');
        inputs.forEach(input => {
            if (input.type !== 'checkbox' && input.type !== 'file') {
                input.addEventListener('blur', () => this.validateField(input));
                input.addEventListener('input', () => this.clearFieldError(input));
            }
        });

        // Checkbox de términos
        const privacidadCheck = document.getElementById('privacidad');
        if (privacidadCheck) {
            privacidadCheck.addEventListener('change', this.validatePrivacyCheck.bind(this));
        }
    }

    initFileUpload() {
        const uploadArea = document.getElementById('fileUploadArea');
        const fileInput = document.getElementById('cvFile');
        const removeBtn = document.getElementById('removeFile');

        if (uploadArea && fileInput) {
            // Click en área de upload
            uploadArea.addEventListener('click', () => fileInput.click());

            // Eventos de drag & drop
            uploadArea.addEventListener('dragover', this.handleDragOver.bind(this));
            uploadArea.addEventListener('dragleave', this.handleDragLeave.bind(this));
            uploadArea.addEventListener('drop', this.handleFileDrop.bind(this));

            // Change en input file
            fileInput.addEventListener('change', this.handleFileSelect.bind(this));

            // Botón remover archivo
            if (removeBtn) {
                removeBtn.addEventListener('click', this.removeFile.bind(this));
            }
        }
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
                required: true,
                pattern: /^[\d\s\-\+\(\)]+$/,
                minLength: 9
            },
            ciudad: {
                required: true,
                minLength: 2
            },
            profesion: {
                required: true
            },
            experiencia: {
                required: true
            },
            salario: {
                required: false,
                min: 800,
                max: 10000
            },
            descripcion: {
                required: false,
                minLength: 10,
                maxLength: 500
            }
        };
    }

    handleDragOver(e) {
        e.preventDefault();
        e.stopPropagation();
        e.currentTarget.classList.add('dragover');
    }

    handleDragLeave(e) {
        e.preventDefault();
        e.stopPropagation();
        e.currentTarget.classList.remove('dragover');
    }

    handleFileDrop(e) {
        e.preventDefault();
        e.stopPropagation();
        e.currentTarget.classList.remove('dragover');
        
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            this.processFile(files[0]);
        }
    }

    handleFileSelect(e) {
        const file = e.target.files[0];
        if (file) {
            this.processFile(file);
        }
    }

    processFile(file) {
        // Validar tipo de archivo
        if (!this.allowedTypes.includes(file.type)) {
            this.showFileError('Tipo de archivo no válido. Solo se permiten PDF, DOC y DOCX.');
            return;
        }

        // Validar tamaño
        if (file.size > this.maxFileSize) {
            this.showFileError('El archivo es demasiado grande. Máximo 5MB.');
            return;
        }

        // Archivo válido
        this.currentFile = file;
        this.showFilePreview(file);
        this.clearFileError();
        
        this.trackEvent('cv_upload', 'file_selected', file.type);
    }

    showFilePreview(file) {
        const preview = document.getElementById('filePreview');
        const uploadArea = document.getElementById('fileUploadArea');
        
        if (preview) {
            const fileName = preview.querySelector('.file-name');
            const fileSize = preview.querySelector('.file-size');
            
            if (fileName) fileName.textContent = file.name;
            if (fileSize) fileSize.textContent = this.formatFileSize(file.size);
            
            preview.style.display = 'block';
            uploadArea.style.display = 'none';
        }
    }

    removeFile() {
        this.currentFile = null;
        const preview = document.getElementById('filePreview');
        const uploadArea = document.getElementById('fileUploadArea');
        const fileInput = document.getElementById('cvFile');
        
        if (preview) preview.style.display = 'none';
        if (uploadArea) uploadArea.style.display = 'block';
        if (fileInput) fileInput.value = '';
        
        this.trackEvent('cv_upload', 'file_removed');
    }

    showFileError(message) {
        const uploadArea = document.getElementById('fileUploadArea');
        let errorDiv = uploadArea.querySelector('.file-error');
        
        if (!errorDiv) {
            errorDiv = document.createElement('div');
            errorDiv.className = 'file-error';
            uploadArea.appendChild(errorDiv);
        }
        
        errorDiv.textContent = message;
        uploadArea.classList.add('error');
        
        setTimeout(() => this.clearFileError(), 5000);
    }

    clearFileError() {
        const uploadArea = document.getElementById('fileUploadArea');
        const errorDiv = uploadArea.querySelector('.file-error');
        
        if (errorDiv) errorDiv.remove();
        uploadArea.classList.remove('error');
    }

    validateField(field) {
        const fieldName = field.name;
        const value = field.value.trim();
        const rules = this.validationRules[fieldName];
        
        if (!rules) return true;

        this.clearFieldError(field);

        // Campo requerido
        if (rules.required && !value) {
            this.showFieldError(field, 'Este campo es requerido');
            return false;
        }

        // Si está vacío y no es requerido, está ok
        if (!value && !rules.required) {
            return true;
        }

        // Longitud mínima
        if (rules.minLength && value.length < rules.minLength) {
            this.showFieldError(field, `Mínimo ${rules.minLength} caracteres`);
            return false;
        }

        // Longitud máxima
        if (rules.maxLength && value.length > rules.maxLength) {
            this.showFieldError(field, `Máximo ${rules.maxLength} caracteres`);
            return false;
        }

        // Patrón
        if (rules.pattern && !rules.pattern.test(value)) {
            let message = 'Formato inválido';
            if (fieldName === 'email') message = 'Email inválido';
            if (fieldName === 'telefono') message = 'Teléfono inválido';
            if (fieldName === 'nombre') message = 'Solo letras y espacios';
            this.showFieldError(field, message);
            return false;
        }

        // Valor mínimo/máximo (para números)
        if (field.type === 'number') {
            const numValue = parseFloat(value);
            if (rules.min && numValue < rules.min) {
                this.showFieldError(field, `Valor mínimo: ${rules.min}`);
                return false;
            }
            if (rules.max && numValue > rules.max) {
                this.showFieldError(field, `Valor máximo: ${rules.max}`);
                return false;
            }
        }

        this.showFieldSuccess(field);
        return true;
    }

    validatePrivacyCheck() {
        const checkbox = document.getElementById('privacidad');
        if (checkbox && !checkbox.checked) {
            this.showMessage('Debes aceptar la política de privacidad', 'error');
            return false;
        }
        return true;
    }

    showFieldError(field, message) {
        field.classList.add('error');
        field.classList.remove('success');
        
        let errorDiv = field.parentNode.querySelector('.field-error');
        if (!errorDiv) {
            errorDiv = document.createElement('span');
            errorDiv.className = 'field-error';
            field.parentNode.appendChild(errorDiv);
        }
        errorDiv.textContent = message;
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
        const submitBtn = form.querySelector('button[type="submit"]');
        
        // Validar todos los campos
        let isValid = true;
        const fields = form.querySelectorAll('input:not([type="checkbox"]):not([type="file"]), select, textarea');
        fields.forEach(field => {
            if (!this.validateField(field)) {
                isValid = false;
            }
        });

        // Validar checkbox de privacidad
        if (!this.validatePrivacyCheck()) {
            isValid = false;
        }

        // Validar archivo
        if (!this.currentFile) {
            this.showFileError('Debes subir un archivo CV');
            isValid = false;
        }

        if (!isValid) {
            this.showMessage('Por favor corrige los errores en el formulario', 'error');
            return;
        }

        // Mostrar loading
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Subiendo CV...';
        submitBtn.disabled = true;

        try {
            // Crear FormData
            const formData = new FormData(form);
            if (this.currentFile) {
                formData.append('cv_file', this.currentFile);
            }

            // Simular upload
            await this.uploadCV(formData);
            
            // Éxito
            this.showMessage('¡CV subido exitosamente! Te contactaremos pronto.', 'success');
            this.resetForm(form);
            
            this.trackEvent('cv_upload', 'form_submitted', 'success');
            
        } catch (error) {
            console.error('Error al subir CV:', error);
            this.showMessage('Error al subir el CV. Intenta de nuevo.', 'error');
            this.trackEvent('cv_upload', 'form_submitted', 'error');
        } finally {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }
    }

    async uploadCV(formData) {
        // Simular petición de upload
        return new Promise((resolve, reject) => {
            setTimeout(() => {
                if (Math.random() > 0.1) { // 90% de éxito
                    resolve();
                } else {
                    reject(new Error('Error simulado'));
                }
            }, 3000);
        });
    }

    resetForm(form) {
        form.reset();
        this.removeFile();
        
        // Limpiar estados de validación
        const fields = form.querySelectorAll('input, select, textarea');
        fields.forEach(field => this.clearFieldError(field));
    }

    showMessage(message, type) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `alert alert-${type}`;
        messageDiv.textContent = message;

        const form = document.getElementById('cvForm');
        form.insertBefore(messageDiv, form.firstChild);

        setTimeout(() => {
            if (messageDiv.parentNode) {
                messageDiv.remove();
            }
        }, 5000);

        messageDiv.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    formatFileSize(bytes) {
        if (bytes === 0) return '0 Bytes';
        const k = 1024;
        const sizes = ['Bytes', 'KB', 'MB', 'GB'];
        const i = Math.floor(Math.log(bytes) / Math.log(k));
        return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }

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

// Utilidades CV
const CVUtils = {
    // Analizar tipo de profesión para sugerir mejoras
    getProfessionTips(profession) {
        const tips = {
            'construccion': [
                'Incluye certificaciones de seguridad laboral',
                'Menciona proyectos específicos realizados',
                'Destaca conocimientos en normativas'
            ],
            'arquitectura': [
                'Incluye portfolio de proyectos',
                'Menciona software que manejas (AutoCAD, Revit)',
                'Destaca premios o reconocimientos'
            ],
            'ingenieria': [
                'Incluye certificaciones profesionales',
                'Menciona proyectos técnicos complejos',
                'Destaca habilidades en software especializado'
            ]
        };
        
        return tips[profession] || [
            'Mantén tu CV actualizado',
            'Incluye logros cuantificables',
            'Usa palabras clave relevantes'
        ];
    },

    // Validar formato de teléfono español
    validateSpanishPhone(phone) {
        const cleaned = phone.replace(/\s+/g, '');
        const patterns = [
            /^(\+34|0034)?[6789]\d{8}$/, // Móvil español
            /^(\+34|0034)?[89]\d{8}$/, // Fijo español
            /^(\+34|0034)?9[0-9]\d{7}$/ // Otros fijos
        ];
        
        return patterns.some(pattern => pattern.test(cleaned));
    },

    // Sugerir mejoras en salario según experiencia y profesión
    getSalaryRange(profession, experience) {
        const ranges = {
            'construccion': { '0-1': [18000, 24000], '2-3': [24000, 30000], '4-5': [30000, 36000], '6-10': [36000, 45000], '10+': [45000, 60000] },
            'arquitectura': { '0-1': [24000, 30000], '2-3': [30000, 38000], '4-5': [38000, 45000], '6-10': [45000, 55000], '10+': [55000, 70000] },
            'ingenieria': { '0-1': [28000, 35000], '2-3': [35000, 42000], '4-5': [42000, 50000], '6-10': [50000, 60000], '10+': [60000, 80000] }
        };
        
        return ranges[profession]?.[experience] || [20000, 50000];
    }
};

// Efectos adicionales
const CVEffects = {
    init() {
        this.initScrollAnimations();
        this.initProgressIndicator();
        this.initSalaryHelper();
    },

    initScrollAnimations() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });

        const elements = document.querySelectorAll('.proceso-step, .consejo-card, .estadisticas-card');
        elements.forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(20px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    },

    initProgressIndicator() {
        const form = document.getElementById('cvForm');
        if (!form) return;
        
        // Crear indicador de progreso
        const progressContainer = document.createElement('div');
        progressContainer.className = 'form-progress';
        progressContainer.innerHTML = `
            <div class="progress-bar">
                <div class="progress-fill" style="width: 0%"></div>
            </div>
            <span class="progress-text">Completado: 0%</span>
        `;
        
        form.insertBefore(progressContainer, form.firstChild);
        
        // Actualizar progreso al cambiar campos
        const inputs = form.querySelectorAll('input[required], select[required], textarea[required]');
        inputs.forEach(input => {
            input.addEventListener('input', this.updateProgress.bind(this));
            input.addEventListener('change', this.updateProgress.bind(this));
        });
    },

    updateProgress() {
        const form = document.getElementById('cvForm');
        const requiredInputs = form.querySelectorAll('input[required], select[required], textarea[required]');
        const filledInputs = Array.from(requiredInputs).filter(input => {
            return input.type === 'checkbox' ? input.checked : input.value.trim() !== '';
        });
        
        const cvManager = window.cvManager;
        const hasFile = cvManager && cvManager.currentFile;
        const totalRequired = requiredInputs.length + (hasFile ? 1 : 0);
        const totalFilled = filledInputs.length + (hasFile ? 1 : 0);
        
        const percentage = Math.round((totalFilled / totalRequired) * 100);
        
        const progressFill = form.querySelector('.progress-fill');
        const progressText = form.querySelector('.progress-text');
        
        if (progressFill) progressFill.style.width = `${percentage}%`;
        if (progressText) progressText.textContent = `Completado: ${percentage}%`;
    },

    initSalaryHelper() {
        const profesionSelect = document.getElementById('profesion');
        const experienciaSelect = document.getElementById('experiencia');
        const salarioInput = document.getElementById('salario');
        
        if (profesionSelect && experienciaSelect && salarioInput) {
            const updateSalaryHelper = () => {
                const profession = profesionSelect.value;
                const experience = experienciaSelect.value;
                
                if (profession && experience) {
                    const range = CVUtils.getSalaryRange(profession, experience);
                    if (range && !salarioInput.value) {
                        salarioInput.placeholder = `Rango sugerido: €${range[0]} - €${range[1]}`;
                    }
                }
            };
            
            profesionSelect.addEventListener('change', updateSalaryHelper);
            experienciaSelect.addEventListener('change', updateSalaryHelper);
        }
    }
};

// CSS dinámico adicional
const CVStyles = {
    init() {
        const styles = document.createElement('style');
        styles.textContent = `
            .form-progress {
                margin-bottom: 2rem;
                padding: 1rem;
                background: var(--color-gray-50);
                border-radius: 8px;
            }
            
            .progress-bar {
                height: 8px;
                background: var(--color-gray-300);
                border-radius: 4px;
                overflow: hidden;
                margin-bottom: 0.5rem;
            }
            
            .progress-fill {
                height: 100%;
                background: linear-gradient(90deg, var(--color-primary), var(--color-secondary));
                transition: width 0.3s ease;
                border-radius: 4px;
            }
            
            .progress-text {
                font-size: 0.875rem;
                color: var(--color-gray-600);
                font-weight: 500;
            }
            
            .file-upload-area.error {
                border-color: var(--color-error);
                background: rgba(239, 68, 68, 0.05);
            }
            
            .file-error {
                color: var(--color-error);
                font-size: 0.875rem;
                margin-top: 0.5rem;
                text-align: center;
            }
        `;
        document.head.appendChild(styles);
    }
};

// Inicialización
document.addEventListener('DOMContentLoaded', () => {
    window.cvManager = new CVManager();
    CVEffects.init();
    CVStyles.init();
});