// Pricing Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    console.log('Pricing page initialized');
    
    // Funciones específicas para precios
    const pricingCards = document.querySelectorAll('.pricing-card');
    const selectButtons = document.querySelectorAll('.select-plan-btn');
    
    selectButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const planName = this.dataset.plan;
            handlePlanSelection(planName);
        });
    });
    
    function handlePlanSelection(planName) {
        console.log(`Selected plan: ${planName}`);
        // Aquí iría la lógica para manejar la selección del plan
    }
});