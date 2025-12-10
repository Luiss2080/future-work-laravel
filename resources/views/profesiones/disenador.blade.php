@extends('layouts.web-app')

@section('title', 'Diseño de Interiores - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/profesiones/disenador.css') }}">
@endsection

@section('content')
<!-- HERO SECTION -->
<section class="profession-hero">
    <div class="hero-content">
        <span class="hero-badge" data-aos="fade-down">Creatividad & Espacio</span>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
            <i class="fas fa-paint-brush"></i> Diseño de Interiores
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Transformando espacios vacíos en experiencias inolvidables.
            Donde la funcionalidad se encuentra con la estética pura.
        </p>
    </div>
</section>

<!-- MAIN CONTAINER -->
<div class="profession-container">
    
    <!-- LEFT CONTENT -->
    <div class="main-content">
        
        <!-- DESCRIPTION -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-couch"></i> ¿Qué hace un Diseñador?</h2>
            <p class="text-content">
                Los diseñadores de interiores planifican y decoran espacios residenciales y comerciales.
                Su objetivo es mejorar la calidad de vida y la productividad a través de la gestión eficiente
                del espacio, la luz y los materiales.
            </p>
        </section>

        <!-- RESPONSIBILITIES -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tasks"></i> Responsabilidades Principales</h2>
            <div class="responsibility-list">
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Desarrollo de conceptos de diseño y moodboards.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Selección de mobiliario, iluminación y acabados.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Creación de planos y visualizaciones 3D.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Coordinación con arquitectos y contratistas.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Gestión de presupuestos y compras.</span>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-palette"></i> Habilidades Clave</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fas fa-swatchbook"></i>
                    <h4>Colorimetría</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-cube"></i>
                    <h4>Renderizado</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-ruler-combined"></i>
                    <h4>Ergonomía</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-lightbulb"></i>
                    <h4>Creatividad</h4>
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
                <span class="stat-value"><i class="fas fa-dollar-sign"></i> 20k - 45k /mes</span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Demanda Laboral</span>
                <span class="stat-value" style="color: #22c55e;">Creciente <i class="fas fa-chart-line"></i></span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Vacantes Activas</span>
                <span class="stat-value">55 Puestos</span>
            </div>
        </div>

        <!-- JOBS WIDGET -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Empleos Relacionados</h3>
            <div class="job-links">
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Decorador
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Escaparatista
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Diseñador de Interiores
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Consultor de Estilo
                </a>
            </div>
        </div>

        <!-- CTA WIDGET -->
        <div class="sidebar-widget" style="text-align: center; border-color: var(--primary-neon);">
            <h3 class="widget-title" style="color: var(--primary-neon);">¿Eres Diseñador?</h3>
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
            <i class="fas fa-drafting-compass"></i>
            <h4>Arquitecto</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-camera"></i>
            <h4>Fotógrafo</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-pencil-alt"></i>
            <h4>Ilustrador</h4>
        </div>
    </div>
</section>
@endsection
