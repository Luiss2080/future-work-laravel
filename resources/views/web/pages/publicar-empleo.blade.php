@extends('layouts.web.app')

@section('title', 'Publicar Empleo - Future Work')
@section('description', 'Publica ofertas de empleo y encuentra el talento ideal para tu empresa.')

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
                <i class="fas fa-bullhorn text-primary me-3"></i>
                Publicar Empleo
            </h1>
            <p class="page-subtitle">
                Encuentra el talento ideal para tu empresa con nuestra plataforma líder en empleos
            </p>
        </div>
    </div>
</section>

<!-- Job Form Section -->
<section class="job-form-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="job-form-card">
                    <div class="form-header text-center mb-4">
                        <h3>Detalles del Empleo</h3>
                        <p class="text-muted">Completa la información para publicar tu oferta laboral</p>
                    </div>
                    
                    <form class="job-form">
                        @csrf
                        <!-- Información Básica -->
                        <div class="form-section">
                            <h4><i class="fas fa-info-circle me-2"></i>Información Básica</h4>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="titulo_empleo">Título del Empleo *</label>
                                        <input type="text" class="form-control" id="titulo_empleo" name="titulo_empleo" 
                                               placeholder="ej. Electricista con experiencia" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="categoria">Categoría *</label>
                                        <select class="form-control" id="categoria" name="categoria" required>
                                            <option value="">Selecciona categoría</option>
                                            <option value="albanil">Albañilería</option>
                                            <option value="arquitecto">Arquitectura</option>
                                            <option value="carpintero">Carpintería</option>
                                            <option value="electricista">Electricista</option>
                                            <option value="ingeniero">Ingeniería Civil</option>
                                            <option value="plomero">Plomería</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="descripcion">Descripción del Puesto *</label>
                                        <textarea class="form-control" id="descripcion" name="descripcion" rows="5" 
                                                  placeholder="Describe las responsabilidades y tareas del puesto..." required></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Requisitos -->
                        <div class="form-section">
                            <h4><i class="fas fa-list-check me-2"></i>Requisitos</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="experiencia">Experiencia Requerida</label>
                                        <select class="form-control" id="experiencia" name="experiencia">
                                            <option value="">Sin experiencia</option>
                                            <option value="1-3">1-3 años</option>
                                            <option value="3-5">3-5 años</option>
                                            <option value="5+">5+ años</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="educacion">Nivel Educativo</label>
                                        <select class="form-control" id="educacion" name="educacion">
                                            <option value="">No especificado</option>
                                            <option value="secundaria">Secundaria</option>
                                            <option value="tecnico">Técnico</option>
                                            <option value="universitario">Universitario</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="habilidades">Habilidades Específicas</label>
                                        <textarea class="form-control" id="habilidades" name="habilidades" rows="3"
                                                  placeholder="ej. Manejo de herramientas eléctricas, conocimiento en soldadura..."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Información Laboral -->
                        <div class="form-section">
                            <h4><i class="fas fa-briefcase me-2"></i>Detalles del Trabajo</h4>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="tipo_contrato">Tipo de Contrato</label>
                                        <select class="form-control" id="tipo_contrato" name="tipo_contrato">
                                            <option value="tiempo_completo">Tiempo Completo</option>
                                            <option value="medio_tiempo">Medio Tiempo</option>
                                            <option value="proyecto">Por Proyecto</option>
                                            <option value="temporal">Temporal</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="salario_min">Salario Mínimo</label>
                                        <input type="number" class="form-control" id="salario_min" name="salario_min" 
                                               placeholder="Opcional">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="salario_max">Salario Máximo</label>
                                        <input type="number" class="form-control" id="salario_max" name="salario_max" 
                                               placeholder="Opcional">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="ubicacion">Ubicación del Trabajo *</label>
                                        <input type="text" class="form-control" id="ubicacion" name="ubicacion" 
                                               placeholder="ej. Ciudad, Sector" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="modalidad">Modalidad</label>
                                        <select class="form-control" id="modalidad" name="modalidad">
                                            <option value="presencial">Presencial</option>
                                            <option value="remoto">Remoto</option>
                                            <option value="hibrido">Híbrido</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Información de Empresa -->
                        <div class="form-section">
                            <h4><i class="fas fa-building me-2"></i>Información de la Empresa</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="empresa">Nombre de la Empresa *</label>
                                        <input type="text" class="form-control" id="empresa" name="empresa" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contacto_email">Email de Contacto *</label>
                                        <input type="email" class="form-control" id="contacto_email" name="contacto_email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="contacto_telefono">Teléfono de Contacto</label>
                                        <input type="tel" class="form-control" id="contacto_telefono" name="contacto_telefono">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="sitio_web">Sitio Web (Opcional)</label>
                                        <input type="url" class="form-control" id="sitio_web" name="sitio_web" placeholder="https://">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-paper-plane me-2"></i>
                                Publicar Empleo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h3 class="mb-5">¿Por qué publicar con nosotros?</h3>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card">
                    <i class="fas fa-users display-5 text-primary mb-3"></i>
                    <h5>Miles de Candidatos</h5>
                    <p>Acceso a una amplia base de talento calificado</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card">
                    <i class="fas fa-filter display-5 text-primary mb-3"></i>
                    <h5>Filtrado Inteligente</h5>
                    <p>Encuentra candidatos que realmente coincidan</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card">
                    <i class="fas fa-chart-line display-5 text-primary mb-3"></i>
                    <h5>Estadísticas Detalladas</h5>
                    <p>Seguimiento y análisis de tus publicaciones</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="feature-card">
                    <i class="fas fa-headset display-5 text-primary mb-3"></i>
                    <h5>Soporte Profesional</h5>
                    <p>Asistencia personalizada para empresas</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection