@extends('layouts.web-app')

@section('title', 'Recursos RH - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/empresas/recursos.css') }}">
@endsection

@section('content')
<div class="recursos-container">
    <section class="hero-recursos">
        <div class="container">
            <div class="hero-content">
                <h1>Recursos para Recursos Humanos</h1>
                <p>Herramientas, guías y consejos para optimizar tus procesos de contratación</p>
            </div>
        </div>
    </section>

    <section class="categorias-recursos">
        <div class="container">
            <div class="tabs-recursos">
                <button class="tab-btn active" data-tab="guias">Guías de Contratación</button>
                <button class="tab-btn" data-tab="templates">Plantillas</button>
                <button class="tab-btn" data-tab="herramientas">Herramientas</button>
                <button class="tab-btn" data-tab="blog">Blog RH</button>
            </div>

            <!-- Guías de Contratación -->
            <div class="tab-content active" id="guias">
                <div class="recursos-grid">
                    <article class="recurso-card">
                        <div class="recurso-image">
                            <img src="{{ asset('images/guia-entrevistas.jpg') }}" alt="Guía de entrevistas">
                        </div>
                        <div class="recurso-content">
                            <h3>Cómo realizar entrevistas efectivas</h3>
                            <p>Aprende técnicas para evaluar candidatos de manera objetiva y eficiente.</p>
                            <div class="recurso-meta">
                                <span class="tipo">Guía PDF</span>
                                <span class="tiempo">15 min lectura</span>
                            </div>
                            <a href="#" class="btn btn-outline btn-sm">Descargar</a>
                        </div>
                    </article>

                    <article class="recurso-card">
                        <div class="recurso-image">
                            <img src="{{ asset('images/descripcion-puestos.jpg') }}" alt="Descripción de puestos">
                        </div>
                        <div class="recurso-content">
                            <h3>Redactar descripciones de puesto atractivas</h3>
                            <p>Consejos para crear ofertas de empleo que atraigan al mejor talento.</p>
                            <div class="recurso-meta">
                                <span class="tipo">Artículo</span>
                                <span class="tiempo">8 min lectura</span>
                            </div>
                            <a href="#" class="btn btn-outline btn-sm">Leer más</a>
                        </div>
                    </article>

                    <article class="recurso-card">
                        <div class="recurso-image">
                            <img src="{{ asset('images/onboarding.jpg') }}" alt="Onboarding">
                        </div>
                        <div class="recurso-content">
                            <h3>Proceso de onboarding exitoso</h3>
                            <p>Guía completa para integrar nuevos empleados de manera efectiva.</p>
                            <div class="recurso-meta">
                                <span class="tipo">Webinar</span>
                                <span class="tiempo">45 min</span>
                            </div>
                            <a href="#" class="btn btn-outline btn-sm">Ver webinar</a>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Plantillas -->
            <div class="tab-content" id="templates">
                <div class="recursos-grid">
                    <div class="template-card">
                        <div class="template-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <h4>Plantilla de entrevista estructurada</h4>
                        <p>Preguntas organizadas por competencias y niveles de experiencia.</p>
                        <a href="#" class="btn btn-primary btn-sm">Descargar Word</a>
                    </div>

                    <div class="template-card">
                        <div class="template-icon">
                            <i class="fas fa-clipboard-list"></i>
                        </div>
                        <h4>Checklist de onboarding</h4>
                        <p>Lista de verificación para los primeros 90 días del empleado.</p>
                        <a href="#" class="btn btn-primary btn-sm">Descargar PDF</a>
                    </div>

                    <div class="template-card">
                        <div class="template-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h4>Matriz de evaluación de candidatos</h4>
                        <p>Sistema de puntuación para comparar candidatos objetivamente.</p>
                        <a href="#" class="btn btn-primary btn-sm">Descargar Excel</a>
                    </div>

                    <div class="template-card">
                        <div class="template-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <h4>Emails de comunicación con candidatos</h4>
                        <p>Plantillas para cada etapa del proceso de selección.</p>
                        <a href="#" class="btn btn-primary btn-sm">Ver plantillas</a>
                    </div>
                </div>
            </div>

            <!-- Herramientas -->
            <div class="tab-content" id="herramientas">
                <div class="herramientas-grid">
                    <div class="herramienta-card">
                        <div class="herramienta-header">
                            <i class="fas fa-calculator"></i>
                            <h4>Calculadora de costos de contratación</h4>
                        </div>
                        <p>Calcula el costo real de contratar un nuevo empleado.</p>
                        <button class="btn btn-primary" onclick="abrirCalculadora()">Usar calculadora</button>
                    </div>

                    <div class="herramienta-card">
                        <div class="herramienta-header">
                            <i class="fas fa-clock"></i>
                            <h4>Planificador de procesos de selección</h4>
                        </div>
                        <p>Organiza y programa todas las etapas de tu proceso de contratación.</p>
                        <button class="btn btn-primary">Crear planificación</button>
                    </div>

                    <div class="herramienta-card">
                        <div class="herramienta-header">
                            <i class="fas fa-users"></i>
                            <h4>Generador de perfiles de puesto</h4>
                        </div>
                        <p>Crea perfiles detallados basados en competencias y requisitos.</p>
                        <button class="btn btn-primary">Generar perfil</button>
                    </div>
                </div>
            </div>

            <!-- Blog RH -->
            <div class="tab-content" id="blog">
                <div class="blog-grid">
                    <article class="blog-post">
                        <div class="post-image">
                            <img src="{{ asset('images/tendencias-rh.jpg') }}" alt="Tendencias RH 2024">
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="fecha">15 Nov 2024</span>
                                <span class="categoria">Tendencias</span>
                            </div>
                            <h3>Tendencias en Recursos Humanos para 2024</h3>
                            <p>Descubre las principales tendencias que están transformando el mundo de RH este año.</p>
                            <a href="#" class="btn btn-outline btn-sm">Leer artículo</a>
                        </div>
                    </article>

                    <article class="blog-post">
                        <div class="post-image">
                            <img src="{{ asset('images/trabajo-remoto.jpg') }}" alt="Trabajo remoto">
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="fecha">08 Nov 2024</span>
                                <span class="categoria">Gestión</span>
                            </div>
                            <h3>Gestión efectiva de equipos remotos</h3>
                            <p>Estrategias para liderar y motivar equipos de trabajo distribuidos.</p>
                            <a href="#" class="btn btn-outline btn-sm">Leer artículo</a>
                        </div>
                    </article>

                    <article class="blog-post">
                        <div class="post-image">
                            <img src="{{ asset('images/diversidad-inclusion.jpg') }}" alt="Diversidad e inclusión">
                        </div>
                        <div class="post-content">
                            <div class="post-meta">
                                <span class="fecha">01 Nov 2024</span>
                                <span class="categoria">Diversidad</span>
                            </div>
                            <h3>Construyendo equipos diversos e inclusivos</h3>
                            <p>Cómo implementar estrategias de diversidad e inclusión en tu organización.</p>
                            <a href="#" class="btn btn-outline btn-sm">Leer artículo</a>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="newsletter-recursos">
        <div class="container">
            <div class="newsletter-content">
                <h2>Mantente actualizado</h2>
                <p>Recibe recursos exclusivos, tendencias y consejos de RH directamente en tu email</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Tu email profesional" required>
                    <button type="submit" class="btn btn-primary">Suscribirse</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/empresas/recursos.js') }}"></script>
@endsection