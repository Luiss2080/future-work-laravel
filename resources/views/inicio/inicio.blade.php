@extends('layouts.web-app')

@section('title', 'Inicio - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/inicio/inicio.css') }}">
@endsection

@section('content')
<div class="inicio-container">
    {{-- Hero Section --}}
    <section class="hero-section">
        <div class="hero-bg">
            <div class="hero-overlay"></div>
            <img src="{{ asset('images/hero-trabajo.jpg') }}" alt="Background" class="hero-bg-img">
        </div>
        <div class="container hero-content">
            <div class="hero-text">
                <span class="hero-badge">01 / FUTURE WORK</span>
                <h1 class="animate-reveal">CONSTRUYE <br> TU FUTURO HOY</h1>
                <p class="animate-reveal delay-1">
                    La plataforma inteligente que conecta talento con oportunidades mediante algoritmos de precisión.
                </p>
                <div class="hero-actions animate-reveal delay-2">
                    <a href="{{ route('bolsa-trabajo') }}" class="btn-premium primary">EXPLORAR EMPLEOS</a>
                    <a href="{{ route('publicar-empleo') }}" class="btn-premium outline">PARA EMPRESAS</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Algoritmos de Retroalimentación --}}
    <section class="features-section" id="algoritmos">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">TECNOLOGÍA</span>
                <h2>ALGORITMOS DE <span class="highlight">RETROALIMENTACIÓN</span></h2>
            </div>
            
            <div class="features-grid">
                <div class="feature-card glass-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Análisis de Perfil</h3>
                    <p>Nuestro sistema escanea tus habilidades y experiencia para detectar áreas de mejora.</p>
                </div>
                <div class="feature-card glass-card active">
                    <div class="feature-visual">
                        <div class="scan-line"></div>
                        <div class="data-points">
                            <span></span><span></span><span></span>
                        </div>
                        <div class="feature-icon-lg">
                            <i class="fas fa-brain"></i>
                        </div>
                    </div>
                    <h3>Detección de Fallas</h3>
                    <p>Identificamos brechas en tu CV y te sugerimos correcciones en tiempo real.</p>
                </div>
                <div class="feature-card glass-card">
                    <div class="feature-icon">
                        <i class="fas fa-arrow-up"></i>
                    </div>
                    <h3>Optimización</h3>
                    <p>Recibe sugerencias personalizadas para aumentar tu empleabilidad al 100%.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Servicios Extras --}}
    <section class="services-section" id="servicios">
        <div class="container">
            <div class="row no-gutters services-wrapper">
                <div class="col-lg-4 service-info">
                    <span class="section-subtitle">SERVICIOS</span>
                    <h2>NUESTRAS <br> ESPECIALIDADES</h2>
                    <p>Desde trabajos profesionales hasta oficios esenciales. Todo en un solo lugar.</p>
                    <div class="service-list">
                        <div class="service-item">
                            <i class="fas fa-briefcase"></i>
                            <span>Bolsa de Trabajo</span>
                        </div>
                        <div class="service-item">
                            <i class="fas fa-leaf"></i>
                            <span>Jardinería</span>
                        </div>
                        <div class="service-item">
                            <i class="fas fa-tools"></i>
                            <span>Plomería</span>
                        </div>
                        <div class="service-item">
                            <i class="fas fa-hammer"></i>
                            <span>Carpintería</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 service-visual">
                    <div class="service-image">
                       {{-- Placeholder image, ideally user would upload a collage --}}
                         <div class="overlay-gradient"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Espacio Publicitario --}}
    <section class="ads-section" id="publicidad">
        <div class="container">
            <div class="ad-banner glass-card">
                <div class="ad-content">
                    <span class="ad-label">ESPACIO PUBLICITARIO</span>
                    <h3>TU EMPRESA AQUÍ</h3>
                    <p>Destaca tus servicios ante miles de candidatos y contratistas cada mes.</p>
                    <button class="btn-premium text-only">CONTACTAR VENTAS <i class="fas fa-arrow-right"></i></button>
                </div>
                <div class="ad-visual">
                    {{-- Abstract geometric shapes for 'ad' visualization --}}
                    <div class="geo-shape shape-1"></div>
                    <div class="geo-shape shape-2"></div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/inicio/inicio.js') }}"></script>
@endsection