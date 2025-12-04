/* JavaScript para página de Precios */

class PreciosManager {
    constructor() {
        this.isAnual = false;
        this.planes = {
            basico: { mensual: 49, anual: 490 },
            profesional: { mensual: 99, anual: 990 },
            empresa: { mensual: 199, anual: 1990 }
        };
        
        this.initEventListeners();
        this.initPlanSelection();
        this.initAnimations();
    }

    initEventListeners() {
        // Toggle entre mensual/anual
        const toggle = document.getElementById('planToggle');
        if (toggle) {
            toggle.addEventListener('change', this.handleToggleChange.bind(this));
        }

        // Botones de selección de plan
        const selectButtons = document.querySelectorAll('.btn-seleccionar');
        selectButtons.forEach(btn => {
            btn.addEventListener('click', this.handlePlanSelection.bind(this));
        });

        // Animación de hover en tarjetas
        const planCards = document.querySelectorAll('.plan-card');
        planCards.forEach(card => {
            card.addEventListener('mouseenter', this.handleCardHover.bind(this));
            card.addEventListener('mouseleave', this.handleCardLeave.bind(this));
        });
    }

    handleToggleChange(e) {
        this.isAnual = e.target.checked;
        this.updatePrecios();
        this.updateDescuentos();
        
        // Analytics
        this.trackEvent('pricing', 'toggle_change', this.isAnual ? 'anual' : 'mensual');
    }

    updatePrecios() {
        Object.keys(this.planes).forEach(plan => {
            const precioElement = document.querySelector(`[data-plan="${plan}"] .precio`);
            const periodoElement = document.querySelector(`[data-plan="${plan}"] .periodo`);
            
            if (precioElement && periodoElement) {
                const precio = this.isAnual ? this.planes[plan].anual : this.planes[plan].mensual;
                const precioMostrar = this.isAnual ? precio / 12 : precio;
                
                // Animación de cambio de precio
                precioElement.style.transform = 'scale(0.8)';
                precioElement.style.opacity = '0.5';
                
                setTimeout(() => {
                    precioElement.textContent = `$${Math.round(precioMostrar)}`;
                    periodoElement.textContent = this.isAnual ? '/mes (anual)' : '/mes';
                    
                    precioElement.style.transform = 'scale(1)';
                    precioElement.style.opacity = '1';
                }, 150);
            }
        });
    }

    updateDescuentos() {
        const preciosAnuales = document.querySelectorAll('.precio-anual');
        preciosAnuales.forEach(elemento => {
            if (this.isAnual) {
                elemento.style.display = 'block';
                elemento.style.opacity = '1';
            } else {
                elemento.style.opacity = '0';
                setTimeout(() => {
                    elemento.style.display = 'none';
                }, 300);
            }
        });

        // Mostrar/ocultar badge de descuento
        const descuentoBadges = document.querySelectorAll('.descuento');
        descuentoBadges.forEach(badge => {
            badge.style.opacity = this.isAnual ? '1' : '0.5';
        });
    }

    handlePlanSelection(e) {
        e.preventDefault();
        
        const button = e.currentTarget;
        const planCard = button.closest('.plan-card');
        const planName = planCard.getAttribute('data-plan');
        const planTitle = planCard.querySelector('h3').textContent;
        
        // Destacar plan seleccionado
        this.highlightSelectedPlan(planCard);
        
        // Mostrar modal de confirmación o redirigir
        this.showPlanModal(planName, planTitle);
        
        // Analytics
        this.trackEvent('pricing', 'plan_selected', planName);
    }

    highlightSelectedPlan(selectedCard) {
        // Remover highlight previo
        document.querySelectorAll('.plan-card').forEach(card => {
            card.classList.remove('selected');
        });
        
        // Agregar highlight al seleccionado
        selectedCard.classList.add('selected');
        
        // Animación de pulso
        selectedCard.style.animation = 'pulso 0.6s ease-in-out';
        setTimeout(() => {
            selectedCard.style.animation = '';
        }, 600);
    }

    showPlanModal(planName, planTitle) {
        const precio = this.isAnual ? this.planes[planName].anual : this.planes[planName].mensual;
        const periodo = this.isAnual ? 'anual' : 'mensual';
        
        // Crear modal dinámicamente
        const modal = this.createModal({
            title: `Confirmar Plan ${planTitle}`,
            content: `
                <div class="modal-plan-info">
                    <h4>Has seleccionado el plan <strong>${planTitle}</strong></h4>
                    <div class="precio-modal">
                        <span class="precio-grande">$${precio}</span>
                        <span class="periodo-modal">/${periodo}</span>
                    </div>
                    <p>¿Deseas continuar con este plan?</p>
                </div>
            `,
            buttons: [
                {
                    text: 'Cancelar',
                    class: 'btn btn-secondary',
                    action: () => this.closeModal()
                },
                {
                    text: 'Continuar',
                    class: 'btn btn-primary',
                    action: () => this.processPlanSelection(planName)
                }
            ]
        });
        
        document.body.appendChild(modal);
        setTimeout(() => modal.classList.add('show'), 10);
    }

    createModal({ title, content, buttons }) {
        const modal = document.createElement('div');
        modal.className = 'modal-overlay';
        modal.innerHTML = `
            <div class="modal-content">
                <div class="modal-header">
                    <h3>${title}</h3>
                    <button class="modal-close">&times;</button>
                </div>
                <div class="modal-body">
                    ${content}
                </div>
                <div class="modal-footer">
                    ${buttons.map(btn => `<button class="${btn.class}" data-action="${btn.text.toLowerCase()}">${btn.text}</button>`).join('')}
                </div>
            </div>
        `;
        
        // Event listeners para el modal
        modal.querySelector('.modal-close').addEventListener('click', () => this.closeModal());
        modal.addEventListener('click', (e) => {
            if (e.target === modal) this.closeModal();
        });
        
        buttons.forEach(btn => {
            const btnElement = modal.querySelector(`[data-action="${btn.text.toLowerCase()}"]`);
            btnElement.addEventListener('click', btn.action);
        });
        
        return modal;
    }

    closeModal() {
        const modal = document.querySelector('.modal-overlay');
        if (modal) {
            modal.classList.remove('show');
            setTimeout(() => modal.remove(), 300);
        }
    }

    processPlanSelection(planName) {
        this.closeModal();
        
        // Aquí iría la lógica para procesar la selección
        // Por ejemplo, redirigir a checkout o mostrar formulario
        this.showCheckoutForm(planName);
    }

    showCheckoutForm(planName) {
        // Simular redirección a proceso de pago
        const loadingDiv = document.createElement('div');
        loadingDiv.className = 'checkout-loading';
        loadingDiv.innerHTML = `
            <div class="loading-content">
                <div class="spinner"></div>
                <h3>Preparando tu plan...</h3>
                <p>Serás redirigido al proceso de pago.</p>
            </div>
        `;
        document.body.appendChild(loadingDiv);
        
        setTimeout(() => {
            loadingDiv.remove();
            // Aquí iría la redirección real
            console.log(`Redirigiendo a checkout para plan: ${planName}`);
            // window.location.href = `/checkout?plan=${planName}&type=${this.isAnual ? 'anual' : 'mensual'}`;
        }, 2000);
    }

    initPlanSelection() {
        // Marcar plan más popular por defecto
        const planPopular = document.querySelector('[data-plan="profesional"]');
        if (planPopular) {
            planPopular.classList.add('destacado');
        }
    }

    initAnimations() {
        // Animación de entrada para las tarjetas
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }, index * 200);
                }
            });
        }, observerOptions);

        const planCards = document.querySelectorAll('.plan-card');
        planCards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(50px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    }

    handleCardHover(e) {
        const card = e.currentTarget;
        if (!card.classList.contains('destacado')) {
            card.style.transform = 'translateY(-10px) scale(1.02)';
        }
    }

    handleCardLeave(e) {
        const card = e.currentTarget;
        if (!card.classList.contains('destacado')) {
            card.style.transform = '';
        }
    }

    // Comparador de planes
    showPlanComparison() {
        const comparisonData = {
            caracteristicas: [
                'Publicación de empleos',
                'Búsqueda de candidatos',
                'Mensajes ilimitados',
                'Análisis avanzados',
                'Soporte prioritario',
                'API personalizada',
                'Manager dedicado'
            ],
            planes: {
                basico: [true, true, false, false, false, false, false],
                profesional: [true, true, true, true, true, false, false],
                empresa: [true, true, true, true, true, true, true]
            }
        };

        // Aquí iría la lógica para mostrar tabla comparativa
        console.log('Mostrar comparación de planes:', comparisonData);
    }

    // Función para tracking
    trackEvent(category, action, label = '') {
        if (typeof gtag !== 'undefined') {
            gtag('event', action, {
                event_category: category,
                event_label: label,
                custom_parameters: {
                    plan_type: this.isAnual ? 'anual' : 'mensual'
                }
            });
        }
        console.log(`Event: ${category} - ${action} - ${label}`);
    }
}

// Utilidades para precios
const PreciosUtils = {
    formatCurrency(amount, currency = 'USD') {
        return new Intl.NumberFormat('es-ES', {
            style: 'currency',
            currency: currency,
            minimumFractionDigits: 0
        }).format(amount);
    },

    calculateDiscount(mensual, anual) {
        const mensualTotal = mensual * 12;
        const descuento = ((mensualTotal - anual) / mensualTotal) * 100;
        return Math.round(descuento);
    },

    formatPlanFeatures(features) {
        return features.map(feature => ({
            text: feature.text,
            included: feature.included,
            highlight: feature.highlight || false
        }));
    }
};

// CSS dinámico para modal y efectos
const PreciosStyles = {
    init() {
        if (!document.getElementById('precios-dynamic-styles')) {
            const styles = document.createElement('style');
            styles.id = 'precios-dynamic-styles';
            styles.textContent = `
                .modal-overlay {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(0,0,0,0.5);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    z-index: 10000;
                    opacity: 0;
                    transition: opacity 0.3s ease;
                }
                
                .modal-overlay.show {
                    opacity: 1;
                }
                
                .modal-content {
                    background: white;
                    border-radius: 12px;
                    max-width: 500px;
                    width: 90%;
                    max-height: 80vh;
                    overflow-y: auto;
                    transform: scale(0.8);
                    transition: transform 0.3s ease;
                }
                
                .modal-overlay.show .modal-content {
                    transform: scale(1);
                }
                
                .modal-header {
                    padding: 1.5rem;
                    border-bottom: 1px solid #eee;
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
                
                .modal-close {
                    background: none;
                    border: none;
                    font-size: 1.5rem;
                    cursor: pointer;
                    color: #666;
                }
                
                .modal-body {
                    padding: 1.5rem;
                }
                
                .modal-footer {
                    padding: 1rem 1.5rem;
                    border-top: 1px solid #eee;
                    display: flex;
                    gap: 1rem;
                    justify-content: flex-end;
                }
                
                .precio-modal {
                    text-align: center;
                    margin: 1rem 0;
                }
                
                .precio-grande {
                    font-size: 2.5rem;
                    font-weight: bold;
                    color: var(--color-primary);
                }
                
                .periodo-modal {
                    font-size: 1rem;
                    color: #666;
                }
                
                .checkout-loading {
                    position: fixed;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background: rgba(255,255,255,0.95);
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    z-index: 10001;
                }
                
                .loading-content {
                    text-align: center;
                }
                
                .spinner {
                    width: 50px;
                    height: 50px;
                    border: 4px solid #f3f3f3;
                    border-top: 4px solid var(--color-primary);
                    border-radius: 50%;
                    animation: spin 1s linear infinite;
                    margin: 0 auto 1rem;
                }
                
                @keyframes spin {
                    0% { transform: rotate(0deg); }
                    100% { transform: rotate(360deg); }
                }
                
                .plan-card.selected {
                    border-color: var(--color-success) !important;
                    box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.2);
                }
            `;
            document.head.appendChild(styles);
        }
    }
};

// Inicialización
document.addEventListener('DOMContentLoaded', () => {
    PreciosStyles.init();
    new PreciosManager();
});

// FAQ Toggle (si se necesita)
const FAQManager = {
    init() {
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            item.addEventListener('click', this.toggleFAQ.bind(this));
        });
    },

    toggleFAQ(e) {
        const item = e.currentTarget;
        const isActive = item.classList.contains('active');
        
        // Cerrar otros FAQs
        document.querySelectorAll('.faq-item').forEach(faq => {
            faq.classList.remove('active');
        });
        
        // Toggle el actual
        if (!isActive) {
            item.classList.add('active');
        }
    }
};