// Página Empleos - JavaScript
document.addEventListener('DOMContentLoaded', function() {
    console.log('Página de empleos cargada');
    
    // Elementos del DOM
    const filtroUbicacion = document.getElementById('filtro-ubicacion');
    const filtroSalario = document.getElementById('filtro-salario');
    const checkboxCategoria = document.querySelectorAll('.checkbox-group input[type="checkbox"]');
    const btnAplicarFiltros = document.getElementById('aplicar-filtros');
    const buscarEmpleos = document.getElementById('buscar-empleos');
    const btnBuscar = document.querySelector('.btn-buscar');
    const listaEmpleos = document.getElementById('lista-empleos');
    const empleoCards = document.querySelectorAll('.empleo-card');
    
    // Datos de empleos (simulados)
    let empleos = [
        {
            titulo: 'Desarrollador Full Stack',
            empresa: 'TechStart S.L.',
            ubicacion: 'madrid',
            salario: '45000-55000',
            categoria: 'tecnologia',
            tags: ['React', 'Node.js', 'MongoDB'],
            logo: 'empresa-1.jpg'
        },
        {
            titulo: 'Diseñador UX/UI',
            empresa: 'Creative Agency',
            ubicacion: 'barcelona',
            salario: '35000-42000',
            categoria: 'diseno',
            tags: ['Figma', 'Adobe XD', 'Sketch'],
            logo: 'empresa-2.jpg'
        }
        // Más empleos...
    ];
    
    let empleosFiltrados = [...empleos];
    
    // Función para filtrar empleos
    const filtrarEmpleos = () => {
        empleosFiltrados = empleos.filter(empleo => {
            // Filtro por ubicación
            if (filtroUbicacion.value && empleo.ubicacion !== filtroUbicacion.value) {
                return false;
            }
            
            // Filtro por salario
            if (filtroSalario.value) {
                const rangoSeleccionado = filtroSalario.value;
                const salarioEmpleo = empleo.salario;
                
                if (!validarRangoSalario(salarioEmpleo, rangoSeleccionado)) {
                    return false;
                }
            }
            
            // Filtro por categoría
            const categoriasSeleccionadas = Array.from(checkboxCategoria)
                .filter(cb => cb.checked)
                .map(cb => cb.value);
                
            if (categoriasSeleccionadas.length > 0 && !categoriasSeleccionadas.includes(empleo.categoria)) {
                return false;
            }
            
            return true;
        });
        
        actualizarListaEmpleos();
    };
    
    // Validar rango de salario
    const validarRangoSalario = (salarioEmpleo, rangoSeleccionado) => {
        const [min, max] = salarioEmpleo.split('-').map(s => parseInt(s));
        
        switch (rangoSeleccionado) {
            case '20-30':
                return max <= 30000;
            case '30-50':
                return min >= 30000 && max <= 50000;
            case '50-70':
                return min >= 50000 && max <= 70000;
            case '70+':
                return min >= 70000;
            default:
                return true;
        }
    };
    
    // Buscar empleos por texto
    const buscarPorTexto = (texto) => {
        if (!texto) {
            filtrarEmpleos();
            return;
        }
        
        empleosFiltrados = empleosFiltrados.filter(empleo => 
            empleo.titulo.toLowerCase().includes(texto.toLowerCase()) ||
            empleo.empresa.toLowerCase().includes(texto.toLowerCase()) ||
            empleo.tags.some(tag => tag.toLowerCase().includes(texto.toLowerCase()))
        );
        
        actualizarListaEmpleos();
    };
    
    // Actualizar la lista de empleos en el DOM
    const actualizarListaEmpleos = () => {
        if (empleosFiltrados.length === 0) {
            listaEmpleos.innerHTML = '<div class="no-results"><p>No se encontraron empleos con los filtros seleccionados.</p></div>';
            return;
        }
        
        const html = empleosFiltrados.map(empleo => `
            <div class="empleo-card" data-id="${empleo.titulo.replace(/\s+/g, '-').toLowerCase()}">
                <div class="empresa-logo">
                    <img src="{{ asset('images/${empleo.logo}') }}" alt="${empleo.empresa}">
                </div>
                <div class="empleo-info">
                    <h3>${empleo.titulo}</h3>
                    <p class="empresa">${empleo.empresa}</p>
                    <p class="ubicacion"><i class="fas fa-map-marker-alt"></i> ${empleo.ubicacion.charAt(0).toUpperCase() + empleo.ubicacion.slice(1)}</p>
                    <p class="salario">€${parseInt(empleo.salario.split('-')[0]).toLocaleString()} - €${parseInt(empleo.salario.split('-')[1]).toLocaleString()}</p>
                    <div class="empleo-tags">
                        ${empleo.tags.map(tag => `<span>${tag}</span>`).join('')}
                    </div>
                </div>
                <div class="empleo-actions">
                    <button class="btn btn-primary aplicar-btn">Aplicar</button>
                    <button class="btn btn-outline ver-detalles-btn">Ver detalles</button>
                </div>
            </div>
        `).join('');
        
        listaEmpleos.innerHTML = html;
        agregarEventosEmpleos();
    };
    
    // Agregar eventos a las nuevas tarjetas de empleo
    const agregarEventosEmpleos = () => {
        const nuevosCards = listaEmpleos.querySelectorAll('.empleo-card');
        const botonesAplicar = listaEmpleos.querySelectorAll('.aplicar-btn');
        const botonesDetalles = listaEmpleos.querySelectorAll('.ver-detalles-btn');
        
        // Hover effect para cards
        nuevosCards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-5px)';
                this.style.boxShadow = '0 8px 25px rgba(0,0,0,0.15)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
                this.style.boxShadow = '0 4px 12px rgba(0,0,0,0.1)';
            });
        });
        
        // Eventos de botones
        botonesAplicar.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const card = this.closest('.empleo-card');
                const titulo = card.querySelector('h3').textContent;
                aplicarAEmpleo(titulo, btn);
            });
        });
        
        botonesDetalles.forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const card = this.closest('.empleo-card');
                const id = card.dataset.id;
                verDetallesEmpleo(id);
            });
        });
    };
    
    // Aplicar a empleo
    const aplicarAEmpleo = (titulo, boton) => {
        boton.textContent = 'Aplicando...';
        boton.disabled = true;
        
        // Simular proceso de aplicación
        setTimeout(() => {
            boton.textContent = 'Aplicado ✓';
            boton.classList.remove('btn-primary');
            boton.classList.add('btn-success');
            
            mostrarNotificacion(`Aplicación enviada para: ${titulo}`, 'success');
        }, 1500);
    };
    
    // Ver detalles del empleo
    const verDetallesEmpleo = (id) => {
        console.log(`Ver detalles del empleo: ${id}`);
        // Aquí se abriría un modal o se navegaría a otra página
        // window.location.href = `/empleos/${id}`;
    };
    
    // Sistema de notificaciones
    const mostrarNotificacion = (mensaje, tipo = 'info') => {
        const notification = document.createElement('div');
        notification.className = `notification notification-${tipo}`;
        notification.style.cssText = `
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 1rem 1.5rem;
            background: ${tipo === 'success' ? '#4CAF50' : '#2196F3'};
            color: white;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s ease;
        `;
        notification.textContent = mensaje;
        
        document.body.appendChild(notification);
        
        setTimeout(() => notification.style.transform = 'translateX(0)', 100);
        
        setTimeout(() => {
            notification.style.transform = 'translateX(100%)';
            setTimeout(() => document.body.removeChild(notification), 300);
        }, 3000);
    };
    
    // Event listeners
    btnAplicarFiltros.addEventListener('click', filtrarEmpleos);
    
    btnBuscar.addEventListener('click', () => {
        buscarPorTexto(buscarEmpleos.value);
    });
    
    buscarEmpleos.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            buscarPorTexto(buscarEmpleos.value);
        }
    });
    
    // Filtros en tiempo real
    checkboxCategoria.forEach(checkbox => {
        checkbox.addEventListener('change', filtrarEmpleos);
    });
    
    // Inicializar eventos en cards existentes
    agregarEventosEmpleos();
    
    // Auto-aplicar filtros cuando cambien los selects
    filtroUbicacion.addEventListener('change', filtrarEmpleos);
    filtroSalario.addEventListener('change', filtrarEmpleos);
    
    console.log('Sistema de empleos inicializado');
});