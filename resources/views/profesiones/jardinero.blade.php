@extends('layouts.web-app')

@section('title', 'Jardinería - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/profesiones/jardinero.css') }}">
@endsection

@section('content')
<!-- HERO SECTION -->
<section class="profession-hero">
    <div class="hero-content">
        <span class="hero-badge" data-aos="fade-down">Paisajismo & Cuidado</span>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
            <i class="fas fa-leaf"></i> Jardinería
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Artistas de la naturaleza y expertos en crecimiento. 
            Transformando espacios exteriores en oasis de vida y color.
        </p>
    </div>
</section>

<!-- MAIN CONTAINER -->
<div class="profession-container">
    
    <!-- LEFT CONTENT -->
    <div class="main-content">
        
        <!-- DESCRIPTION -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-seedling"></i> ¿Qué hace un Jardinero?</h2>
            <p class="text-content">
                Los jardineros son responsables del diseño, cultivo y mantenimiento de espacios verdes.
                Desde la poda ornamental hasta la gestión de sistemas de riego complejos, su labor
                embellece el entorno y promueve la salud ambiental.
            </p>
        </section>

        <!-- RESPONSIBILITIES -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tasks"></i> Responsabilidades Principales</h2>
            <div class="responsibility-list">
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Diseño y mantenimiento de jardines y parques.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Instalación de sistemas de riego automatizados.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Control de plagas y fertilización orgánica.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Poda de árboles y arbustos ornamentales.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Selección de especies vegetales adecuadas al clima.</span>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-spa"></i> Habilidades Clave</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fas fa-tree"></i>
                    <h4>Botánica</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-tint"></i>
                    <h4>Riego</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-pencil-ruler"></i>
                    <h4>Paisajismo</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-hand-holding-heart"></i>
                    <h4>Cuidado</h4>
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
                <span class="stat-value"><i class="fas fa-dollar-sign"></i> 15k - 28k /mes</span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Demanda Laboral</span>
                <span class="stat-value" style="color: #22c55e;">Estacional <i class="fas fa-calendar-alt"></i></span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Vacantes Activas</span>
                <span class="stat-value">64 Puestos</span>
            </div>
        </div>

        <!-- JOBS WIDGET -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Empleos Relacionados</h3>
            <div class="job-links">
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Paisajista
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Mantenimiento de Campos
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Viverista
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Técnico en Riego
                </a>
            </div>
        </div>

        <!-- CTA WIDGET -->
        <div class="sidebar-widget" style="text-align: center; border-color: var(--primary-neon);">
            <h3 class="widget-title" style="color: var(--primary-neon);">¿Eres Jardinero?</h3>
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
            <h4>Albañil</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-hammer"></i>
            <h4>Carpintero</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-water"></i>
            <h4>Plomero</h4>
        </div>
    </div>
</section>
@endsection
