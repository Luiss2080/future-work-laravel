// Página de Inicio - JavaScript
document.addEventListener('DOMContentLoaded', function() {
    console.log('Página de inicio cargada');
    
    // Animación de contadores en estadísticas
    const animarContadores = () => {
        const contadores = document.querySelectorAll('.stat-card h3');
        
        contadores.forEach(contador => {
            const valorFinal = contador.textContent;
            const numero = parseInt(valorFinal.replace(/[^\d]/g, ''));
            
            if (!isNaN(numero)) {
                animarNumero(contador, numero, valorFinal);
            }
        });
    };
    
    const animarNumero = (elemento, valorFinal, textoOriginal) => {
        let valorActual = 0;
        const incremento = valorFinal / 50;
        const duracion = 2000;
        const intervalo = duracion / 50;
        
        const timer = setInterval(() => {
            valorActual += incremento;
            
            if (valorActual >= valorFinal) {
                elemento.textContent = textoOriginal;
                clearInterval(timer);
            } else {
                const valorMostrado = Math.floor(valorActual);
                if (textoOriginal.includes('+')) {
                    elemento.textContent = valorMostrado + '+';
                } else if (textoOriginal.includes('%')) {
                    elemento.textContent = valorMostrado + '%';
                } else {
                    elemento.textContent = valorMostrado.toLocaleString();
                }
            }
        }, intervalo);
    };
    
    // Observer para activar animaciones cuando entren en vista
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animado')) {
                entry.target.classList.add('animado');
                
                if (entry.target.classList.contains('estadisticas')) {
                    setTimeout(animarContadores, 300);
                }
            }
        });
    });
    
    // Observar secciones
    const secciones = document.querySelectorAll('.estadisticas, .empleos-destacados');
    secciones.forEach(seccion => observer.observe(seccion));
    
    // Manejo de botones de acción del hero
    const btnBuscarEmpleos = document.querySelector('a[href*="empleos"]');
    const btnPublicarEmpleo = document.querySelector('a[href*="publicar"]');
    
    if (btnBuscarEmpleos) {
        btnBuscarEmpleos.addEventListener('click', function(e) {
            // Aquí se puede agregar tracking o lógica adicional
            console.log('Navegando a búsqueda de empleos');
        });
    }
    
    if (btnPublicarEmpleo) {
        btnPublicarEmpleo.addEventListener('click', function(e) {
            console.log('Navegando a publicar empleo');
        });
    }
    
    // Manejo de tarjetas de trabajo
    const tarjetasEmpleo = document.querySelectorAll('.job-card');
    tarjetasEmpleo.forEach(tarjeta => {
        tarjeta.addEventListener('click', function() {
            const titulo = this.querySelector('h3').textContent;
            const empresa = this.querySelector('.company').textContent;
            
            console.log(`Clic en empleo: ${titulo} - ${empresa}`);
            
            // Aquí se podría abrir un modal o navegar a la página de detalles
            // window.location.href = `/empleos/${slug}`;
        });
    });
    
    // Efectos de hover mejorados
    const cards = document.querySelectorAll('.stat-card, .job-card');
    cards.forEach(card => {
        card.addEventListener('mouseenter', function() {
            this.style.transform = 'translateY(-10px)';
        });
        
        card.addEventListener('mouseleave', function() {
            this.style.transform = 'translateY(0)';
        });
    });
    
    // Lazy loading para imágenes
    const imagenes = document.querySelectorAll('img[src]');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src || img.src;
                imageObserver.unobserve(img);
            }
        });
    });
    
    imagenes.forEach(img => imageObserver.observe(img));
    
    // Scroll suave para links internos
    const linksInternos = document.querySelectorAll('a[href^="#"]');
    linksInternos.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                targetElement.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
});