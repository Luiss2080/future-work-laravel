@extends('layouts.web-app')

@section('title', 'Escultura - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/profesiones/escultor.css') }}">
@endsection

@section('content')
<!-- HERO SECTION -->
<section class="profession-hero">
    <div class="hero-content">
        <span class="hero-badge" data-aos="fade-down">Arte & Materia</span>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
            <i class="fas fa-hammer"></i> Escultura
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Transformando la materia inerte en expresión viva.
            Donde la piedra, la madera y el metal cobran alma y forma.
        </p>
    </div>
</section>

<!-- MAIN CONTAINER -->
<div class="profession-container">
    
    <!-- LEFT CONTENT -->
    <div class="main-content">
        
        <!-- DESCRIPTION -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-cubes"></i> ¿Qué hace un Escultor?</h2>
            <p class="text-content">
                Los escultores son artistas que crean formas tridimensionales a partir de diversos materiales.
                Su trabajo abarca desde el modelado en arcilla y el tallado en piedra hasta instalaciones
                modernas con materiales reciclados y tecnología digital.
            </p>
        </section>

        <!-- RESPONSIBILITIES -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tasks"></i> Responsabilidades Principales</h2>
            <div class="responsibility-list">
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Diseño y bocetado de conceptos artísticos.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Selección y preparación de materiales (piedra, metal, madera).</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Técnicas de tallado, modelado, fundición y ensamblaje.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Restauración y conservación de obras de arte.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Gestión de exposiciones y portfolios.</span>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-hand-sparkles"></i> Habilidades Clave</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fas fa-brain"></i>
                    <h4>Creatividad</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-hand-holding"></i>
                    <h4>Destreza</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-cube"></i>
                    <h4>Visión 3D</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-tools"></i>
                    <h4>Técnica</h4>
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
                <span class="stat-value"><i class="fas fa-dollar-sign"></i> 18k - 40k /mes</span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Demanda Laboral</span>
                <span class="stat-value" style="color: #22c55e;">Nicho <i class="fas fa-chart-line"></i></span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Vacantes Activas</span>
                <span class="stat-value">32 Puestos</span>
            </div>
        </div>

        <!-- JOBS WIDGET -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Empleos Relacionados</h3>
            <div class="job-links">
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Artista Plástico
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Restaurador
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Ceramista
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Modelador 3D
                </a>
            </div>
        </div>

        <!-- CTA WIDGET -->
        <div class="sidebar-widget" style="text-align: center; border-color: var(--primary-neon);">
            <h3 class="widget-title" style="color: var(--primary-neon);">¿Eres Escultor?</h3>
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
            <i class="fas fa-paint-brush"></i>
            <h4>Pintor</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-drafting-compass"></i>
            <h4>Arquitecto</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-pencil-ruler"></i>
            <h4>Diseñador</h4>
        </div>
    </div>
</section>
@endsection
