@extends('layouts.web-app')

@section('title', 'Precios - Future Work')

@section('styles')
    <!-- Updated path to the new organized CSS file -->
    <link rel="stylesheet" href="{{ asset('assets/css/empresas/planes.css') }}">
@endsection

@section('content')
<div class="precios-container">
    
    <!-- HERO -->
    <section class="hero-precios">
        <h1 data-aos="fade-down">Planes Flexibles para Hacer Crecer tu Equipo</h1>
        <p data-aos="fade-up" data-aos-delay="100">Escala tu reclutamiento con herramientas de IA y acceso a talento premium.</p>
    </section>

    <!-- TOGGLE -->
    <div class="toggle-planes" data-aos="fade-up" data-aos-delay="200">
        <span class="plan-type active" id="label-mensual">Mensual</span>
        <label class="switch">
            <input type="checkbox" id="toggle-anual" onchange="togglePrecios()">
            <span class="slider"></span>
        </label>
        <span class="plan-type" id="label-anual">Anual <span class="descuento">-20%</span></span>
    </div>

    <!-- PRICING GRID -->
    <div class="planes-grid">
        
        <!-- CARD 1: STARTUP -->
        <div class="plan-card" data-aos="fade-up" data-aos-delay="100">
            <div class="plan-header">
                <h3>Startup</h3>
                <div class="precio-container">
                    <span class="precio" data-mensual="49" data-anual="39">€49</span>
                    <span class="periodo">/mes</span>
                </div>
                <p class="plan-descripcion">Para equipos pequeños que inician.</p>
            </div>
            
            <ul class="caracteristicas">
                <li><i class="fas fa-check"></i> <strong>3</strong> Ofertas de empleo activas</li>
                <li><i class="fas fa-check"></i> Acceso básico a CVs</li>
                <li><i class="fas fa-check"></i> Soporte por Email 48h</li>
                <li><i class="fas fa-times"></i> Sin filtro de IA</li>
            </ul>
            
            <button class="btn-seleccionar btn-outline">Empezar Gratis</button>
        </div>

        <!-- CARD 2: SCALE (POPULAR) -->
        <div class="plan-card destacado" data-aos="fade-up" data-aos-delay="200">
            <div class="badge-popular">RECOMENDADO</div>
            <div class="plan-header">
                <h3>Scale</h3>
                <div class="precio-container">
                    <span class="precio" data-mensual="99" data-anual="79">€99</span>
                    <span class="periodo">/mes</span>
                </div>
                <p class="plan-descripcion">Potencia tu crecimiento con IA.</p>
            </div>
            
            <ul class="caracteristicas">
                <li><i class="fas fa-check"></i> <strong>10</strong> Ofertas de empleo activas</li>
                <li><i class="fas fa-check"></i> Acceso Ilimitado a CVs</li>
                <li><i class="fas fa-check"></i> Algoritmo de Matching IA</li>
                <li><i class="fas fa-check"></i> Soporte Prioritario 24h</li>
                <li><i class="fas fa-check"></i> Branding de Empresa</li>
            </ul>
            
            <button class="btn-seleccionar btn-primary">Seleccionar Plan</button>
        </div>

        <!-- CARD 3: ENTERPRISE -->
        <div class="plan-card" data-aos="fade-up" data-aos-delay="300">
            <div class="plan-header">
                <h3>Enterprise</h3>
                <div class="precio-container">
                    <span class="precio" data-mensual="299" data-anual="249">€299</span>
                    <span class="periodo">/mes</span>
                </div>
                <p class="plan-descripcion">Soluciones a medida para corporaciones.</p>
            </div>
            
            <ul class="caracteristicas">
                <li><i class="fas fa-check"></i> Ofertas <strong>Ilimitadas</strong></li>
                <li><i class="fas fa-check"></i> API de Integración (ATS)</li>
                <li><i class="fas fa-check"></i> Account Manager Dedicado</li>
                <li><i class="fas fa-check"></i> Analytics Avanzados</li>
                <li><i class="fas fa-check"></i> Headhunting Personalizado</li>
            </ul>
            
            <button class="btn-seleccionar btn-outline">Contactar Ventas</button>
        </div>
    </div>

    <!-- FAQ -->
    <section class="faq-precios" data-aos="fade-up">
        <h2>Preguntas Frecuentes</h2>
        <div class="faq-grid">
            <div class="faq-item">
                <h4>¿Puedo cambiar de plan?</h4>
                <p>Sí, puedes actualizar o cancelar tu suscripción en cualquier momento desde tu panel.</p>
            </div>
            <div class="faq-item">
                <h4>¿Qué incluye el Matching IA?</h4>
                <p>Nuestro algoritmo analiza tus requisitos y te sugiere automáticamente los candidatos con mayor afinidad (Hard & Soft Skills).</p>
            </div>
            <div class="faq-item">
                <h4>¿Facturan a empresas?</h4>
                <p>Sí, generamos facturas fiscales automáticas válidas para la UE y LATAM.</p>
            </div>
            <div class="faq-item">
                <h4>¿Hay descuentos por volumen?</h4>
                <p>Contáctanos para paquetes de más de 5 licencias Enterprise.</p>
            </div>
        </div>
    </section>
</div>

<script>
    function togglePrecios() {
        const toggle = document.getElementById('toggle-anual');
        const precios = document.querySelectorAll('.precio');
        const isAnual = toggle.checked;

        // Toggle Labels
        document.getElementById('label-mensual').classList.toggle('active', !isAnual);
        document.getElementById('label-anual').classList.toggle('active', isAnual);

        // Animate Prices
        precios.forEach(precio => {
            precio.style.opacity = 0;
            setTimeout(() => {
                const valor = isAnual ? precio.dataset.anual : precio.dataset.mensual;
                precio.innerHTML = '€' + valor;
                precio.style.opacity = 1;
            }, 200);
        });
    }
</script>
@endsection

@section('scripts')
    <!-- Inline script added above for simplicity -->
@endsection