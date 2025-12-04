// Header Dropdowns JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Inicializar dropdowns
    initializeDropdowns();
    
    // Manejar búsqueda en header
    initializeHeaderSearch();
    
    // Manejar navegación móvil
    initializeMobileNav();
});

function initializeDropdowns() {
    const dropdowns = document.querySelectorAll('.navbar-nav .dropdown');
    
    dropdowns.forEach(dropdown => {
        const toggle = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');
        
        // Hover para mostrar dropdown (solo en desktop)
        if (window.innerWidth >= 992) {
            dropdown.addEventListener('mouseenter', function() {
                showDropdown(dropdown);
            });
            
            dropdown.addEventListener('mouseleave', function() {
                hideDropdown(dropdown);
            });
        }
        
        // Click para toggle (móvil y desktop)
        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Cerrar otros dropdowns abiertos
            dropdowns.forEach(otherDropdown => {
                if (otherDropdown !== dropdown) {
                    hideDropdown(otherDropdown);
                }
            });
            
            // Toggle actual dropdown
            if (dropdown.classList.contains('show')) {
                hideDropdown(dropdown);
            } else {
                showDropdown(dropdown);
            }
        });
        
        // Evitar que el dropdown se cierre al hacer click dentro
        menu.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    });
    
    // Cerrar dropdowns al hacer click fuera
    document.addEventListener('click', function() {
        dropdowns.forEach(dropdown => {
            hideDropdown(dropdown);
        });
    });
    
    // Cerrar dropdowns al presionar ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            dropdowns.forEach(dropdown => {
                hideDropdown(dropdown);
            });
        }
    });
}

function showDropdown(dropdown) {
    dropdown.classList.add('show');
    const menu = dropdown.querySelector('.dropdown-menu');
    if (menu) {
        menu.classList.add('show');
        menu.setAttribute('data-bs-popper', 'static');
    }
}

function hideDropdown(dropdown) {
    dropdown.classList.remove('show');
    const menu = dropdown.querySelector('.dropdown-menu');
    if (menu) {
        menu.classList.remove('show');
        menu.removeAttribute('data-bs-popper');
    }
}

function initializeHeaderSearch() {
    const searchInput = document.querySelector('.search-input');
    const searchBtn = document.querySelector('.search-btn');
    
    if (searchInput && searchBtn) {
        // Manejar búsqueda al presionar Enter
        searchInput.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                e.preventDefault();
                performSearch();
            }
        });
        
        // Manejar búsqueda al hacer click en botón
        searchBtn.addEventListener('click', function(e) {
            e.preventDefault();
            performSearch();
        });
        
        // Placeholder dinámico
        const placeholders = [
            '¿Qué empleo buscas?',
            'Ej: Albañil, Electricista',
            'Buscar por profesión',
            'Encuentra tu trabajo ideal'
        ];
        
        let currentPlaceholder = 0;
        setInterval(() => {
            currentPlaceholder = (currentPlaceholder + 1) % placeholders.length;
            searchInput.placeholder = placeholders[currentPlaceholder];
        }, 3000);
    }
}

function performSearch() {
    const searchInput = document.querySelector('.search-input');
    const query = searchInput.value.trim();
    
    if (query) {
        // Redirigir a la página de búsqueda con el query
        const searchUrl = `/bolsa-trabajo?q=${encodeURIComponent(query)}`;
        window.location.href = searchUrl;
    } else {
        // Si no hay query, ir a la bolsa de trabajo general
        window.location.href = '/bolsa-trabajo';
    }
}

function initializeMobileNav() {
    const hamburger = document.querySelector('.navbar-hamburger');
    const nav = document.querySelector('#navbarNav');
    
    if (hamburger && nav) {
        hamburger.addEventListener('click', function() {
            // Toggle clase activa para animación
            hamburger.classList.toggle('active');
            
            // Mostrar/ocultar navegación
            nav.classList.toggle('show');
            
            // Cambiar aria-expanded
            const expanded = hamburger.getAttribute('aria-expanded') === 'true';
            hamburger.setAttribute('aria-expanded', !expanded);
        });
        
        // Cerrar navegación móvil al hacer click en un enlace
        const navLinks = nav.querySelectorAll('a:not(.dropdown-toggle)');
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                nav.classList.remove('show');
                hamburger.classList.remove('active');
                hamburger.setAttribute('aria-expanded', 'false');
            });
        });
    }
}

// Mejorar accesibilidad
function enhanceAccessibility() {
    const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
    
    dropdownToggles.forEach(toggle => {
        // Añadir atributos ARIA
        toggle.setAttribute('role', 'button');
        toggle.setAttribute('aria-haspopup', 'true');
        toggle.setAttribute('aria-expanded', 'false');
        
        // Actualizar aria-expanded cuando se abra/cierre
        const dropdown = toggle.closest('.dropdown');
        const observer = new MutationObserver(function(mutations) {
            mutations.forEach(function(mutation) {
                if (mutation.attributeName === 'class') {
                    const isOpen = dropdown.classList.contains('show');
                    toggle.setAttribute('aria-expanded', isOpen);
                }
            });
        });
        
        observer.observe(dropdown, { attributes: true });
    });
}

// Inicializar mejoras de accesibilidad
document.addEventListener('DOMContentLoaded', enhanceAccessibility);

// Manejar redimensionamiento de ventana
window.addEventListener('resize', function() {
    // Reinicializar dropdowns si cambia el tamaño de pantalla
    if (window.innerWidth < 992) {
        // En móvil, asegurar que los dropdowns se comporten correctamente
        const dropdowns = document.querySelectorAll('.navbar-nav .dropdown.show');
        dropdowns.forEach(hideDropdown);
    }
});

// Animaciones suaves para scroll
function smoothScrollToSection(targetId) {
    const target = document.getElementById(targetId);
    if (target) {
        target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}

// Añadir indicador de carga para navegación
function addLoadingIndicator(link) {
    const icon = link.querySelector('i');
    if (icon) {
        const originalClass = icon.className;
        icon.className = 'fas fa-spinner fa-spin';
        
        // Restaurar icono después de un tiempo
        setTimeout(() => {
            icon.className = originalClass;
        }, 2000);
    }
}