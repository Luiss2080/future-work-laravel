// Resources Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    console.log('Resources page initialized');
    
    // Funciones específicas para recursos
    const resourceCards = document.querySelectorAll('.resource-card');
    const downloadButtons = document.querySelectorAll('.download-btn');
    
    downloadButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const resourceType = this.dataset.resource;
            handleResourceDownload(resourceType);
        });
    });
    
    function handleResourceDownload(resourceType) {
        console.log(`Downloading resource: ${resourceType}`);
        // Aquí iría la lógica para descargar recursos
    }
});