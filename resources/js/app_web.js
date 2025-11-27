// ==========================================================================
// JS ENTRYPOINT - FUTURE WORK WEB
// ==========================================================================

// Core utilities
import './utils.js';

// Web-specific components
import './components/header_web.js';
import './components/navigation_web.js';
import './components/hero_web.js';
import './components/servicios_web.js';
import './components/contacto_web.js';

// Initialize web app
document.addEventListener('DOMContentLoaded', () => {
    FutureWork.web.init();
});