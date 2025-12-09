@extends('layouts.web-app')

@section('title', 'Recursos para RR.HH. - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/empresas/recursos.css') }}">
@endsection

@section('content')

<!-- Hero Section -->
<section class="resources-hero">
    <div class="container hero-content">
        <h1 data-aos="fade-down">Centro de Recursos RH</h1>
        <p data-aos="fade-up" data-aos-delay="100">
            Herramientas, guías y estrategias para optimizar tus procesos de contratación
            y gestión de talento en la era digital.
        </p>
    </div>
</section>

<!-- Category Tabs -->
<div class="container">
    <div class="category-tabs" data-aos="fade-up" data-aos-delay="200">
        <a href="#guias" class="tab-btn active">Guías de Contratación</a>
        <a href="#plantillas" class="tab-btn">Plantillas</a>
        <a href="#herramientas" class="tab-btn">Herramientas</a>
        <a href="#blog" class="tab-btn">Blog RH</a>
    </div>
</div>

<!-- Main Content -->
<section class="resources-section">
    <div class="container">
        
        <!-- GUÍAS -->
        <h2 class="section-label">Guías Destacadas</h2>
        <div class="resources-grid">
            <!-- Resource 1 -->
            <div class="resource-card" data-aos="fade-up">
                <div class="resource-img">
                    <img src="https://images.unsplash.com/photo-1573497620053-ea5300f94f21?q=80&w=2070&auto=format&fit=crop" alt="Entrevistas">
                    <span class="resource-tag">Guía PDF</span>
                </div>
                <div class="resource-content">
                    <h3>Cómo realizar entrevistas efectivas</h3>
                    <p>Aprende técnicas modernas para evaluar soft skills y fit cultural sin sesgos inconscientes.</p>
                    <div class="resource-meta">
                        <span><i class="far fa-clock"></i> 15 min lectura</span>
                        <span>Actualizado 2024</span>
                    </div>
                    <a href="#" class="btn-download"><i class="fas fa-download"></i> Descargar Guía</a>
                </div>
            </div>

            <!-- Resource 2 -->
            <div class="resource-card" data-aos="fade-up" data-aos-delay="100">
                <div class="resource-img">
                    <img src="https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=2070&auto=format&fit=crop" alt="Onboarding">
                    <span class="resource-tag">Webinar</span>
                </div>
                <div class="resource-content">
                    <h3>Proceso de Onboarding Exitoso</h3>
                    <p>Estrategias para aumentar la retención de empleados en los primeros 90 días.</p>
                    <div class="resource-meta">
                        <span><i class="fas fa-video"></i> 45 min</span>
                        <span>Video Clase</span>
                    </div>
                    <a href="#" class="btn-download"><i class="fas fa-play"></i> Ver Webinar</a>
                </div>
            </div>

            <!-- Resource 3 -->
            <div class="resource-card" data-aos="fade-up" data-aos-delay="200">
                <div class="resource-img">
                    <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?q=80&w=2070&auto=format&fit=crop" alt="Descripciones">
                    <span class="resource-tag">Artículo</span>
                </div>
                <div class="resource-content">
                    <h3>Redactar ofertas irresistibles</h3>
                    <p>Consejos de copywriting para atraer al mejor talento pasivo del mercado.</p>
                    <div class="resource-meta">
                        <span><i class="far fa-file-alt"></i> 8 min lectura</span>
                        <span>Blog Post</span>
                    </div>
                    <a href="#" class="btn-download"><i class="fas fa-arrow-right"></i> Leer Artículo</a>
                </div>
            </div>
        </div>

        <!-- PLANTILLAS -->
        <h2 class="section-label">Plantillas y Herramientas</h2>
        <div class="resources-grid">
            <!-- Template 1 -->
            <div class="resource-card" data-aos="fade-up">
                <div class="resource-img">
                    <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?q=80&w=2070&auto=format&fit=crop" alt="Checklist">
                    <span class="resource-tag">Excel</span>
                </div>
                <div class="resource-content">
                    <h3>Calculadora de Costos de Contratación</h3>
                    <p>Plantilla automatizada para estimar el ROI de tus nuevos empleados.</p>
                    <a href="#" class="btn-download"><i class="fas fa-file-excel"></i> Descargar Excel</a>
                </div>
            </div>

            <!-- Template 2 -->
            <div class="resource-card" data-aos="fade-up" data-aos-delay="100">
                <div class="resource-img">
                    <img src="https://images.unsplash.com/photo-1606326608606-aa0b62935f2b?q=80&w=2070&auto=format&fit=crop" alt="Evaluación">
                    <span class="resource-tag">Word</span>
                </div>
                <div class="resource-content">
                    <h3>Formato de Evaluación de Desempeño</h3>
                    <p>Matriz de competencias lista para usar en tus evaluaciones trimestrales.</p>
                    <a href="#" class="btn-download"><i class="fas fa-file-word"></i> Descargar Plantilla</a>
                </div>
            </div>

             <!-- Template 3 -->
             <div class="resource-card" data-aos="fade-up" data-aos-delay="200">
                <div class="resource-img">
                    <img src="https://images.unsplash.com/photo-1531403009284-440f080d1e12?q=80&w=2070&auto=format&fit=crop" alt="Kit Bienvenida">
                    <span class="resource-tag">PDF Kit</span>
                </div>
                <div class="resource-content">
                    <h3>Kit de Bienvenida Digital</h3>
                    <p>Checklist y documentos esenciales para enviar antes del primer día.</p>
                    <a href="#" class="btn-download"><i class="fas fa-file-pdf"></i> Descargar Kit</a>
                </div>
            </div>
        </div>

    </div>
</section>

@endsection