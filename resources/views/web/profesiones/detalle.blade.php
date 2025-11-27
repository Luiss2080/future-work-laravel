@extends('layouts.web.app')

@section('title', $profesion['titulo'] . ' - Future Work')
@section('description', 'Conoce más sobre la profesión de ' . $profesion['titulo'] . ': ' . $profesion['descripcion'])

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/profession.css') }}">
@endpush

@section('content')
<!-- Page Header -->
<section class="page-header profession-header">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="profession-icon mb-4">
                    <i class="{{ $profesion['icono'] }} text-primary" style="font-size: 4rem;"></i>
                </div>
                <h1 class="page-title">{{ $profesion['titulo'] }}</h1>
                <p class="page-subtitle">{{ $profesion['descripcion'] }}</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}#profesiones">Profesiones</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $profesion['titulo'] }}</li>
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
                        <h2>¿Qué hace un {{ strtolower($profesion['titulo']) }}?</h2>
                        <p class="lead">{{ $profesion['descripcion'] }}</p>
                        
                        @switch($tipo)
                            @case('albanil')
                                <p>Los albañiles son profesionales especializados en la construcción y reparación de estructuras de mampostería, concreto y otros materiales de construcción. Su trabajo es fundamental en proyectos residenciales, comerciales e industriales.</p>
                                
                                <h3 class="mt-4">Responsabilidades Principales</h3>
                                <ul class="custom-list">
                                    <li>Construcción de muros y estructuras de mampostería</li>
                                    <li>Preparación y aplicación de mezclas de cemento</li>
                                    <li>Instalación de ladrillos, bloques y piedras</li>
                                    <li>Reparación de estructuras existentes</li>
                                    <li>Lectura e interpretación de planos de construcción</li>
                                </ul>
                                @break

                            @case('arquitecto')
                                <p>Los arquitectos diseñan y planifican espacios habitacionales, comerciales e institucionales, combinando funcionalidad, estética y sostenibilidad en sus proyectos.</p>
                                
                                <h3 class="mt-4">Responsabilidades Principales</h3>
                                <ul class="custom-list">
                                    <li>Diseño conceptual y desarrollo de proyectos arquitectónicos</li>
                                    <li>Elaboración de planos y especificaciones técnicas</li>
                                    <li>Supervisión de construcción y obras</li>
                                    <li>Consultoría en normativas y códigos de construcción</li>
                                    <li>Coordinación con ingenieros y otros profesionales</li>
                                </ul>
                                @break

                            @case('carpintero')
                                <p>Los carpinteros trabajan con madera y otros materiales para crear, reparar y restaurar estructuras y muebles, desde proyectos residenciales hasta comerciales.</p>
                                
                                <h3 class="mt-4">Responsabilidades Principales</h3>
                                <ul class="custom-list">
                                    <li>Construcción y reparación de estructuras de madera</li>
                                    <li>Fabricación de muebles y elementos decorativos</li>
                                    <li>Instalación de marcos, puertas y ventanas</li>
                                    <li>Restauración de elementos de madera</li>
                                    <li>Uso de herramientas manuales y eléctricas especializadas</li>
                                </ul>
                                @break

                            @case('electricista')
                                <p>Los electricistas se especializan en la instalación, mantenimiento y reparación de sistemas eléctricos en residencias, oficinas, fábricas y otros edificios.</p>
                                
                                <h3 class="mt-4">Responsabilidades Principales</h3>
                                <ul class="custom-list">
                                    <li>Instalación de sistemas eléctricos y de iluminación</li>
                                    <li>Mantenimiento y reparación de equipos eléctricos</li>
                                    <li>Diagnóstico de problemas eléctricos</li>
                                    <li>Cumplimiento de códigos de seguridad eléctrica</li>
                                    <li>Instalación de sistemas de automatización</li>
                                </ul>
                                @break

                            @case('ingeniero')
                                <p>Los ingenieros civiles planifican, diseñan y supervisan proyectos de infraestructura, desde edificios hasta carreteras, puentes y sistemas de agua.</p>
                                
                                <h3 class="mt-4">Responsabilidades Principales</h3>
                                <ul class="custom-list">
                                    <li>Diseño de estructuras y sistemas de construcción</li>
                                    <li>Análisis de suelos y materiales de construcción</li>
                                    <li>Supervisión y dirección de proyectos</li>
                                    <li>Evaluación de impacto ambiental</li>
                                    <li>Gestión de presupuestos y recursos</li>
                                </ul>
                                @break

                            @case('jardinero')
                                <p>Los jardineros diseñan, crean y mantienen espacios verdes, desde jardines residenciales hasta parques públicos y áreas comerciales.</p>
                                
                                <h3 class="mt-4">Responsabilidades Principales</h3>
                                <ul class="custom-list">
                                    <li>Diseño y planificación de espacios verdes</li>
                                    <li>Plantación y cuidado de plantas, árboles y césped</li>
                                    <li>Mantenimiento de jardines y áreas verdes</li>
                                    <li>Instalación de sistemas de riego</li>
                                    <li>Poda y tratamiento de plantas</li>
                                </ul>
                                @break

                            @case('plomero')
                                <p>Los plomeros instalan, mantienen y reparan sistemas de tuberías, agua, drenaje y gas en edificios residenciales, comerciales e industriales.</p>
                                
                                <h3 class="mt-4">Responsabilidades Principales</h3>
                                <ul class="custom-list">
                                    <li>Instalación de sistemas de tuberías y drenaje</li>
                                    <li>Reparación de fugas y problemas de plomería</li>
                                    <li>Mantenimiento de calentadores y equipos hidráulicos</li>
                                    <li>Instalación de accesorios sanitarios</li>
                                    <li>Diagnóstico de problemas en sistemas hidráulicos</li>
                                </ul>
                                @break

                            @case('diseñador')
                                <p>Los diseñadores de interiores transforman espacios creando ambientes funcionales, estéticos y personalizados para sus clientes.</p>
                                
                                <h3 class="mt-4">Responsabilidades Principales</h3>
                                <ul class="custom-list">
                                    <li>Desarrollo de conceptos y propuestas de diseño</li>
                                    <li>Selección de materiales, colores y mobiliario</li>
                                    <li>Elaboración de planos y renders 3D</li>
                                    <li>Coordinación con proveedores y contratistas</li>
                                    <li>Supervisión de la implementación del diseño</li>
                                </ul>
                                @break

                            @case('escultor')
                                <p>Los escultores crean obras de arte tridimensionales utilizando diversos materiales como piedra, madera, metal y materiales contemporáneos.</p>
                                
                                <h3 class="mt-4">Responsabilidades Principales</h3>
                                <ul class="custom-list">
                                    <li>Creación de esculturas y obras artísticas</li>
                                    <li>Trabajo con diferentes materiales y técnicas</li>
                                    <li>Restauración de obras artísticas existentes</li>
                                    <li>Colaboración en proyectos arquitectónicos</li>
                                    <li>Enseñanza y talleres artísticos</li>
                                </ul>
                                @break

                            @default
                                <p>Información detallada sobre esta profesión próximamente.</p>
                        @endswitch
                    </div>

                    <!-- Skills Section -->
                    <div class="section-block mb-5">
                        <h3>Habilidades Requeridas</h3>
                        <div class="skills-grid">
                            <div class="skill-item">
                                <i class="fas fa-tools text-primary me-2"></i>
                                Habilidades técnicas especializadas
                            </div>
                            <div class="skill-item">
                                <i class="fas fa-eye text-primary me-2"></i>
                                Atención al detalle
                            </div>
                            <div class="skill-item">
                                <i class="fas fa-clock text-primary me-2"></i>
                                Gestión del tiempo
                            </div>
                            <div class="skill-item">
                                <i class="fas fa-users text-primary me-2"></i>
                                Trabajo en equipo
                            </div>
                            <div class="skill-item">
                                <i class="fas fa-lightbulb text-primary me-2"></i>
                                Resolución de problemas
                            </div>
                            <div class="skill-item">
                                <i class="fas fa-shield-alt text-primary me-2"></i>
                                Conocimientos de seguridad
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div class="profession-sidebar">
                    <!-- Quick Stats -->
                    <div class="sidebar-card mb-4">
                        <h4>Información General</h4>
                        <div class="stat-item">
                            <span class="stat-label">Empleos disponibles:</span>
                            <span class="stat-value text-primary">{{ rand(15, 120) }}+</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-label">Salario promedio:</span>
                            <span class="stat-value text-success">${{ number_format(rand(8000, 35000)) }} MXN</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-label">Experiencia requerida:</span>
                            <span class="stat-value">1-5 años</span>
                        </div>
                    </div>

                    <!-- Related Jobs -->
                    <div class="sidebar-card mb-4">
                        <h4>Empleos Relacionados</h4>
                        <div class="job-links">
                            <a href="#" class="job-link">
                                <i class="{{ $profesion['icono'] }} me-2"></i>
                                {{ $profesion['titulo'] }} Junior
                            </a>
                            <a href="#" class="job-link">
                                <i class="{{ $profesion['icono'] }} me-2"></i>
                                {{ $profesion['titulo'] }} Senior
                            </a>
                            <a href="#" class="job-link">
                                <i class="{{ $profesion['icono'] }} me-2"></i>
                                Supervisor de {{ $profesion['titulo'] }}
                            </a>
                        </div>
                    </div>

                    <!-- CTA -->
                    <div class="sidebar-card">
                        <h4>¿Te Interesa?</h4>
                        <p class="text-muted">Explora las oportunidades disponibles en {{ $profesion['titulo'] }}</p>
                        <a href="{{ route('bolsa-trabajo') }}" class="btn btn-primary w-100 mb-2">
                            <i class="fas fa-search me-2"></i>Ver Empleos
                        </a>
                        <a href="{{ route('contacto') }}" class="btn btn-outline-primary w-100">
                            <i class="fas fa-envelope me-2"></i>Contactar
                        </a>
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
                <h2>Otras Profesiones</h2>
                <p class="text-muted">Explora más oportunidades profesionales</p>
            </div>
        </div>
        <div class="row g-4">
            @php
                $otherProfessions = [
                    'albanil' => ['titulo' => 'Albañilería', 'icono' => 'fas fa-hard-hat'],
                    'arquitecto' => ['titulo' => 'Arquitectura', 'icono' => 'fas fa-drafting-compass'],
                    'carpintero' => ['titulo' => 'Carpintería', 'icono' => 'fas fa-hammer'],
                    'electricista' => ['titulo' => 'Electricista', 'icono' => 'fas fa-bolt']
                ];
                $filtered = array_filter($otherProfessions, fn($key) => $key !== $tipo, ARRAY_FILTER_USE_KEY);
                $limited = array_slice($filtered, 0, 3, true);
            @endphp
            
            @foreach($limited as $key => $prof)
            <div class="col-lg-4 col-md-6">
                <div class="profession-card">
                    <div class="profession-icon">
                        <i class="{{ $prof['icono'] }} text-primary"></i>
                    </div>
                    <h5>{{ $prof['titulo'] }}</h5>
                    <a href="{{ route('profesion', $key) }}" class="btn btn-outline-primary btn-sm">
                        Ver Detalles
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Profession page interactions
    console.log('Profession page loaded: {{ $tipo }}');
</script>
@endpush