@extends('layouts.web-app')

@section('title', 'Buscar Candidatos - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/empresas/candidatos.css') }}">
@endsection

@section('content')
<div class="candidatos-container">
    <section class="hero-candidatos">
        <div class="container">
            <div class="hero-content">
                <h1>Encuentra el candidato perfecto</h1>
                <p>Explora nuestra base de datos de profesionales cualificados</p>
            </div>
        </div>
    </section>

    <section class="filtros-busqueda">
        <div class="container">
            <form id="filtrosForm" class="filtros-form">
                <div class="filtros-row">
                    <div class="filtro-group">
                        <label for="buscar">Buscar por palabras clave</label>
                        <input type="text" id="buscar" name="buscar" placeholder="Ej: desarrollador, diseñador...">
                    </div>
                    
                    <div class="filtro-group">
                        <label for="ubicacion">Ubicación</label>
                        <input type="text" id="ubicacion" name="ubicacion" placeholder="Ciudad o región">
                    </div>
                    
                    <div class="filtro-group">
                        <label for="experiencia">Experiencia</label>
                        <select id="experiencia" name="experiencia">
                            <option value="">Cualquier nivel</option>
                            <option value="junior">Junior (0-2 años)</option>
                            <option value="semi-senior">Semi Senior (2-5 años)</option>
                            <option value="senior">Senior (5+ años)</option>
                        </select>
                    </div>
                    
                    <div class="filtro-group">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                            Buscar
                        </button>
                    </div>
                </div>
                
                <div class="filtros-avanzados" id="filtrosAvanzados">
                    <div class="filtros-row">
                        <div class="filtro-group">
                            <label for="industria">Industria</label>
                            <select id="industria" name="industria">
                                <option value="">Todas las industrias</option>
                                <option value="construccion">Construcción</option>
                                <option value="tecnologia">Tecnología</option>
                                <option value="administracion">Administración</option>
                                <option value="ventas">Ventas y Marketing</option>
                                <option value="educacion">Educación</option>
                                <option value="salud">Salud</option>
                            </select>
                        </div>
                        
                        <div class="filtro-group">
                            <label for="idiomas">Idiomas</label>
                            <select id="idiomas" name="idiomas">
                                <option value="">Cualquier idioma</option>
                                <option value="espanol">Español</option>
                                <option value="ingles">Inglés</option>
                                <option value="frances">Francés</option>
                                <option value="aleman">Alemán</option>
                            </select>
                        </div>
                        
                        <div class="filtro-group">
                            <label for="disponibilidad">Disponibilidad</label>
                            <select id="disponibilidad" name="disponibilidad">
                                <option value="">Cualquiera</option>
                                <option value="inmediata">Inmediata</option>
                                <option value="15_dias">15 días</option>
                                <option value="1_mes">1 mes</option>
                                <option value="mas_1_mes">Más de 1 mes</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <button type="button" id="toggleFiltros" class="btn-filtros-avanzados">
                    <i class="fas fa-sliders-h"></i>
                    Filtros avanzados
                </button>
            </form>
        </div>
    </section>

    <section class="resultados-candidatos">
        <div class="container">
            <div class="resultados-header">
                <h2>Candidatos encontrados</h2>
                <div class="resultados-info">
                    <span id="totalResultados">1,247 candidatos</span>
                    <div class="ordenar-por">
                        <label for="ordenar">Ordenar por:</label>
                        <select id="ordenar" name="ordenar">
                            <option value="relevancia">Relevancia</option>
                            <option value="fecha">Más recientes</option>
                            <option value="experiencia">Más experiencia</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="candidatos-grid" id="candidatosGrid">
                <!-- Los candidatos se cargarán dinámicamente -->
                <div class="candidato-card">
                    <div class="candidato-header">
                        <div class="candidato-avatar">
                            <img src="{{ asset('images/avatar-placeholder.jpg') }}" alt="Candidato">
                        </div>
                        <div class="candidato-info">
                            <h3>María González</h3>
                            <p class="titulo">Desarrolladora Frontend</p>
                            <p class="ubicacion"><i class="fas fa-map-marker-alt"></i> Madrid, España</p>
                        </div>
                        <div class="candidato-acciones">
                            <button class="btn btn-outline btn-sm">Ver perfil</button>
                            <button class="btn btn-primary btn-sm">Contactar</button>
                        </div>
                    </div>
                    
                    <div class="candidato-skills">
                        <div class="skill-tag">React</div>
                        <div class="skill-tag">JavaScript</div>
                        <div class="skill-tag">CSS</div>
                        <div class="skill-tag">Vue.js</div>
                    </div>
                    
                    <div class="candidato-stats">
                        <span><i class="fas fa-briefcase"></i> 3 años experiencia</span>
                        <span><i class="fas fa-clock"></i> Disponible inmediatamente</span>
                        <span><i class="fas fa-star"></i> 4.8/5</span>
                    </div>
                </div>

                <!-- Más candidatos de ejemplo -->
                <div class="candidato-card">
                    <div class="candidato-header">
                        <div class="candidato-avatar">
                            <img src="{{ asset('images/avatar-placeholder.jpg') }}" alt="Candidato">
                        </div>
                        <div class="candidato-info">
                            <h3>Carlos Ruiz</h3>
                            <p class="titulo">Arquitecto</p>
                            <p class="ubicacion"><i class="fas fa-map-marker-alt"></i> Barcelona, España</p>
                        </div>
                        <div class="candidato-acciones">
                            <button class="btn btn-outline btn-sm">Ver perfil</button>
                            <button class="btn btn-primary btn-sm">Contactar</button>
                        </div>
                    </div>
                    
                    <div class="candidato-skills">
                        <div class="skill-tag">AutoCAD</div>
                        <div class="skill-tag">Revit</div>
                        <div class="skill-tag">SketchUp</div>
                        <div class="skill-tag">3D Max</div>
                    </div>
                    
                    <div class="candidato-stats">
                        <span><i class="fas fa-briefcase"></i> 7 años experiencia</span>
                        <span><i class="fas fa-clock"></i> Disponible en 15 días</span>
                        <span><i class="fas fa-star"></i> 4.9/5</span>
                    </div>
                </div>
            </div>

            <div class="paginacion">
                <button class="btn btn-outline" disabled>Anterior</button>
                <span class="paginas">
                    <button class="btn btn-primary btn-sm">1</button>
                    <button class="btn btn-outline btn-sm">2</button>
                    <button class="btn btn-outline btn-sm">3</button>
                    <span>...</span>
                    <button class="btn btn-outline btn-sm">15</button>
                </span>
                <button class="btn btn-outline">Siguiente</button>
            </div>
        </div>
    </section>

    <section class="cta-premium">
        <div class="container">
            <div class="cta-content">
                <h2>¿Necesitas más funciones?</h2>
                <p>Actualiza a Premium y accede a candidatos exclusivos, filtros avanzados y herramientas de contacto directo</p>
                <a href="{{ route('planes-precios') }}" class="btn btn-primary">Ver Planes Premium</a>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/empresas/candidatos.js') }}"></script>
@endsection