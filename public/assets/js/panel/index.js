// Dashboard JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Elementos del DOM
    const statCards = document.querySelectorAll('.stat-card');
    const jobCards = document.querySelectorAll('.job-card');
    const applicationItems = document.querySelectorAll('.application-item');
    const actionButtons = document.querySelectorAll('.action-btn');

    // Animación de contadores en las tarjetas de estadísticas
    function animateCounters() {
        statCards.forEach(card => {
            const numberElement = card.querySelector('h3');
            const finalNumber = parseInt(numberElement.textContent);
            const duration = 1500; // 1.5 segundos
            const steps = 30;
            const increment = finalNumber / steps;
            let currentNumber = 0;
            let step = 0;

            const counter = setInterval(() => {
                step++;
                currentNumber += increment;
                
                if (step >= steps) {
                    currentNumber = finalNumber;
                    clearInterval(counter);
                }
                
                numberElement.textContent = Math.round(currentNumber);
            }, duration / steps);
        });
    }

    // Intersection Observer para animar contadores cuando entren en vista
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                entry.target.classList.add('animated');
                setTimeout(animateCounters, 200);
            }
        });
    });

    // Observar las tarjetas de estadísticas
    const statsContainer = document.querySelector('.dashboard-stats');
    if (statsContainer) {
        observer.observe(statsContainer);
    }

    // Manejo de clicks en tarjetas de trabajo
    jobCards.forEach(card => {
        const applyBtn = card.querySelector('.btn-primary');
        if (applyBtn) {
            applyBtn.addEventListener('click', function(e) {
                e.preventDefault();
                handleJobApplication(card);
            });
        }
    });

    // Manejo de aplicaciones
    function handleJobApplication(jobCard) {
        const jobTitle = jobCard.querySelector('h3').textContent;
        const company = jobCard.querySelector('.company').textContent;
        
        // Mostrar modal de confirmación o redirigir
        if (confirm(`¿Deseas aplicar al puesto de ${jobTitle} en ${company}?`)) {
            // Simular aplicación
            const btn = jobCard.querySelector('.btn-primary');
            const originalText = btn.textContent;
            
            btn.textContent = 'Aplicando...';
            btn.disabled = true;
            
            setTimeout(() => {
                btn.textContent = 'Aplicado';
                btn.classList.remove('btn-primary');
                btn.classList.add('btn-success');
                btn.disabled = true;
                
                showNotification('Aplicación enviada correctamente', 'success');
                updateApplicationsCount();
            }, 1500);
        }
    }

    // Manejo de elementos de aplicación
    applicationItems.forEach(item => {
        item.addEventListener('click', function() {
            // Marcar como visto
            this.classList.add('viewed');
            
            // Aquí se podría abrir un modal con más detalles
            const jobTitle = this.querySelector('h3').textContent;
            console.log(`Ver detalles de: ${jobTitle}`);
        });
    });

    // Acciones rápidas
    actionButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const action = this.querySelector('i').className;
            handleQuickAction(action, this);
        });
    });

    function handleQuickAction(actionClass, button) {
        const actions = {
            'fa-upload': () => {
                // Subir CV
                createFileUploader();
            },
            'fa-search': () => {
                // Buscar empleos
                window.location.href = '/bolsa-trabajo';
            },
            'fa-user-edit': () => {
                // Editar perfil
                window.location.href = '/perfil';
            }
        };

        const actionKey = Object.keys(actions).find(key => actionClass.includes(key.replace('fa-', '')));
        if (actionKey && actions[actionKey]) {
            actions[actionKey]();
        }
    }

    // Crear uploader de archivos
    function createFileUploader() {
        const fileInput = document.createElement('input');
        fileInput.type = 'file';
        fileInput.accept = '.pdf,.doc,.docx';
        fileInput.style.display = 'none';
        
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                uploadCV(file);
            }
            document.body.removeChild(fileInput);
        });
        
        document.body.appendChild(fileInput);
        fileInput.click();
    }

    function uploadCV(file) {
        // Simular subida de CV
        showNotification('Subiendo CV...', 'info');
        
        setTimeout(() => {
            showNotification('CV actualizado correctamente', 'success');
            updateProfileCompletion();
        }, 2000);
    }

    // Actualizar contador de aplicaciones
    function updateApplicationsCount() {
        const applicationsCard = document.querySelector('.stat-card:first-child h3');
        if (applicationsCard) {
            const currentCount = parseInt(applicationsCard.textContent);
            applicationsCard.textContent = currentCount + 1;
        }
    }

    // Actualizar progreso del perfil
    function updateProfileCompletion() {
        const progressFill = document.querySelector('.progress-fill');
        const progressText = document.querySelector('.profile-completion p');
        
        if (progressFill && progressText) {
            const currentWidth = parseInt(progressFill.style.width) || 75;
            const newWidth = Math.min(currentWidth + 5, 100);
            
            progressFill.style.width = `${newWidth}%`;
            progressText.textContent = `${newWidth}% completado`;
        }
    }

    // Sistema de notificaciones
    function showNotification(message, type = 'info') {
        const notification = document.createElement('div');
        notification.className = `notification notification-${type}`;
        
        const styles = {
            'info': { bg: '#2196F3', color: '#fff' },
            'success': { bg: '#4CAF50', color: '#fff' },
            'warning': { bg: '#FF9800', color: '#fff' },
            'error': { bg: '#F44336', color: '#fff' }
        };
        
        const style = styles[type] || styles.info;
        
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 1rem 1.5rem;
            background: ${style.bg};
            color: ${style.color};
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
            max-width: 300px;
        `;
        notification.textContent = message;
        
        document.body.appendChild(notification);
        
        setTimeout(() => {
            notification.style.transform = 'translateX(0)';
        }, 100);
        
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => {
                if (document.body.contains(notification)) {
                    document.body.removeChild(notification);
                }
            }, 300);
        }, 3000);
    }

    // Cargar datos del dashboard de forma asíncrona
    function loadDashboardData() {
        // Simular carga de datos
        const loadingElements = document.querySelectorAll('[data-loading]');
        
        loadingElements.forEach(element => {
            element.style.opacity = '0.5';
        });

        setTimeout(() => {
            loadingElements.forEach(element => {
                element.style.opacity = '1';
                element.removeAttribute('data-loading');
            });
        }, 1000);
    }

    // Filtros para las aplicaciones
    const filterButtons = document.querySelectorAll('[data-filter]');
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.dataset.filter;
            filterApplications(filter);
        });
    });

    function filterApplications(filter) {
        applicationItems.forEach(item => {
            const status = item.querySelector('.status')?.textContent.toLowerCase() || '';
            
            if (filter === 'all' || status.includes(filter)) {
                item.style.display = 'flex';
            } else {
                item.style.display = 'none';
            }
        });
    }

    // Búsqueda en tiempo real
    const searchInput = document.querySelector('#dashboard-search');
    if (searchInput) {
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            jobCards.forEach(card => {
                const jobTitle = card.querySelector('h3').textContent.toLowerCase();
                const company = card.querySelector('.company').textContent.toLowerCase();
                
                if (jobTitle.includes(searchTerm) || company.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    }

    // Inicializar dashboard
    loadDashboardData();
    
    // Mensaje de bienvenida
    setTimeout(() => {
        const userName = document.querySelector('.dashboard-header p').textContent.split(', ')[1];
        if (userName && userName !== 'Usuario') {
            showNotification(`¡Bienvenido ${userName}!`, 'info');
        }
    }, 500);
});