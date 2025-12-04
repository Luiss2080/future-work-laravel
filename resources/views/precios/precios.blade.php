@extends('layouts.web-app')

@section('title', 'Precios - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/precios/precios.css') }}">
@endsection

@section('content')
<div class="precios-container">
    <section class="hero-precios">
        <h1>Planes y Precios</h1>
        <p>Encuentra el plan que mejor se adapte a las necesidades de tu empresa</p>
    </section>

    <div class="toggle-planes">
        <span class="plan-type">Mensual</span>
        <label class="switch">
            <input type="checkbox" id="toggle-anual">
            <span class="slider"></span>
        </label>
        <span class="plan-type">Anual <span class="descuento">-20%</span></span>
    </div>

    <div class="planes-grid">
        <!-- Plan Básico -->
        <div class="plan-card plan-basico">
            <div class="plan-header">
                <h3>Básico</h3>
                <div class="precio-container">
                    <span class="precio" data-mensual="29" data-anual="278">€29</span>
                    <span class="periodo">/mes</span>
                </div>
                <p class="plan-descripcion">Ideal para pequeñas empresas</p>
            </div>
            
            <ul class="caracteristicas">
                <li><i class="fas fa-check"></i> Hasta 5 ofertas activas</li>
                <li><i class="fas fa-check"></i> Acceso básico a candidatos</li>
                <li><i class="fas fa-check"></i> Soporte por email</li>
                <li><i class="fas fa-check"></i> Panel básico de estadísticas</li>
                <li><i class="fas fa-times"></i> Sin destacados premium</li>
                <li><i class="fas fa-times"></i> Sin búsqueda avanzada</li>
            </ul>
            
            <button class="btn btn-outline btn-seleccionar" data-plan="basico">Comenzar ahora</button>
        </div>

        <!-- Plan Profesional -->
        <div class="plan-card plan-profesional destacado">
            <div class="badge-popular">Más popular</div>
            <div class="plan-header">
                <h3>Profesional</h3>
                <div class="precio-container">
                    <span class="precio" data-mensual="79" data-anual="758">€79</span>
                    <span class="periodo">/mes</span>
                </div>
                <p class="plan-descripcion">Perfecto para empresas en crecimiento</p>
            </div>
            
            <ul class="caracteristicas">
                <li><i class="fas fa-check"></i> Ofertas ilimitadas</li>
                <li><i class="fas fa-check"></i> Acceso completo a candidatos</li>
                <li><i class="fas fa-check"></i> Soporte prioritario</li>
                <li><i class="fas fa-check"></i> Estadísticas avanzadas</li>
                <li><i class="fas fa-check"></i> 3 destacados premium</li>
                <li><i class="fas fa-check"></i> Búsqueda avanzada</li>
            </ul>
            
            <button class="btn btn-primary btn-seleccionar" data-plan="profesional">Comenzar ahora</button>
        </div>

        <!-- Plan Empresa -->
        <div class="plan-card plan-empresa">
            <div class="plan-header">
                <h3>Empresa</h3>
                <div class="precio-container">
                    <span class="precio" data-mensual="149" data-anual="1430">€149</span>
                    <span class="periodo">/mes</span>
                </div>
                <p class="plan-descripcion">Para grandes empresas</p>
            </div>
            
            <ul class="caracteristicas">
                <li><i class="fas fa-check"></i> Todo del plan Profesional</li>
                <li><i class="fas fa-check"></i> Gestor de cuenta dedicado</li>
                <li><i class="fas fa-check"></i> Soporte 24/7</li>
                <li><i class="fas fa-check"></i> Reportes personalizados</li>
                <li><i class="fas fa-check"></i> Destacados premium ilimitados</li>
                <li><i class="fas fa-check"></i> API personalizada</li>
            </ul>
            
            <button class="btn btn-outline btn-seleccionar" data-plan="empresa">Contactar ventas</button>
        </div>
    </div>

    <section class="faq-precios">
        <h2>Preguntas frecuentes</h2>
        <div class="faq-grid">
            <div class="faq-item">
                <h4>¿Puedo cambiar de plan en cualquier momento?</h4>
                <p>Sí, puedes actualizar o degradar tu plan en cualquier momento desde tu panel de control.</p>
            </div>
            
            <div class="faq-item">
                <h4>¿Hay período de prueba?</h4>
                <p>Ofrecemos 14 días de prueba gratuita en todos nuestros planes.</p>
            </div>
            
            <div class="faq-item">
                <h4>¿Qué métodos de pago aceptan?</h4>
                <p>Aceptamos tarjetas de crédito/débito, transferencias bancarias y PayPal.</p>
            </div>
            
            <div class="faq-item">
                <h4>¿Hay descuentos por pago anual?</h4>
                <p>Sí, obtienes un 20% de descuento al pagar anualmente.</p>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/precios/precios.js') }}"></script>
@endsection