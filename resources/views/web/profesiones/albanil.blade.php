@extends('layouts.web.app')

@section('title', 'Albañilería - Future Work')
@section('description', 'Conoce más sobre la profesión de Albañilería: Profesionales en construcción y reparaciones de estructuras')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/profession.css') }}">
@endpush

@section('content')
<!-- Page Header -->
<section class="page-header profession-header text-center py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="profession-icon mb-4">
                    <i class="fas fa-hard-hat text-primary" style="font-size: 4rem;"></i>
                </div>
                <h1 class="page-title display-4 fw-bold mb-3">Albañilería</h1>
                <p class="page-subtitle lead text-muted mb-4">Profesionales en construcción y reparaciones de estructuras</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}" class="text-decoration-none">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}#profesiones" class="text-decoration-none">Profesiones</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Albañilería</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Profession Details -->
<section class="profession-details py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Main Content -->
            <div class="col-lg-8">
                <div class="profession-content">
                    <div class="section-block mb-5">
                        <h2 class="mb-4">¿Qué hace un albañil?</h2>
                        <p class="lead mb-4">Los albañiles son profesionales especializados en la construcción y reparación de estructuras de mampostería, concreto y otros materiales de construcción. Su trabajo es fundamental en proyectos residenciales, comerciales e industriales.</p>
                        
                        <h3 class="mt-5 mb-3">Responsabilidades Principales</h3>
                        <ul class="custom-list list-unstyled">
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Construcción de muros y estructuras de mampostería</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Preparación y aplicación de mezclas de cemento</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Instalación de ladrillos, bloques y piedras</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Reparación de estructuras existentes</li>
                            <li class="mb-2"><i class="fas fa-check-circle text-primary me-2"></i>Lectura e interpretación de planos de construcción</li>
                        </ul>
                    </div>

                    <!-- Skills Section -->
                    <div class="section-block mb-5">
                        <h3 class="mb-4">Habilidades Requeridas</h3>
                        <div class="skills-grid row g-3">
                            <div class="col-md-6">
                                <div class="skill-item p-3 border rounded bg-light">
                                    <i class="fas fa-tools text-primary me-2"></i>
                                    Habilidades técnicas especializadas
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-item p-3 border rounded bg-light">
                                    <i class="fas fa-eye text-primary me-2"></i>
                                    Atención al detalle
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-item p-3 border rounded bg-light">
                                    <i class="fas fa-clock text-primary me-2"></i>
                                    Gestión del tiempo
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-item p-3 border rounded bg-light">
                                    <i class="fas fa-users text-primary me-2"></i>
                                    Trabajo en equipo
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-item p-3 border rounded bg-light">
                                    <i class="fas fa-lightbulb text-primary me-2"></i>
                                    Resolución de problemas
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="skill-item p-3 border rounded bg-light">
                                    <i class="fas fa-shield-alt text-primary me-2"></i>
                                    Conocimientos de seguridad
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="profession-sidebar sticky-top" style="top: 2rem;">
                    <!-- Quick Stats -->
                    <div class="sidebar-card card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Información General</h4>
                            <div class="stat-item d-flex justify-content-between mb-3">
                                <span class="stat-label text-muted">Empleos disponibles:</span>
                                <span class="stat-value fw-bold text-primary">{{ rand(15, 120) }}+</span>
                            </div>
                            <div class="stat-item d-flex justify-content-between mb-3">
                                <span class="stat-label text-muted">Salario promedio:</span>
                                <span class="stat-value fw-bold text-success">${{ number_format(rand(8000, 35000)) }} MXN</span>
                            </div>
                            <div class="stat-item d-flex justify-content-between">
                                <span class="stat-label text-muted">Experiencia requerida:</span>
                                <span class="stat-value fw-bold">1-5 años</span>
                            </div>
                        </div>
                    </div>

                    <!-- Related Jobs -->
                    <div class="sidebar-card card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Empleos Relacionados</h4>
                            <div class="job-links d-flex flex-column gap-2">
                                <a href="#" class="job-link text-decoration-none p-2 rounded hover-bg-light">
                                    <i class="fas fa-hard-hat me-2 text-primary"></i>
                                    Albañilería Junior
                                </a>
                                <a href="#" class="job-link text-decoration-none p-2 rounded hover-bg-light">
                                    <i class="fas fa-hard-hat me-2 text-primary"></i>
                                    Albañilería Senior
                                </a>
                                <a href="#" class="job-link text-decoration-none p-2 rounded hover-bg-light">
                                    <i class="fas fa-hard-hat me-2 text-primary"></i>
                                    Supervisor de Albañilería
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="sidebar-card card border-0 shadow-sm bg-primary text-white">
                        <div class="card-body text-center">
                            <h4 class="card-title mb-3">¿Te Interesa?</h4>
                            <p class="card-text mb-4 opacity-75">Explora las oportunidades disponibles en Albañilería</p>
                            <a href="{{ route('bolsa-trabajo') }}" class="btn btn-light w-100 mb-2 fw-bold text-primary">
                                <i class="fas fa-search me-2"></i>Ver Empleos
                            </a>
                            <a href="{{ route('contacto') }}" class="btn btn-outline-light w-100">
                                <i class="fas fa-envelope me-2"></i>Contactar
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Related Professions -->
<section class="related-professions py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="fw-bold">Otras Profesiones</h2>
                <p class="text-muted">Explora más oportunidades profesionales</p>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="profession-card card h-100 border-0 shadow-sm hover-lift text-center p-4">
                    <div class="profession-icon mb-3">
                        <i class="fas fa-drafting-compass text-primary fa-3x"></i>
                    </div>
                    <h5 class="card-title mb-3">Arquitectura</h5>
                    <a href="{{ route('arquitecto') }}" class="btn btn-outline-primary btn-sm stretched-link">
                        Ver Detalles
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="profession-card card h-100 border-0 shadow-sm hover-lift text-center p-4">
                    <div class="profession-icon mb-3">
                        <i class="fas fa-hammer text-primary fa-3x"></i>
                    </div>
                    <h5 class="card-title mb-3">Carpintería</h5>
                    <a href="{{ route('carpintero') }}" class="btn btn-outline-primary btn-sm stretched-link">
                        Ver Detalles
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="profession-card card h-100 border-0 shadow-sm hover-lift text-center p-4">
                    <div class="profession-icon mb-3">
                        <i class="fas fa-bolt text-primary fa-3x"></i>
                    </div>
                    <h5 class="card-title mb-3">Electricista</h5>
                    <a href="{{ route('electricista') }}" class="btn btn-outline-primary btn-sm stretched-link">
                        Ver Detalles
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
