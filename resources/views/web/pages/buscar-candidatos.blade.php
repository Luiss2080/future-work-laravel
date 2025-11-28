@extends('layouts.web.app')

@section('title', 'Buscar Candidatos - Future Work')
@section('description', 'Encuentra el talento ideal para tu empresa explorando nuestra base de candidatos calificados.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/pages-common.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/web/companies.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title">
                <i class="fas fa-search text-primary me-3"></i>
                Buscar Candidatos
            </h1>
            <p class="page-subtitle">
                Explora nuestra amplia base de datos de profesionales calificados
            </p>
        </div>
    </div>
</section>

<!-- Search Section -->
<section class="search-section py-5">
    <div class="container">
        <div class="search-card">
            <div class="search-header">
                <h3><i class="fas fa-filter me-2"></i>Filtros de Búsqueda</h3>
            </div>
            <form class="candidate-search-form">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="profesion">Profesión</label>
                            <select class="form-control" id="profesion" name="profesion">
                                <option value="">Todas las profesiones</option>
                                <option value="albanil">Albañil</option>
                                <option value="arquitecto">Arquitecto</option>
                                <option value="carpintero">Carpintero</option>
                                <option value="electricista">Electricista</option>
                                <option value="ingeniero">Ingeniero Civil</option>
                                <option value="plomero">Plomero</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="experiencia">Experiencia</label>
                            <select class="form-control" id="experiencia" name="experiencia">
                                <option value="">Cualquier nivel</option>
                                <option value="0-1">Menos de 1 año</option>
                                <option value="1-3">1-3 años</option>
                                <option value="3-5">3-5 años</option>
                                <option value="5-10">5-10 años</option>
                                <option value="10+">Más de 10 años</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="ubicacion">Ubicación</label>
                            <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ciudad, región...">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="disponibilidad">Disponibilidad</label>
                            <select class="form-control" id="disponibilidad" name="disponibilidad">
                                <option value="">Cualquiera</option>
                                <option value="inmediata">Inmediata</option>
                                <option value="1-semana">En 1 semana</option>
                                <option value="1-mes">En 1 mes</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search me-2"></i>Buscar Candidatos
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<!-- Results Section -->
<section class="results-section py-5">
    <div class="container">
        <div class="results-header d-flex justify-content-between align-items-center mb-4">
            <h4>Candidatos Encontrados (125)</h4>
            <div class="sort-options">
                <select class="form-select">
                    <option>Ordenar por relevancia</option>
                    <option>Más experiencia</option>
                    <option>Menos experiencia</option>
                    <option>Agregado recientemente</option>
                </select>
            </div>
        </div>
        
        <div class="candidates-grid">
            <!-- Candidate Card 1 -->
            <div class="candidate-card">
                <div class="candidate-header">
                    <div class="candidate-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="candidate-info">
                        <h5>Carlos Mendoza</h5>
                        <p class="candidate-profession">Electricista Certificado</p>
                        <div class="candidate-rating">
                            <span class="stars">★★★★★</span>
                            <small class="text-muted">(4.9)</small>
                        </div>
                    </div>
                    <div class="candidate-status">
                        <span class="badge bg-success">Disponible</span>
                    </div>
                </div>
                <div class="candidate-body">
                    <div class="candidate-stats">
                        <div class="stat">
                            <i class="fas fa-clock text-primary"></i>
                            <span>8 años exp.</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                            <span>Ciudad, Centro</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-certificate text-primary"></i>
                            <span>Certificado</span>
                        </div>
                    </div>
                    <div class="candidate-skills">
                        <span class="skill-tag">Instalaciones Residenciales</span>
                        <span class="skill-tag">Sistemas Industriales</span>
                        <span class="skill-tag">Mantenimiento</span>
                    </div>
                </div>
                <div class="candidate-footer">
                    <button class="btn btn-outline-primary btn-sm">Ver Perfil</button>
                    <button class="btn btn-primary btn-sm">Contactar</button>
                </div>
            </div>
            
            <!-- Candidate Card 2 -->
            <div class="candidate-card">
                <div class="candidate-header">
                    <div class="candidate-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="candidate-info">
                        <h5>María González</h5>
                        <p class="candidate-profession">Arquitecta Senior</p>
                        <div class="candidate-rating">
                            <span class="stars">★★★★★</span>
                            <small class="text-muted">(5.0)</small>
                        </div>
                    </div>
                    <div class="candidate-status">
                        <span class="badge bg-warning">Ocupado</span>
                    </div>
                </div>
                <div class="candidate-body">
                    <div class="candidate-stats">
                        <div class="stat">
                            <i class="fas fa-clock text-primary"></i>
                            <span>12 años exp.</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                            <span>Ciudad, Norte</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-graduation-cap text-primary"></i>
                            <span>Universitario</span>
                        </div>
                    </div>
                    <div class="candidate-skills">
                        <span class="skill-tag">Diseño Residencial</span>
                        <span class="skill-tag">AutoCAD</span>
                        <span class="skill-tag">Gestión Proyectos</span>
                    </div>
                </div>
                <div class="candidate-footer">
                    <button class="btn btn-outline-primary btn-sm">Ver Perfil</button>
                    <button class="btn btn-primary btn-sm">Contactar</button>
                </div>
            </div>
            
            <!-- Candidate Card 3 -->
            <div class="candidate-card">
                <div class="candidate-header">
                    <div class="candidate-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="candidate-info">
                        <h5>Roberto Silva</h5>
                        <p class="candidate-profession">Albañil Especializado</p>
                        <div class="candidate-rating">
                            <span class="stars">★★★★☆</span>
                            <small class="text-muted">(4.7)</small>
                        </div>
                    </div>
                    <div class="candidate-status">
                        <span class="badge bg-success">Disponible</span>
                    </div>
                </div>
                <div class="candidate-body">
                    <div class="candidate-stats">
                        <div class="stat">
                            <i class="fas fa-clock text-primary"></i>
                            <span>15 años exp.</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-map-marker-alt text-primary"></i>
                            <span>Ciudad, Sur</span>
                        </div>
                        <div class="stat">
                            <i class="fas fa-tools text-primary"></i>
                            <span>Especialista</span>
                        </div>
                    </div>
                    <div class="candidate-skills">
                        <span class="skill-tag">Construcción</span>
                        <span class="skill-tag">Remodelaciones</span>
                        <span class="skill-tag">Acabados</span>
                    </div>
                </div>
                <div class="candidate-footer">
                    <button class="btn btn-outline-primary btn-sm">Ver Perfil</button>
                    <button class="btn btn-primary btn-sm">Contactar</button>
                </div>
            </div>
        </div>
        
        <!-- Pagination -->
        <div class="pagination-container text-center mt-4">
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Siguiente</a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="cta-section py-5 bg-light">
    <div class="container text-center">
        <h3>¿No encuentras el candidato ideal?</h3>
        <p class="mb-4">Publica una oferta de empleo y deja que los candidatos te encuentren</p>
        <a href="{{ route('publicar-empleo') }}" class="btn btn-primary btn-lg">
            <i class="fas fa-bullhorn me-2"></i>
            Publicar Empleo
        </a>
    </div>
</section>
@endsection