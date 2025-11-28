// ==========================================================================
// HEADER WEB JS - Future Work
// ==========================================================================

class HeaderWeb {
    constructor() {
        this.header = document.querySelector('.header-web');
        this.navbarToggler = document.querySelector('.navbar-toggler');
        this.navbarMenu = document.querySelector('.navbar-menu-center');
        this.lastScrollY = window.scrollY;
        
        this.init();
    }

    init() {
        this.bindEvents();
        this.setupDropdowns();
    }

    bindEvents() {
        // Mobile toggle
        if (this.navbarToggler) {
            this.navbarToggler.addEventListener('click', () => this.toggleMobileMenu());
        }

        // Scroll behavior - optimizado para evitar parpadeos
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    this.handleScroll();
                    ticking = false;
                });
                ticking = true;
            }
        });

        // Close mobile menu on outside click
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.navbar') && this.navbarMenu?.classList.contains('show')) {
                this.closeMobileMenu();
            }
        });

        // Close mobile menu on link click
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => {
            link.addEventListener('click', () => {
                if (window.innerWidth < 992) {
                    this.closeMobileMenu();
                }
            });
        });
    }

    toggleMobileMenu() {
        if (this.navbarMenu) {
            this.navbarMenu.classList.toggle('show');
            this.navbarToggler.classList.toggle('active');
        }
    }

    closeMobileMenu() {
        if (this.navbarMenu) {
            this.navbarMenu.classList.remove('show');
            this.navbarToggler.classList.remove('active');
        }
    }

    handleScroll() {
        const currentScrollY = window.scrollY;
        
        // Add/remove scrolled class for shadow effect
        if (currentScrollY > 20) {
            this.header?.classList.add('scrolled');
        } else {
            this.header?.classList.remove('scrolled');
        }

        this.lastScrollY = currentScrollY;
    }

    setupDropdowns() {
        // Setup Bootstrap dropdowns if they exist
        const dropdownElements = document.querySelectorAll('[data-bs-toggle="dropdown"]');
        if (dropdownElements.length > 0 && typeof bootstrap !== 'undefined') {
            dropdownElements.forEach(element => {
                new bootstrap.Dropdown(element);
            });
        }
    }
}

// Initialize when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new HeaderWeb();
});

        // Close menus on outside click
        document.addEventListener('click', (e) => this.handleOutsideClick(e));

        // Keyboard navigation
        document.addEventListener('keydown', (e) => this.handleKeydown(e));
    }

    toggleMobileMenu() {
        this.mobileToggle.classList.toggle('active');
        this.navbarMenu.classList.toggle('active');
        document.body.classList.toggle('menu-open');
    }

    handleScroll() {
        const currentScrollY = window.scrollY;
        
        if (!this.header) return;

        // Add scrolled class
        if (currentScrollY > 100) {
            this.header.classList.add('scrolled');
        } else {
            this.header.classList.remove('scrolled');
        }

        // Hide/show header on scroll
        if (currentScrollY > this.lastScrollY && currentScrollY > 500) {
            this.header.classList.add('hidden');
        } else {
            this.header.classList.remove('hidden');
        }

        this.lastScrollY = currentScrollY;
    }

    initDropdowns() {
        this.dropdowns.forEach(dropdown => {
            const trigger = dropdown.querySelector('.nav-link');
            
            if (trigger) {
                trigger.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.toggleDropdown(dropdown);
                });
            }
        });
    }

    toggleDropdown(dropdown) {
        const isActive = dropdown.classList.contains('active');
        
        // Close all dropdowns
        this.dropdowns.forEach(d => d.classList.remove('active'));
        
        // Toggle current dropdown
        if (!isActive) {
            dropdown.classList.add('active');
        }
    }

    initUserMenus() {
        this.userMenus.forEach(userMenu => {
            const toggle = userMenu.querySelector('.user-toggle');
            
            if (toggle) {
                toggle.addEventListener('click', (e) => {
                    e.preventDefault();
                    this.toggleUserMenu(userMenu);
                });
            }
        });
    }

    toggleUserMenu(userMenu) {
        const dropdown = userMenu.querySelector('.dropdown');
        if (dropdown) {
            dropdown.classList.toggle('active');
        }
    }

    handleOutsideClick(e) {
        // Close dropdowns if clicking outside
        if (!e.target.closest('.dropdown')) {
            this.dropdowns.forEach(dropdown => {
                dropdown.classList.remove('active');
            });
        }

        // Close user menus if clicking outside
        if (!e.target.closest('.user-menu')) {
            this.userMenus.forEach(userMenu => {
                const dropdown = userMenu.querySelector('.dropdown');
                if (dropdown) {
                    dropdown.classList.remove('active');
                }
            });
        }

        // Close mobile menu if clicking outside
        if (!e.target.closest('.navbar') && this.navbarMenu) {
            this.navbarMenu.classList.remove('active');
            this.mobileToggle.classList.remove('active');
            document.body.classList.remove('menu-open');
        }
    }

    handleKeydown(e) {
        if (e.key === 'Escape') {
            // Close all dropdowns and menus
            this.dropdowns.forEach(dropdown => {
                dropdown.classList.remove('active');
            });
            
            this.userMenus.forEach(userMenu => {
                const dropdown = userMenu.querySelector('.dropdown');
                if (dropdown) {
                    dropdown.classList.remove('active');
                }
            });

            if (this.navbarMenu) {
                this.navbarMenu.classList.remove('active');
                this.mobileToggle.classList.remove('active');
                document.body.classList.remove('menu-open');
            }
        }
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new HeaderWeb();
});