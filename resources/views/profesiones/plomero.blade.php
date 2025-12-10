@extends('layouts.web-app')

@section('title', 'Plomería - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/profesiones/plomero.css') }}">
@endsection

@section('content')
<!-- HERO SECTION -->
<section class="profession-hero">
    <div class="hero-content">
        <span class="hero-badge" data-aos="fade-down">Hidráulica & Mantenimiento</span>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
            <i class="fas fa-wrench"></i> Plomería
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Expertos en sistemas vitales de agua y saneamiento. 
            Garantizando funcionalidad y salud en cada instalación.
        </p>
    </div>
</section>

<!-- MAIN CONTAINER -->
<div class="profession-container">
    
    <!-- LEFT CONTENT -->
    <div class="main-content">
        
        <!-- DESCRIPTION -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-water"></i> ¿Qué hace un Plomero?</h2>
            <p class="text-content">
                Los plomeros son especialistas en la instalación y reparación de redes de tuberías para
                la distribución de agua potable y la evacuación de aguas residuales. Su trabajo es esencial
                para el funcionamiento higiénico y eficiente de hogares e industrias.
            </p>
        </section>

        <!-- RESPONSIBILITIES -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tasks"></i> Responsabilidades Principales</h2>
            <div class="responsibility-list">
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Instalación de redes hidráulicas y sanitarias.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Detección y reparación de fugas (Gas y Agua).</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Mantenimiento de calentadores y bombas.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Montaje de grifería y sanitarios de alta gama.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Interpretación de planos isométricos.</span>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tools"></i> Habilidades Clave</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fas fa-faucet"></i>
                    <h4>Hidráulica</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-search-location"></i>
                    <h4>Diagnóstico</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-ruler-vertical"></i>
                    <h4>Precisión</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-user-shield"></i>
                    <h4>Seguridad</h4>
                </div>
            </div>
        </section>

    </div>

    <!-- RIGHT SIDEBAR -->
    <aside class="profession-sidebar" data-aos="fade-left">
        
        <!-- STATS WIDGET -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Datos del Mercado</h3>
            <div class="stat-row">
                <span class="stat-label">Salario Promedio</span>
                <span class="stat-value"><i class="fas fa-dollar-sign"></i> 18k - 35k /mes</span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Demanda Laboral</span>
                <span class="stat-value" style="color: #22c55e;">Constante <i class="fas fa-arrow-up"></i></span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Vacantes Activas</span>
                <span class="stat-value">92 Puestos</span>
            </div>
        </div>

        <!-- JOBS WIDGET -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Empleos Relacionados</h3>
            <div class="job-links">
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Fontanero Industrial
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Técnico en Gas
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Instalador de Bombas
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Mantenimiento General
                </a>
            </div>
        </div>

        <!-- CTA WIDGET -->
        <div class="sidebar-widget" style="text-align: center; border-color: var(--primary-neon);">
            <h3 class="widget-title" style="color: var(--primary-neon);">¿Eres Plomero?</h3>
            <p style="color: var(--text-gray); margin-bottom: 1.5rem;">Cientos de empresas buscan tu talento ahora mismo.</p>
            <a href="{{ route('register') }}" class="btn-sidebar btn-neon">CREAR PERFIL</a>
            <a href="{{ route('bolsa-trabajo') }}" class="btn-sidebar btn-outline">VER EMPLEOS</a>
        </div>

    </aside>
</div>

<!-- RELATED PROFESSIONS -->
<section class="related-section">
    <div style="text-align: center;">
        <h2 style="color: white; font-size: 2rem;">Otras Profesiones</h2>
        <p style="color: var(--text-gray);">Explora carreras similares en el sector</p>
    </div>
    <div class="related-grid">
        <div class="skill-card">
            <i class="fas fa-hammer"></i>
            <h4>Albañil</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-hard-hat"></i>
            <h4>Ingeniero Civil</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-bolt"></i>
            <h4>Electricista</h4>
        </div>
    </div>
</section>
@endsection
