@extends('layouts.web-app')

@section('title', 'Carpintería - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/profesiones/carpintero.css') }}">
@endsection

@section('content')
<!-- HERO SECTION -->
<section class="profession-hero">
    <div class="hero-content">
        <span class="hero-badge" data-aos="fade-down">Artesanía & Madera</span>
        <h1 class="hero-title" data-aos="fade-up" data-aos-delay="100">
            <i class="fas fa-hammer"></i> Carpintería
        </h1>
        <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">
            Expertos en dar forma a la madera. Desde estructuras arquitectónicas hasta mobiliario fino,
            los carpinteros combinan arte y precisión técnica.
        </p>
    </div>
</section>

<!-- MAIN CONTAINER -->
<div class="profession-container">
    
    <!-- LEFT CONTENT -->
    <div class="main-content">
        
        <!-- DESCRIPTION -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tree"></i> ¿Qué hace un Carpintero?</h2>
            <p class="text-content">
                Los carpinteros transforman la madera en soluciones funcionales y estéticas. Su labor abarca
                desde la instalación de grandes estructuras de soporte hasta el detallado de muebles y acabados.
                Son esenciales tanto en la fase estructural (obra negra) como en la de acabados de cualquier construcción.
            </p>
        </section>

        <!-- RESPONSIBILITIES -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tasks"></i> Responsabilidades Principales</h2>
            <div class="responsibility-list">
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Lectura de planos y diseño de cortes.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Instalación de marcos, puertas y ventanas.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Fabricación y reparación de muebles a medida.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Selección y tratamiento de maderas.</span>
                </div>
                <div class="resp-item">
                    <i class="fas fa-check-circle"></i>
                    <span>Uso experto de herramientas de corte y lijado.</span>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section class="content-section" data-aos="fade-up">
            <h2 class="section-title"><i class="fas fa-tools"></i> Habilidades Clave</h2>
            <div class="skills-grid">
                <div class="skill-card">
                    <i class="fas fa-pencil-ruler"></i>
                    <h4>Diseño Técnico</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-hand-paper"></i>
                    <h4>Destreza Manual</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-eye"></i>
                    <h4>Atención al Detalle</h4>
                </div>
                <div class="skill-card">
                    <i class="fas fa-calculator"></i>
                    <h4>Cálculo Numérico</h4>
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
                <span class="stat-value"><i class="fas fa-dollar-sign"></i> 20k - 40k /mes</span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Demanda Laboral</span>
                <span class="stat-value" style="color: #22c55e;">Media-Alta <i class="fas fa-arrow-up"></i></span>
            </div>
            <div class="stat-row">
                <span class="stat-label">Vacantes Activas</span>
                <span class="stat-value">87 Puestos</span>
            </div>
        </div>

        <!-- JOBS WIDGET -->
        <div class="sidebar-widget">
            <h3 class="widget-title">Empleos Relacionados</h3>
            <div class="job-links">
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Ebanista
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Instalador de Pisos
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Restaurador de Muebles
                </a>
                <a href="#" class="job-link">
                    <i class="fas fa-chevron-right"></i> Carpintero de Obra
                </a>
            </div>
        </div>

        <!-- CTA WIDGET -->
        <div class="sidebar-widget" style="text-align: center; border-color: var(--primary-neon);">
            <h3 class="widget-title" style="color: var(--primary-neon);">¿Eres Carpintero?</h3>
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
            <h4>Diseñador de Interiores</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-paint-roller"></i>
            <h4>Barnizador</h4>
        </div>
        <div class="skill-card">
            <i class="fas fa-industry"></i>
            <h4>Operador CNC</h4>
        </div>
    </div>
</section>
@endsection
