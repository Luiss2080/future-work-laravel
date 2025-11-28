@extends('layouts.web.app')

@section('title', 'Recursos RH - Future Work')
@section('description', 'Herramientas y recursos para mejorar los procesos de recursos humanos de tu empresa.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/pages-common.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/web/hr-resources.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title">
                <i class="fas fa-briefcase text-primary me-3"></i>
                Recursos RH
            </h1>
            <p class="page-subtitle">
                Herramientas, guías y recursos para optimizar tus procesos de recursos humanos
            </p>
        </div>
    </div>
</section>

<!-- Resources Categories -->
<section class="resources-section py-5">
    <div class="container">
        <div class="row">
            <!-- Recruitment Tools -->
            <div class="col-lg-6 mb-5">
                <div class="resource-category">
                    <div class="category-header">
                        <i class="fas fa-user-plus text-primary"></i>
                        <h3>Herramientas de Reclutamiento</h3>
                    </div>
                    <div class="resources-list">
                        <div class="resource-item">
                            <div class="resource-icon">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <div class="resource-content">
                                <h5>Plantillas de Descripción de Puesto</h5>
                                <p>Formatos optimizados para diferentes profesiones</p>
                                <a href="#" class="btn btn-sm btn-outline-primary">Descargar</a>
                            </div>
                        </div>
                        
                        <div class="resource-item">
                            <div class="resource-icon">
                                <i class="fas fa-clipboard-list"></i>
                            </div>
                            <div class="resource-content">
                                <h5>Guías de Entrevista</h5>
                                <p>Preguntas específicas por área de trabajo</p>
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver Guía</a>
                            </div>
                        </div>
                        
                        <div class="resource-item">
                            <div class="resource-icon">
                                <i class="fas fa-chart-bar"></i>
                            </div>
                            <div class="resource-content">
                                <h5>Métricas de Reclutamiento</h5>
                                <p>KPIs esenciales para medir efectividad</p>
                                <a href="#" class="btn btn-sm btn-outline-primary">Explorar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Legal & Compliance -->
            <div class="col-lg-6 mb-5">
                <div class="resource-category">
                    <div class="category-header">
                        <i class="fas fa-gavel text-primary"></i>
                        <h3>Legal y Cumplimiento</h3>
                    </div>
                    <div class="resources-list">
                        <div class="resource-item">
                            <div class="resource-icon">
                                <i class="fas fa-file-contract"></i>
                            </div>
                            <div class="resource-content">
                                <h5>Contratos de Trabajo</h5>
                                <p>Plantillas legales actualizadas</p>
                                <a href="#" class="btn btn-sm btn-outline-primary">Descargar</a>
                            </div>
                        </div>
                        
                        <div class="resource-item">
                            <div class="resource-icon">
                                <i class="fas fa-balance-scale"></i>
                            </div>
                            <div class="resource-content">
                                <h5>Código Laboral</h5>
                                <p>Resumen de leyes laborales vigentes</p>
                                <a href="#" class="btn btn-sm btn-outline-primary">Consultar</a>
                            </div>
                        </div>
                        
                        <div class="resource-item">
                            <div class="resource-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <div class="resource-content">
                                <h5>Políticas de Seguridad</h5>
                                <p>Protocolos de seguridad laboral</p>
                                <a href="#" class="btn btn-sm btn-outline-primary">Ver Políticas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Industry Guides -->
<section class="industry-guides py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Guías por Industria</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-hard-hat"></i>
                    </div>
                    <h4>Construcción</h4>
                    <ul class="industry-topics">
                        <li>Certificaciones requeridas</li>
                        <li>Evaluación de habilidades técnicas</li>
                        <li>Protocolos de seguridad</li>
                        <li>Gestión de equipos de trabajo</li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-sm">Ver Guía</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h4>Servicios Eléctricos</h4>
                    <ul class="industry-topics">
                        <li>Licencias y permisos</li>
                        <li>Pruebas técnicas especializadas</li>
                        <li>Normativas eléctricas</li>
                        <li>Equipos de protección</li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-sm">Ver Guía</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="industry-card">
                    <div class="industry-icon">
                        <i class="fas fa-drafting-compass"></i>
                    </div>
                    <h4>Diseño y Arquitectura</h4>
                    <ul class="industry-topics">
                        <li>Evaluación de portafolios</li>
                        <li>Software especializado</li>
                        <li>Proyectos de referencia</li>
                        <li>Creatividad y innovación</li>
                    </ul>
                    <a href="#" class="btn btn-primary btn-sm">Ver Guía</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tools & Calculators -->
<section class="tools-section py-5">
    <div class="container">
        <h2 class="text-center mb-5">Herramientas y Calculadoras</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="tool-card">
                    <div class="tool-header">
                        <i class="fas fa-calculator text-primary"></i>
                        <h4>Calculadora Salarial</h4>
                    </div>
                    <p>Determine rangos salariales competitivos según la industria y experiencia</p>
                    <div class="tool-form">
                        <select class="form-control mb-2">
                            <option>Seleccionar profesión</option>
                            <option>Albañil</option>
                            <option>Electricista</option>
                            <option>Arquitecto</option>
                        </select>
                        <select class="form-control mb-2">
                            <option>Años de experiencia</option>
                            <option>0-2 años</option>
                            <option>3-5 años</option>
                            <option>5+ años</option>
                        </select>
                        <button class="btn btn-primary btn-sm w-100">Calcular</button>
                    </div>
                    <div class="salary-result d-none">
                        <div class="result-box">
                            <strong>Rango sugerido: $25,000 - $35,000</strong>
                            <small class="d-block text-muted">Basado en datos del mercado local</small>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="tool-card">
                    <div class="tool-header">
                        <i class="fas fa-clock text-primary"></i>
                        <h4>Tiempo de Contratación</h4>
                    </div>
                    <p>Estime el tiempo promedio para completar un proceso de contratación</p>
                    <div class="timeline-info">
                        <div class="timeline-item">
                            <strong>Publicación:</strong> 1-2 días
                        </div>
                        <div class="timeline-item">
                            <strong>Recepción de CVs:</strong> 7-14 días
                        </div>
                        <div class="timeline-item">
                            <strong>Entrevistas:</strong> 5-7 días
                        </div>
                        <div class="timeline-item">
                            <strong>Selección final:</strong> 2-3 días
                        </div>
                    </div>
                    <div class="total-time">
                        <strong>Tiempo total estimado: 15-26 días</strong>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="tool-card">
                    <div class="tool-header">
                        <i class="fas fa-chart-pie text-primary"></i>
                        <h4>ROI de Contratación</h4>
                    </div>
                    <p>Calcule el retorno de inversión de sus procesos de reclutamiento</p>
                    <div class="roi-metrics">
                        <div class="metric">
                            <label>Costo por contratación</label>
                            <div class="value">$1,200</div>
                        </div>
                        <div class="metric">
                            <label>Tiempo para productividad</label>
                            <div class="value">30 días</div>
                        </div>
                        <div class="metric">
                            <label>Retención promedio</label>
                            <div class="value">85%</div>
                        </div>
                    </div>
                    <button class="btn btn-outline-primary btn-sm w-100">Calcular ROI</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Webinars & Training -->
<section class="training-section py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5">Capacitaciones y Webinars</h2>
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="webinar-card">
                    <div class="webinar-date">
                        <div class="day">15</div>
                        <div class="month">ENE</div>
                    </div>
                    <div class="webinar-content">
                        <h5>Tendencias en Reclutamiento 2025</h5>
                        <p>Descubra las últimas tendencias y tecnologías en contratación</p>
                        <div class="webinar-meta">
                            <span><i class="fas fa-clock"></i> 2:00 PM</span>
                            <span><i class="fas fa-user"></i> María González</span>
                        </div>
                    </div>
                    <div class="webinar-action">
                        <button class="btn btn-primary btn-sm">Registrarse</button>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="webinar-card">
                    <div class="webinar-date">
                        <div class="day">22</div>
                        <div class="month">ENE</div>
                    </div>
                    <div class="webinar-content">
                        <h5>Entrevistas Efectivas en Construcción</h5>
                        <p>Técnicas específicas para evaluar candidatos técnicos</p>
                        <div class="webinar-meta">
                            <span><i class="fas fa-clock"></i> 3:00 PM</span>
                            <span><i class="fas fa-user"></i> Carlos Mendoza</span>
                        </div>
                    </div>
                    <div class="webinar-action">
                        <button class="btn btn-primary btn-sm">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Newsletter Subscription -->
<section class="newsletter-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h3>Mantente Actualizado</h3>
                <p class="mb-4">Recibe las últimas guías, herramientas y tendencias de RH directamente en tu email</p>
                <form class="newsletter-form">
                    <div class="input-group">
                        <input type="email" class="form-control" placeholder="Tu email profesional">
                        <button class="btn btn-primary" type="submit">
                            <i class="fas fa-paper-plane me-2"></i>Suscribirse
                        </button>
                    </div>
                </form>
                <small class="text-muted">No spam. Solo contenido de valor para RH.</small>
            </div>
        </div>
    </div>
</section>
@endsection