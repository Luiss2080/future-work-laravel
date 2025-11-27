// ==========================================================================
// ADMIN MAIN JS - Future Work
// ==========================================================================

class AdminApp {
    constructor() {
        this.sidebar = document.querySelector('.sidebar');
        this.sidebarToggle = document.querySelector('.sidebar-toggle-btn');
        this.mainWrapper = document.querySelector('.main-wrapper');
        
        this.init();
    }

    init() {
        this.bindEvents();
        this.initTooltips();
        this.handleResponsive();
    }

    bindEvents() {
        // Sidebar toggle
        if (this.sidebarToggle) {
            this.sidebarToggle.addEventListener('click', () => this.toggleSidebar());
        }

        // Close sidebar on outside click (mobile)
        document.addEventListener('click', (e) => {
            if (window.innerWidth <= 768) {
                if (!e.target.closest('.sidebar') && !e.target.closest('.sidebar-toggle-btn')) {
                    this.closeSidebar();
                }
            }
        });

        // Handle window resize
        window.addEventListener('resize', () => this.handleResponsive());
    }

    toggleSidebar() {
        if (this.sidebar) {
            this.sidebar.classList.toggle('open');
        }
    }

    closeSidebar() {
        if (this.sidebar) {
            this.sidebar.classList.remove('open');
        }
    }

    handleResponsive() {
        if (window.innerWidth > 768) {
            this.closeSidebar();
        }
    }

    initTooltips() {
        // Initialize Bootstrap tooltips
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    }
}

// Utility functions for admin
class AdminUtils {
    static showAlert(message, type = 'info', duration = 5000) {
        const alertContainer = document.getElementById('alert-container') || document.body;
        
        const alertDiv = document.createElement('div');
        alertDiv.className = `alert alert-${type} alert-dismissible fade show position-fixed`;
        alertDiv.style.cssText = `
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
        `;
        alertDiv.innerHTML = `
            ${message}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        `;
        
        alertContainer.appendChild(alertDiv);
        
        // Auto remove
        setTimeout(() => {
            if (alertDiv.parentNode) {
                alertDiv.remove();
            }
        }, duration);
    }

    static confirmDelete(message = '¿Estás seguro de eliminar este elemento?') {
        return confirm(message);
    }

    static formatCurrency(amount, currency = 'MXN') {
        return new Intl.NumberFormat('es-MX', {
            style: 'currency',
            currency: currency
        }).format(amount);
    }

    static formatDate(date) {
        return new Intl.DateTimeFormat('es-MX', {
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        }).format(new Date(date));
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new AdminApp();
    
    // Make AdminUtils globally available
    window.AdminUtils = AdminUtils;
});

// Handle AJAX requests with CSRF token
if (window.jQuery) {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': window.FutureWork.csrfToken
        }
    });
}