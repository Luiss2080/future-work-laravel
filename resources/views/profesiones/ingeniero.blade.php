@extends('layouts.web-app')

@section('title', 'Ingeniería Civil - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/profesiones/ingeniero.css') }}">
@endsection

@section('content')
<!-- HERO SECTION -->
<section class="profession-hero">
    <div class="hero-content">
        <span class="hero-badge" data-aos="fade-down">Infraestructura & Desarrollo</span>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
            <i class="fas fa-building"></i> Ingeniería Civil
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Constructores del mundo moderno. 
            Diseñando y ejecutando las obras que conectan y soportan nuestra sociedad.
        </p>
    </div>
</section>

<!-- MAIN CONTAINER -->
<div class="profession-container">
    
    <!-- LEFT CONTENT -->
    <div class="main-content">
        
        <!-- DESCRIPTION -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-hard-hat"></i> ¿Qué hace un Ingeniero Civil?</h2>
            <p class="text-content">
                Los ingenieros civiles planifican, diseñan y supervisan la construcción de infraestructuras esenciales
                como edificios, puentes, carreteras y sistemas hidráulicos. Su labor es fundamental para el
                desarrollo urbano y la calidad de vida.
            </p>
        </section>

        <!-- RESPONSIBILITIES -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tasks"></i> Responsabilidades Principales</h2>
            <div class="responsibility-list">
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Cálculo estructural y análisis de cargas.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Gestión y dirección de obras de construcción.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Diseño de sistemas de transporte e hidráulicos.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Evaluación de impacto ambiental y sostenibilidad.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Control de calidad de materiales y procesos.</span>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-calculator"></i> Habilidades Clave</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fas fa-square-root-alt"></i>
                    <h4>Matemáticas</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-project-diagram"></i>
                    <h4>Gestión</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-laptop-code"></i>
                    <h4>Software CAD</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-balance-scale"></i>
                    <h4>Legislación</h4>
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
                <span class="stat-value"><i class="fas fa-dollar-sign"></i> 35k - 70k /mes</span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Demanda Laboral</span>
                <span class="stat-value" style="color: #22c55e;">Muy Alta <i class="fas fa-chart-line"></i></span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Vacantes Activas</span>
                <span class="stat-value">120 Puestos</span>
            </div>
        </div>

        <!-- JOBS WIDGET -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Empleos Relacionados</h3>
            <div class="job-links">
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Residente de Obra
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Ingeniero Estructural
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Topógrafo
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Gerente de Proyectos
                </a>
            </div>
        </div>

        <!-- CTA WIDGET -->
        <div class="sidebar-widget" style="text-align: center; border-color: var(--primary-neon);">
            <h3 class="widget-title" style="color: var(--primary-neon);">¿Eres Ingeniero?</h3>
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
            <i class="fas fa-hard-hat"></i>
            <h4>Albañil</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-ruler-combined"></i>
            <h4>Topógrafo</h4>
        </div>
    </div>
</section>
@endsection
