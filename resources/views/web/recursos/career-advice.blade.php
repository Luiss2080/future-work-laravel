@extends('layouts.web.app')

@section('title', 'Consejos de Carrera - Future Work')
@section('description', 'Obtén consejos profesionales para mejorar tu carrera y conseguir el trabajo ideal.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/pages-common.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/web/candidates.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title">
                <i class="fas fa-lightbulb text-primary me-3"></i>
                Consejos de Carrera
            </h1>
            <p class="page-subtitle">
                Guías profesionales para impulsar tu desarrollo laboral y conseguir el trabajo de tus sueños
            </p>
        </div>
    </div>
</section>

<!-- Tips Section -->
<section class="tips-section py-5">
    <div class="container">
        <div class="row">
            <!-- CV Tips -->
            <div class="col-lg-6 mb-5">
                <div class="tip-card h-100">
                    <div class="tip-header">
                        <i class="fas fa-file-alt text-primary"></i>
                        <h3>Optimiza tu CV</h3>
                    </div>
                    <div class="tip-content">
                        <ul class="tip-list">
                            <li><i class="fas fa-check text-success"></i> Mantén tu CV en máximo 2 páginas</li>
                            <li><i class="fas fa-check text-success"></i> Usa palabras clave relevantes para tu industria</li>
                            <li><i class="fas fa-check text-success"></i> Incluye números y logros específicos</li>
                            <li><i class="fas fa-check text-success"></i> Actualiza regularmente tu información</li>
                            <li><i class="fas fa-check text-success"></i> Usa un formato limpio y profesional</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Interview Tips -->
            <div class="col-lg-6 mb-5">
                <div class="tip-card h-100">
                    <div class="tip-header">
                        <i class="fas fa-comments text-primary"></i>
                        <h3>Entrevistas Exitosas</h3>
                    </div>
                    <div class="tip-content">
                        <ul class="tip-list">
                            <li><i class="fas fa-check text-success"></i> Investiga sobre la empresa antes</li>
                            <li><i class="fas fa-check text-success"></i> Prepara ejemplos de tus logros</li>
                            <li><i class="fas fa-check text-success"></i> Viste apropiadamente para la ocasión</li>
                            <li><i class="fas fa-check text-success"></i> Llega 10-15 minutos antes</li>
                            <li><i class="fas fa-check text-success"></i> Prepara preguntas inteligentes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Career Guides -->
<section class="guides-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Guías por Profesión</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="guide-card">
                    <div class="guide-icon">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h4>Albañilería</h4>
                    <p>Tips específicos para destacar en el sector construcción</p>
                    <ul class="guide-tips">
                        <li>Certifica tus habilidades técnicas</li>
                        <li>Documenta tus proyectos con fotos</li>
                        <li>Mantén actualizadas las normativas</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="guide-card">
                    <div class="guide-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h4>Electricista</h4>
                    <p>Estrategias para electricistas profesionales</p>
                    <ul class="guide-tips">
                        <li>Obtén certificaciones eléctricas</li>
                        <li>Especialízate en nuevas tecnologías</li>
                        <li>Mantén un registro de seguridad</li>
                    </ul>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="guide-card">
                    <div class="guide-icon">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h4>Arquitectura</h4>
                    <p>Consejos para profesionales del diseño</p>
                    <ul class="guide-tips">
                        <li>Crea un portafolio visual impactante</li>
                        <li>Aprende software de diseño actual</li>
                        <li>Networking en eventos profesionales</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Action Section -->
<section class="action-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h3>¿Listo para aplicar estos consejos?</h3>
                <p class="mb-0">Comienza mejorando tu perfil profesional y encuentra mejores oportunidades</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('subir-cv') }}" class="btn btn-primary btn-lg me-3">
                    <i class="fas fa-upload me-2"></i>
                    Subir CV
                </a>
                <a href="{{ route('bolsa-trabajo') }}" class="btn btn-outline-primary btn-lg">
                    <i class="fas fa-search me-2"></i>
                    Buscar Empleos
                </a>
            </div>
        </div>
    </div>
</section>
@endsection