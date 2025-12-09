@extends('layouts.web-app')

@section('title', 'Electricista - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/profesiones/electricista.css') }}">
@endsection

@section('content')
<!-- HERO SECTION -->
<section class="profession-hero">
    <div class="hero-content">
        <span class="hero-badge" data-aos="fade-down">Energía & Sistemas</span>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
            <i class="fas fa-bolt"></i> Electricista
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Expertos en la gestión, instalación y mantenimiento de energía. 
            Iluminando y conectando el mundo de manera segura y eficiente.
        </p>
    </div>
</section>

<!-- MAIN CONTAINER -->
<div class="profession-container">
    
    <!-- LEFT CONTENT -->
    <div class="main-content">
        
        <!-- DESCRIPTION -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-info-circle"></i> ¿Qué hace un Electricista?</h2>
            <p class="text-content">
                Los electricistas diseñan, instalan y mantienen sistemas eléctricos en todo tipo de edificaciones.
                Desde cableado residencial hasta complejos sistemas industriales, su labor es crítica para
                garantizar el suministro de energía seguro y continuo.
            </p>
        </section>

        <!-- RESPONSIBILITIES -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tasks"></i> Responsabilidades Principales</h2>
            <div class="responsibility-list">
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Instalación de cableado y componentes eléctricos.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Diagnóstico y resolución de fallos en circuitos.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Interpretación de planos y esquemas eléctricos.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Mantenimiento preventivo de equipos y generadores.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Cumplimiento estricto de normativas de seguridad (RETIE).</span>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-microchip"></i> Habilidades Clave</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fas fa-project-diagram"></i>
                    <h4>Lectura de Esquemas</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-exclamation-triangle"></i>
                    <h4>Normativa y Seguridad</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-tools"></i>
                    <h4>Manejo de Herramientas</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-brain"></i>
                    <h4>Resolución Lógica</h4>
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
                <span class="stat-value"><i class="fas fa-dollar-sign"></i> 25k - 45k /mes</span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Demanda Laboral</span>
                <span class="stat-value" style="color: #22c55e;">Muy Alta <i class="fas fa-arrow-up"></i></span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Vacantes Activas</span>
                <span class="stat-value">156 Puestos</span>
            </div>
        </div>

        <!-- JOBS WIDGET -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Empleos Relacionados</h3>
            <div class="job-links">
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Técnico en Refrigeración
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Instalador de Paneles Solares
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Ingeniero Eléctrico
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Mantenimiento Industrial
                </a>
            </div>
        </div>

        <!-- CTA WIDGET -->
        <div class="sidebar-widget" style="text-align: center; border-color: var(--primary-neon);">
            <h3 class="widget-title" style="color: var(--primary-neon);">¿Eres Electricista?</h3>
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
            <i class="fas fa-robot"></i>
            <h4>Mecatrónico</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-wifi"></i>
            <h4>Tecnología (TI)</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-hammer"></i>
            <h4>Carpintero</h4>
        </div>
    </div>
</section>
@endsection
