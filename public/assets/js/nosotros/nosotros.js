// Página Nosotros - JavaScript
document.addEventListener('DOMContentLoaded', function() {
    console.log('Página nosotros cargada');
    
    // Animaciones de entrada para las secciones
    const animarEntrada = (elementos, delay = 0) => {
        elementos.forEach((elemento, index) => {
            elemento.style.opacity = '0';
            elemento.style.transform = 'translateY(30px)';
            
            setTimeout(() => {
                elemento.style.transition = 'all 0.6s ease';
                elemento.style.opacity = '1';
                elemento.style.transform = 'translateY(0)';
            }, delay + (index * 200));
        });
    };
    
    // Observer para activar animaciones
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.classList.contains('animado')) {
                entry.target.classList.add('animado');
                
                if (entry.target.classList.contains('valores')) {
                    const valoresCards = entry.target.querySelectorAll('.valor-card');
                    animarEntrada(valoresCards, 300);
                }
                
                if (entry.target.classList.contains('equipo')) {
                    const teamMembers = entry.target.querySelectorAll('.team-member');
                    animarEntrada(teamMembers, 200);
                }
            }
        });
    }, { threshold: 0.2 });
    
    // Observar secciones principales
    const secciones = document.querySelectorAll('.mision, .valores, .equipo');
    secciones.forEach(seccion => observer.observe(seccion));
    
    // Efecto parallax sutil en el hero
    window.addEventListener('scroll', () => {
        const scrolled = window.pageYOffset;
        const heroNosotros = document.querySelector('.hero-nosotros');
        
        if (heroNosotros && scrolled < window.innerHeight) {
            heroNosotros.style.transform = `translateY(${scrolled * 0.5}px)`;
        }
    });
    
    // Hover effects mejorados para tarjetas de valores
    const valoresCards = document.querySelectorAll('.valor-card');
    valoresCards.forEach(card => {
        const icono = card.querySelector('i');
        
        card.addEventListener('mouseenter', function() {
            if (icono) {
                icono.style.transform = 'scale(1.2) rotate(10deg)';
                icono.style.transition = 'transform 0.3s ease';
            }
        });
        
        card.addEventListener('mouseleave', function() {
            if (icono) {
                icono.style.transform = 'scale(1) rotate(0deg)';
            }
        });
    });
    
    // Efecto hover para miembros del equipo
    const teamMembers = document.querySelectorAll('.team-member');
    teamMembers.forEach(member => {
        const img = member.querySelector('img');
        
        member.addEventListener('mouseenter', function() {
            if (img) {
                img.style.transform = 'scale(1.1)';
                img.style.transition = 'transform 0.3s ease';
                img.style.filter = 'brightness(1.1)';
            }
        });
        
        member.addEventListener('mouseleave', function() {
            if (img) {
                img.style.transform = 'scale(1)';
                img.style.filter = 'brightness(1)';
            }
        });
    });
    
    // Contador animado para estadísticas si hay alguna
    const animarEstadisticas = () => {
        const numeros = document.querySelectorAll('[data-count]');
        
        numeros.forEach(numero => {
            const valorFinal = parseInt(numero.dataset.count);
            const duracion = 2000;
            let valorActual = 0;
            const incremento = valorFinal / (duracion / 16);
            
            const animar = () => {
                valorActual += incremento;
                
                if (valorActual < valorFinal) {
                    numero.textContent = Math.floor(valorActual);
                    requestAnimationFrame(animar);
                } else {
                    numero.textContent = valorFinal;
                }
            };
            
            animar();
        });
    };
    
    // Smooth scroll para navegación interna
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
    
    // Lazy loading para imágenes del equipo
    const imagenesEquipo = document.querySelectorAll('.team-member img');
    const imageObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                }
                imageObserver.unobserve(img);
            }
        });
    });
    
    imagenesEquipo.forEach(img => {
        imageObserver.observe(img);
    });
    
    // Efecto de typing para el título principal (opcional)
    const typing = (elemento, texto, velocidad = 100) => {
        let i = 0;
        elemento.textContent = '';
        
        const typeWriter = () => {
            if (i < texto.length) {
                elemento.textContent += texto.charAt(i);
                i++;
                setTimeout(typeWriter, velocidad);
            }
        };
        
        typeWriter();
    };
    
    // Aplicar efecto typing al título del hero
    const tituloHero = document.querySelector('.hero-nosotros h1');
    if (tituloHero) {
        const textoOriginal = tituloHero.textContent;
        setTimeout(() => {
            typing(tituloHero, textoOriginal, 80);
        }, 500);
    }
});