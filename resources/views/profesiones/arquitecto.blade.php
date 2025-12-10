@extends('layouts.web-app')

@section('title', 'Arquitectura - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/profesiones/arquitecto.css') }}">
@endsection

@section('content')
<!-- HERO SECTION -->
<section class="profession-hero">
    <div class="hero-content">
        <span class="hero-badge" data-aos="fade-down">Diseño & Construcción</span>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
            <i class="fas fa-drafting-compass"></i> Arquitectura
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Visionarios del espacio y la forma. 
            Diseñando el futuro de nuestras ciudades y hogares.
        </p>
    </div>
</section>

<!-- MAIN CONTAINER -->
<div class="profession-container">
    
    <!-- LEFT CONTENT -->
    <div class="main-content">
        
        <!-- DESCRIPTION -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-city"></i> ¿Qué hace un Arquitecto?</h2>
            <p class="text-content">
                Los arquitectos imaginan y crean espacios que combinan funcionalidad, belleza y sostenibilidad.
                Desde la planificación urbana hasta el diseño residencial, su trabajo da forma al entorno
                en el que vivimos y trabajamos.
            </p>
        </section>

        <!-- RESPONSIBILITIES -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tasks"></i> Responsabilidades Principales</h2>
            <div class="responsibility-list">
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Diseño conceptual y desarrollo de planos técnicos.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Coordinación de equipos de ingeniería y construcción.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Supervisión de obras y cumplimiento de normativas.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Investigación de materiales sostenibles e innovadores.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Gestión de presupuestos y plazos de ejecución.</span>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-pencil-ruler"></i> Habilidades Clave</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fas fa-cube"></i>
                    <h4>Modelado 3D</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-calculator"></i>
                    <h4>Cálculo</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-eye"></i>
                    <h4>Estética</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-users-cog"></i>
                    <h4>Gestión</h4>
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
                <span class="stat-value"><i class="fas fa-dollar-sign"></i> 30k - 60k /mes</span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Demanda Laboral</span>
                <span class="stat-value" style="color: #22c55e;">Alta <i class="fas fa-chart-line"></i></span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Vacantes Activas</span>
                <span class="stat-value">85 Puestos</span>
            </div>
        </div>

        <!-- JOBS WIDGET -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Empleos Relacionados</h3>
            <div class="job-links">
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Diseñador de Interiores
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Ingeniero Civil
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Delineante
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Paisajista
                </a>
            </div>
        </div>

        <!-- CTA WIDGET -->
        <div class="sidebar-widget" style="text-align: center; border-color: var(--primary-neon);">
            <h3 class="widget-title" style="color: var(--primary-neon);">¿Eres Arquitecto?</h3>
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
            <i class="fas fa-hard-hat"></i>
            <h4>Ingeniero Civil</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-hammer"></i>
            <h4>Albañil</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-leaf"></i>
            <h4>Paisajista</h4>
        </div>
    </div>
</section>
@endsection
