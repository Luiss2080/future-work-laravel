@extends('layouts.web-app')

@section('title', 'Albañilería - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/profesiones/albanil.css') }}">
@endsection

@section('content')
<!-- HERO SECTION -->
<section class="profession-hero">
    <div class="hero-content">
        <span class="hero-badge" data-aos="fade-down">Construcción & Obras</span>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
            <i class="fas fa-hammer"></i> Albañilería
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Profesionales expertos en la construcción, reparación y modelado de estructuras. 
            La base fundamental de cualquier obra exitosa..
        </p>
    </div>
</section>

<!-- MAIN CONTAINER -->
<div class="profession-container">
    
    <!-- LEFT CONTENT -->
    <div class="main-content">
        
        <!-- DESCRIPTION -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-info-circle"></i> ¿Qué hace un Albañil?</h2>
            <p class="text-content">
                Los albañiles son los artesanos de la construcción moderna. Se encargan de interpretar planos, 
                preparar materiales y levantar estructuras sólidas utilizando ladrillo, bloque, piedra y concreto. 
                Su rol es crítico para garantizar la seguridad, durabilidad y estética de edificaciones residenciales y comerciales.
            </p>
        </section>

        <!-- RESPONSIBILITIES -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tasks"></i> Responsabilidades Principales</h2>
            <div class="responsibility-list">
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Cimentación y levantamiento de muros de carga.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Preparación precisa de mezclas (mortero, concreto).</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Interpretación técnica de planos arquitectónicos.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Aplicación de revestimientos y acabados finos.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Reparación y mantenimiento de estructuras dañadas.</span>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-bolt"></i> Habilidades Clave</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fas fa-ruler-combined"></i>
                    <h4>Precisión Milimétrica</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-hard-hat"></i>
                    <h4>Seguridad Industrial</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-shapes"></i>
                    <h4>Geometría Espacial</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-hands-helping"></i>
                    <h4>Trabajo en Equipo</h4>
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
                <span class="stat-value" style="color: #22c55e;">Alta <i class="fas fa-arrow-up"></i></span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Vacantes Activas</span>
                <span class="stat-value">124 Puestos</span>
            </div>
        </div>

        <!-- JOBS WIDGET -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Empleos Relacionados</h3>
            <div class="job-links">
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Maestro de Obras
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Ayudante de Albañil
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Oficial de Primera
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Solador / Alicatador
                </a>
            </div>
        </div>

        <!-- CTA WIDGET -->
        <div class="sidebar-widget" style="text-align: center; border-color: var(--primary-neon);">
            <h3 class="widget-title" style="color: var(--primary-neon);">¿Eres Albañil?</h3>
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
            <i class="fas fa-paint-roller"></i>
            <h4>Pintor</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-plug"></i>
            <h4>Electricista</h4>
        </div>
    </div>
</section>
@endsection
