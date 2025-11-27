@extends('layouts.web.app')

@section('title', 'Bolsa de Trabajo - Future Work')
@section('description', 'Explora miles de oportunidades laborales en nuestra bolsa de trabajo.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/jobs.css') }}">
@endpush

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Bolsa de Trabajo</h1>
                <p class="page-subtitle">Encuentra tu empleo ideal entre miles de oportunidades</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Bolsa de Trabajo</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Search Section -->
<section class="job-search-section py-5 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="search-card">
                    <form class="job-search-form">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="keyword" class="form-label">
                                        <i class="fas fa-search me-2"></i>Palabra clave
                                    </label>
                                    <input type="text" class="form-control" id="keyword" 
                                           placeholder="Ej: Desarrollador, Contador, Vendedor...">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="location" class="form-label">
                                        <i class="fas fa-map-marker-alt me-2"></i>Ubicación
                                    </label>
                                    <select class="form-select" id="location">
                                        <option value="">Todas las ubicaciones</option>
                                        <option value="cdmx">Ciudad de México</option>
                                        <option value="guadalajara">Guadalajara</option>
                                        <option value="monterrey">Monterrey</option>
                                        <option value="puebla">Puebla</option>
                                        <option value="tijuana">Tijuana</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="form-label d-block">&nbsp;</label>
                                    <button type="submit" class="btn btn-primary w-100">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Categories Section -->
<section class="job-categories-section py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Categorías Populares</h2>
                <p class="section-subtitle">Explora empleos por categoría</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-code text-primary"></i>
                    </div>
                    <h4>Tecnología</h4>
                    <p class="text-muted">Desarrollo, IT, Software</p>
                    <span class="badge bg-primary">150+ empleos</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-chart-line text-success"></i>
                    </div>
                    <h4>Ventas</h4>
                    <p class="text-muted">Comercial, Marketing, Retail</p>
                    <span class="badge bg-success">200+ empleos</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-calculator text-warning"></i>
                    </div>
                    <h4>Finanzas</h4>
                    <p class="text-muted">Contabilidad, Banca, Seguros</p>
                    <span class="badge bg-warning">80+ empleos</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-user-tie text-info"></i>
                    </div>
                    <h4>Administración</h4>
                    <p class="text-muted">RRHH, Gerencia, Operaciones</p>
                    <span class="badge bg-info">120+ empleos</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Jobs Section -->
<section class="featured-jobs-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="section-title">Empleos Destacados</h2>
                <p class="section-subtitle">Las mejores oportunidades laborales</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Sample Job Cards -->
            @for($i = 1; $i <= 6; $i++)
            <div class="col-lg-4 col-md-6">
                <div class="job-card">
                    <div class="job-card-header">
                        <div class="company-logo">
                            <i class="fas fa-building text-primary"></i>
                        </div>
                        <div class="job-info">
                            <h5 class="job-title">Desarrollador Full Stack</h5>
                            <p class="company-name text-muted">Tech Solutions S.A.</p>
                        </div>
                    </div>
                    <div class="job-card-body">
                        <div class="job-details">
                            <span class="detail-item">
                                <i class="fas fa-map-marker-alt me-1"></i>
                                Ciudad de México
                            </span>
                            <span class="detail-item">
                                <i class="fas fa-clock me-1"></i>
                                Tiempo completo
                            </span>
                            <span class="detail-item">
                                <i class="fas fa-dollar-sign me-1"></i>
                                $25,000 - $35,000
                            </span>
                        </div>
                        <p class="job-description">
                            Buscamos desarrollador con experiencia en Laravel, Vue.js y bases de datos...
                        </p>
                    </div>
                    <div class="job-card-footer">
                        <small class="text-muted">Publicado hace 2 días</small>
                        <a href="#" class="btn btn-outline-primary btn-sm">Ver Detalles</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
        
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="#" class="btn btn-primary btn-lg">
                    <i class="fas fa-plus me-2"></i>Ver Más Empleos
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="stats-section py-5">
    <div class="container">
        <div class="row g-4 text-center">
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <div class="stat-number text-primary">
                        <i class="fas fa-briefcase me-2"></i>2,500+
                    </div>
                    <div class="stat-label">Empleos Activos</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <div class="stat-number text-success">
                        <i class="fas fa-building me-2"></i>500+
                    </div>
                    <div class="stat-label">Empresas Registradas</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <div class="stat-number text-warning">
                        <i class="fas fa-users me-2"></i>10,000+
                    </div>
                    <div class="stat-label">Candidatos</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="stat-item">
                    <div class="stat-number text-info">
                        <i class="fas fa-handshake me-2"></i>1,200+
                    </div>
                    <div class="stat-label">Contrataciones Exitosas</div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Job search functionality
    document.querySelector('.job-search-form').addEventListener('submit', function(e) {
        e.preventDefault();
        // Implementar lógica de búsqueda
        console.log('Buscando empleos...');
    });
</script>
@endpush