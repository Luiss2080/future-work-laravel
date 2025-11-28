@extends('layouts.web.app')

@section('title', 'Planes y Precios - Future Work')
@section('description', 'Conoce nuestros planes de publicación de empleos diseñados para empresas de todos los tamaños.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/pages-common.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/web/pricing.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title">
                <i class="fas fa-tags text-primary me-3"></i>
                Planes y Precios
            </h1>
            <p class="page-subtitle">
                Elige el plan perfecto para las necesidades de reclutamiento de tu empresa
            </p>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section py-5">
    <div class="container">
        <!-- Plan Toggle -->
        <div class="plan-toggle text-center mb-5">
            <div class="btn-group" role="group">
                <input type="radio" class="btn-check" name="billing" id="monthly" checked>
                <label class="btn btn-outline-primary" for="monthly">Mensual</label>
                
                <input type="radio" class="btn-check" name="billing" id="annual">
                <label class="btn btn-outline-primary" for="annual">Anual <span class="badge bg-success ms-2">-20%</span></label>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <!-- Plan Básico -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Plan Básico</h3>
                        <div class="pricing-badge bg-light">Para pequeñas empresas</div>
                    </div>
                    <div class="pricing-body">
                        <div class="price-container">
                            <div class="price monthly-price">
                                <span class="currency">$</span>
                                <span class="amount">29</span>
                                <span class="period">/mes</span>
                            </div>
                            <div class="price annual-price d-none">
                                <span class="currency">$</span>
                                <span class="amount">279</span>
                                <span class="period">/año</span>
                                <div class="savings">Ahorras $69/año</div>
                            </div>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check text-success"></i>Hasta 3 publicaciones activas</li>
                            <li><i class="fas fa-check text-success"></i>Válidas por 30 días</li>
                            <li><i class="fas fa-check text-success"></i>Panel básico de estadísticas</li>
                            <li><i class="fas fa-check text-success"></i>Soporte por email</li>
                            <li><i class="fas fa-check text-success"></i>Filtrado de candidatos</li>
                            <li><i class="fas fa-times text-muted"></i>Promoción destacada</li>
                            <li><i class="fas fa-times text-muted"></i>Soporte prioritario</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <button class="btn btn-outline-primary btn-lg w-100">Comenzar</button>
                    </div>
                </div>
            </div>
            
            <!-- Plan Profesional -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pricing-card featured">
                    <div class="pricing-header">
                        <h3>Plan Profesional</h3>
                        <div class="pricing-badge bg-primary text-white">Más popular</div>
                    </div>
                    <div class="pricing-body">
                        <div class="price-container">
                            <div class="price monthly-price">
                                <span class="currency">$</span>
                                <span class="amount">79</span>
                                <span class="period">/mes</span>
                            </div>
                            <div class="price annual-price d-none">
                                <span class="currency">$</span>
                                <span class="amount">759</span>
                                <span class="period">/año</span>
                                <div class="savings">Ahorras $189/año</div>
                            </div>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check text-success"></i>Hasta 10 publicaciones activas</li>
                            <li><i class="fas fa-check text-success"></i>Válidas por 45 días</li>
                            <li><i class="fas fa-check text-success"></i>Panel avanzado de estadísticas</li>
                            <li><i class="fas fa-check text-success"></i>Soporte telefónico</li>
                            <li><i class="fas fa-check text-success"></i>Filtrado avanzado</li>
                            <li><i class="fas fa-check text-success"></i>2 promociones destacadas/mes</li>
                            <li><i class="fas fa-check text-success"></i>Acceso a base de CV</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <button class="btn btn-primary btn-lg w-100">Comenzar</button>
                    </div>
                </div>
            </div>
            
            <!-- Plan Empresarial -->
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Plan Empresarial</h3>
                        <div class="pricing-badge bg-light">Para grandes empresas</div>
                    </div>
                    <div class="pricing-body">
                        <div class="price-container">
                            <div class="price monthly-price">
                                <span class="currency">$</span>
                                <span class="amount">149</span>
                                <span class="period">/mes</span>
                            </div>
                            <div class="price annual-price d-none">
                                <span class="currency">$</span>
                                <span class="amount">1,429</span>
                                <span class="period">/año</span>
                                <div class="savings">Ahorras $359/año</div>
                            </div>
                        </div>
                        <ul class="features-list">
                            <li><i class="fas fa-check text-success"></i>Publicaciones ilimitadas</li>
                            <li><i class="fas fa-check text-success"></i>Válidas por 60 días</li>
                            <li><i class="fas fa-check text-success"></i>Analytics completos</li>
                            <li><i class="fas fa-check text-success"></i>Gestor de cuenta dedicado</li>
                            <li><i class="fas fa-check text-success"></i>Herramientas de reclutamiento</li>
                            <li><i class="fas fa-check text-success"></i>Promociones destacadas ilimitadas</li>
                            <li><i class="fas fa-check text-success"></i>API de integración</li>
                        </ul>
                    </div>
                    <div class="pricing-footer">
                        <button class="btn btn-outline-primary btn-lg w-100">Contactar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Comparison -->
<section class="comparison-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Comparación Detallada</h2>
        <div class="table-responsive">
            <table class="table comparison-table">
                <thead>
                    <tr>
                        <th>Características</th>
                        <th>Básico</th>
                        <th>Profesional</th>
                        <th>Empresarial</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Publicaciones activas</strong></td>
                        <td>3</td>
                        <td>10</td>
                        <td>Ilimitadas</td>
                    </tr>
                    <tr>
                        <td><strong>Duración de publicación</strong></td>
                        <td>30 días</td>
                        <td>45 días</td>
                        <td>60 días</td>
                    </tr>
                    <tr>
                        <td><strong>Búsqueda de candidatos</strong></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td><strong>Promoción destacada</strong></td>
                        <td><i class="fas fa-times text-muted"></i></td>
                        <td>2/mes</td>
                        <td>Ilimitada</td>
                    </tr>
                    <tr>
                        <td><strong>Acceso a base de CV</strong></td>
                        <td><i class="fas fa-times text-muted"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                        <td><i class="fas fa-check text-success"></i></td>
                    </tr>
                    <tr>
                        <td><strong>Soporte</strong></td>
                        <td>Email</td>
                        <td>Email + Teléfono</td>
                        <td>Gestor dedicado</td>
                    </tr>
                    <tr>
                        <td><strong>Analytics</strong></td>
                        <td>Básicos</td>
                        <td>Avanzados</td>
                        <td>Completos + API</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Preguntas Frecuentes</h2>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                                ¿Puedo cambiar de plan en cualquier momento?
                            </button>
                        </h2>
                        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sí, puedes actualizar o degradar tu plan en cualquier momento. Los cambios se aplicarán inmediatamente y se ajustará la facturación proporcionalmente.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                                ¿Qué métodos de pago aceptan?
                            </button>
                        </h2>
                        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Aceptamos tarjetas de crédito y débito (Visa, MasterCard), transferencias bancarias y PayPal. Todos los pagos están protegidos con encriptación SSL.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                                ¿Ofrecen descuentos para ONGs?
                            </button>
                        </h2>
                        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sí, ofrecemos descuentos especiales del 50% para organizaciones sin fines de lucro. Contáctanos con tu documentación para aplicar.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                                ¿Hay período de prueba gratuito?
                            </button>
                        </h2>
                        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Sí, ofrecemos 7 días gratuitos en cualquier plan para que puedas probar nuestras funcionalidades sin compromiso.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section py-5 bg-primary text-white">
    <div class="container text-center">
        <h3>¿Necesitas un plan personalizado?</h3>
        <p class="mb-4">Contáctanos para crear una solución a medida para tu empresa</p>
        <a href="{{ route('contacto') }}" class="btn btn-light btn-lg me-3">
            <i class="fas fa-phone me-2"></i>
            Contactar Ventas
        </a>
        <a href="{{ route('recursos-rh') }}" class="btn btn-outline-light btn-lg">
            <i class="fas fa-tools me-2"></i>
            Recursos para RH
        </a>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const monthlyToggle = document.getElementById('monthly');
    const annualToggle = document.getElementById('annual');
    const monthlyPrices = document.querySelectorAll('.monthly-price');
    const annualPrices = document.querySelectorAll('.annual-price');
    
    monthlyToggle.addEventListener('change', function() {
        if (this.checked) {
            monthlyPrices.forEach(price => price.classList.remove('d-none'));
            annualPrices.forEach(price => price.classList.add('d-none'));
        }
    });
    
    annualToggle.addEventListener('change', function() {
        if (this.checked) {
            monthlyPrices.forEach(price => price.classList.add('d-none'));
            annualPrices.forEach(price => price.classList.remove('d-none'));
        }
    });
});
</script>
@endpush