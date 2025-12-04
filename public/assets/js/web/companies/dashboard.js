// Company Dashboard JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Elementos del DOM
    const statCards = document.querySelectorAll('.stat-card');
    const jobRows = document.querySelectorAll('.jobs-table tbody tr');
    const applicationItems = document.querySelectorAll('.application-item');
    const actionButtons = document.querySelectorAll('.action-btn');

    // Animación de contadores en las estadísticas
    function animateCounters() {
        statCards.forEach(card => {
            const numberElement = card.querySelector('h3');
            const finalNumber = parseInt(numberElement.textContent);
            const duration = 1500;
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

    // Intersection Observer para animar contadores
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animated')) {
                entry.target.classList.add('animated');
                setTimeout(animateCounters, 200);
            }
        });
    });

    const statsContainer = document.querySelector('.dashboard-stats');
    if (statsContainer) {
        observer.observe(statsContainer);
    }

    // Manejo de botones de acción en la tabla de trabajos
    jobRows.forEach(row => {
        const editBtn = row.querySelector('.btn:first-of-type');
        const candidatesBtn = row.querySelector('.btn:last-of-type');
        
        if (editBtn) {
            editBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const jobTitle = row.querySelector('td:first-child').textContent;
                handleEditJob(jobTitle, row);
            });
        }
        
        if (candidatesBtn) {
            candidatesBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const jobTitle = row.querySelector('td:first-child').textContent;
                const candidateCount = row.querySelector('td:nth-child(2)').textContent;
                handleViewCandidates(jobTitle, candidateCount);
            });
        }
    });

    // Manejo de aplicaciones de candidatos
    applicationItems.forEach(item => {
        const viewProfileBtn = item.querySelector('.btn-outline-primary');
        const contactBtn = item.querySelector('.btn-primary');
        
        if (viewProfileBtn) {
            viewProfileBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const candidateName = item.querySelector('h4').textContent;
                handleViewProfile(candidateName);
            });
        }
        
        if (contactBtn) {
            contactBtn.addEventListener('click', function(e) {
                e.preventDefault();
                const candidateName = item.querySelector('h4').textContent;
                handleContactCandidate(candidateName, item);
            });
        }
    });

    // Acciones rápidas del sidebar
    actionButtons.forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const iconClass = this.querySelector('i').className;
            handleQuickAction(iconClass, this);
        });
    });

    // Funciones de manejo de acciones
    function handleEditJob(jobTitle, row) {
        showNotification(`Editando: ${jobTitle}`, 'info');
        
        // Simular redirección a formulario de edición
        setTimeout(() => {
            // window.location.href = `/empresas/editar-oferta/${jobId}`;
            console.log(`Redirigiendo a edición de: ${jobTitle}`);
        }, 1000);
    }

    function handleViewCandidates(jobTitle, candidateCount) {
        showNotification(`Viendo ${candidateCount} candidatos para: ${jobTitle}`, 'info');
        
        // Simular apertura de modal o nueva página
        setTimeout(() => {
            // window.location.href = `/empresas/candidatos/${jobId}`;
            console.log(`Mostrando candidatos para: ${jobTitle}`);
        }, 1000);
    }

    function handleViewProfile(candidateName) {
        showNotification(`Cargando perfil de ${candidateName}`, 'info');
        
        // Simular carga de perfil
        setTimeout(() => {
            // Aquí iría la lógica para mostrar el perfil del candidato
            console.log(`Mostrando perfil de: ${candidateName}`);
        }, 1000);
    }

    function handleContactCandidate(candidateName, item) {
        const btn = item.querySelector('.btn-primary');
        const originalText = btn.textContent;
        
        btn.textContent = 'Contactando...';
        btn.disabled = true;
        
        setTimeout(() => {
            btn.textContent = 'Contactado';
            btn.classList.remove('btn-primary');
            btn.classList.add('btn-success');
            btn.disabled = true;
            
            showNotification(`Mensaje enviado a ${candidateName}`, 'success');
            updateContactedCandidates();
        }, 1500);
    }

    function handleQuickAction(iconClass, button) {
        const actions = {
            'fa-plus': () => {
                window.location.href = '/empresas/publicar-empleo';
            },
            'fa-search': () => {
                window.location.href = '/empresas/buscar-candidatos';
            },
            'fa-chart-bar': () => {
                showStatisticsModal();
            }
        };

        const actionKey = Object.keys(actions).find(key => iconClass.includes(key.replace('fa-', '')));
        if (actionKey && actions[actionKey]) {
            actions[actionKey]();
        }
    }

    // Actualizar contador de candidatos contactados
    function updateContactedCandidates() {
        // Aquí se actualizarían las estadísticas
        console.log('Actualizando estadísticas de candidatos contactados');
    }

    // Modal de estadísticas
    function showStatisticsModal() {
        // Crear modal temporal (en una implementación real sería más complejo)
        const modal = document.createElement('div');
        modal.style.cssText = `
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        `;
        
        const modalContent = document.createElement('div');
        modalContent.style.cssText = `
            background: white;
            padding: 2rem;
            border-radius: 12px;
            max-width: 500px;
            width: 90%;
            text-align: center;
        `;
        
        modalContent.innerHTML = `
            <h2>Estadísticas Detalladas</h2>
            <p>Funcionalidad en desarrollo</p>
            <button onclick="this.closest('.modal').remove()" 
                    style="padding: 0.5rem 1rem; background: #4CAF50; color: white; border: none; border-radius: 6px; cursor: pointer;">
                Cerrar
            </button>
        `;
        
        modal.className = 'modal';
        modal.appendChild(modalContent);
        document.body.appendChild(modal);
        
        // Cerrar modal al hacer click fuera
        modal.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.remove();
            }
        });
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

    // Filtros y búsqueda en la tabla
    const searchInput = document.createElement('input');
    searchInput.type = 'text';
    searchInput.placeholder = 'Buscar ofertas...';
    searchInput.style.cssText = `
        padding: 0.5rem;
        border: 1px solid #ddd;
        border-radius: 6px;
        margin-bottom: 1rem;
        width: 200px;
    `;
    
    const tableContainer = document.querySelector('.jobs-table');
    if (tableContainer) {
        tableContainer.parentNode.insertBefore(searchInput, tableContainer);
        
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            
            jobRows.forEach(row => {
                const jobTitle = row.querySelector('td:first-child').textContent.toLowerCase();
                
                if (jobTitle.includes(searchTerm)) {
                    row.style.display = 'table-row';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    }

    // Ordenamiento de tabla
    const tableHeaders = document.querySelectorAll('.jobs-table th');
    tableHeaders.forEach((header, index) => {
        if (index < 4) { // Solo headers que se pueden ordenar
            header.style.cursor = 'pointer';
            header.addEventListener('click', function() {
                sortTable(index);
            });
        }
    });

    function sortTable(columnIndex) {
        const table = document.querySelector('.jobs-table table');
        const tbody = table.querySelector('tbody');
        const rows = Array.from(tbody.querySelectorAll('tr'));
        
        rows.sort((a, b) => {
            const aText = a.cells[columnIndex].textContent.trim();
            const bText = b.cells[columnIndex].textContent.trim();
            
            // Si es una columna numérica (candidatos)
            if (columnIndex === 1) {
                return parseInt(bText) - parseInt(aText);
            }
            
            return aText.localeCompare(bText);
        });
        
        rows.forEach(row => tbody.appendChild(row));
    }

    // Cargar datos actualizados periódicamente
    function refreshDashboardData() {
        // Simular actualización de datos
        console.log('Actualizando datos del dashboard...');
        
        // Aquí iría una llamada AJAX real para obtener datos actualizados
        setTimeout(() => {
            showNotification('Datos actualizados', 'success');
        }, 1000);
    }

    // Actualizar cada 5 minutos
    setInterval(refreshDashboardData, 300000);

    // Inicialización
    console.log('Dashboard de empresa inicializado correctamente');
    
    // Mensaje de bienvenida
    setTimeout(() => {
        const companyName = document.querySelector('.company-profile h4')?.textContent;
        if (companyName) {
            showNotification(`Panel de ${companyName} listo`, 'info');
        }
    }, 500);
});