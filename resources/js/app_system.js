// ==========================================================================
// JS ENTRYPOINT - FUTURE WORK SYSTEM
// ==========================================================================

// Core utilities
import './utils.js';

// System-specific components
import './components/sidebar_system.js';
import './components/header_system.js';
import './components/datatables_system.js';
import './components/forms_system.js';
import './components/notifications_system.js';

// Initialize admin system
document.addEventListener('DOMContentLoaded', () => {
    FutureWork.admin.init();
});