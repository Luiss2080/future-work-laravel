@extends('layouts.web.app')

@section('title', 'Inicio - Future Work')
@section('description', 'Encuentra tu empleo ideal o publica ofertas de trabajo en Future Work, el portal líder en empleos.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/home.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">
                Encuentra tu <span class="text-accent">Futuro Laboral</span>
            </h1>
            <p class="hero-subtitle">
                Conectamos talento con oportunidades. Miles de empleos esperan por ti en el portal de empleos más confiable de la región.
            </p>
            <div class="hero-buttons">
                <a href="#empleos" class="btn btn-primary btn-lg">
                    <i class="fas fa-search me-2"></i>
                    Buscar Empleos
                </a>
                <a href="#empresas" class="btn btn-outline-white btn-lg">
                    <i class="fas fa-building me-2"></i>
                    Para Empresas
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <span class="stat-number">15000</span>
                <span class="stat-label">Empleos Activos</span>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <span class="stat-number">50000</span>
                <span class="stat-label">Candidatos Registrados</span>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-building"></i>
                </div>
                <span class="stat-number">2500</span>
                <span class="stat-label">Empresas Confiables</span>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <span class="stat-number">35000</span>
                <span class="stat-label">Contrataciones Exitosas</span>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">¿Por qué elegir Future Work?</h2>
            <p class="section-subtitle">
                Ofrecemos las mejores herramientas para impulsar tu carrera profesional
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-search"></i>
                </div>
                <h3 class="feature-title">Búsqueda Inteligente</h3>
                <p class="feature-description">
                    Algoritmos avanzados que te ayudan a encontrar empleos perfectamente alineados con tu perfil y preferencias.
                </p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3 class="feature-title">Empresas Verificadas</h3>
                <p class="feature-description">
                    Solo trabajamos con empresas verificadas y confiables para garantizar oportunidades laborales legítimas.
                </p>
            </div>
            
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <h3 class="feature-title">Crecimiento Profesional</h3>
                <p class="feature-description">
                    Herramientas y recursos para potenciar tu carrera y alcanzar tus objetivos profesionales.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Cómo funciona</h2>
            <p class="section-subtitle">
                Encuentra tu empleo ideal en 4 simples pasos
            </p>
        </div>
        
        <div class="process-steps">
            <div class="process-step">
                <div class="step-number">1</div>
                <h3 class="step-title">Regístrate</h3>
                <p class="step-description">
                    Crea tu perfil profesional con tu experiencia, habilidades y preferencias laborales.
                </p>
            </div>
            
            <div class="process-step">
                <div class="step-number">2</div>
                <h3 class="step-title">Explora</h3>
                <p class="step-description">
                    Navega por miles de ofertas de empleo filtradas según tus criterios de búsqueda.
                </p>
            </div>
            
            <div class="process-step">
                <div class="step-number">3</div>
                <h3 class="step-title">Aplica</h3>
                <p class="step-description">
                    Envía tu CV y carta de presentación con un solo clic a las ofertas que te interesen.
                </p>
            </div>
            
            <div class="process-step">
                <div class="step-number">4</div>
                <h3 class="step-title">Conecta</h3>
                <p class="step-description">
                    Recibe respuestas de empleadores y gestiona tus entrevistas desde tu panel personal.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Section -->
<section class="newsletter-section">
    <div class="container">
        <div class="newsletter-content">
            <h2 class="newsletter-title">
                <i class="fas fa-envelope me-3"></i>
                Mantente Actualizado
            </h2>
            <p class="newsletter-description">
                Recibe las mejores oportunidades de empleo directamente en tu email
            </p>
            
            <form class="newsletter-form-home">
                <input type="email" class="newsletter-email" placeholder="Ingresa tu email" required>
                <button type="submit" class="newsletter-submit">
                    Suscribirse
                </button>
            </form>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-bg"></div>
    <div class="container">
        <div class="cta-content">
            <h2 class="cta-title">¿Listo para dar el siguiente paso?</h2>
            <p class="cta-description">
                Únete a miles de profesionales que ya encontraron su empleo ideal con nosotros
            </p>
            <a href="{{ route('register') }}" class="btn btn-primary btn-lg me-3">
                <i class="fas fa-rocket me-2"></i>
                Comenzar Ahora
            </a>
            <a href="{{ route('subir-cv') }}" class="btn btn-outline-light btn-lg">
                <i class="fas fa-upload me-2"></i>
                Subir CV
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/web/home.js') }}"></script>
@endpush