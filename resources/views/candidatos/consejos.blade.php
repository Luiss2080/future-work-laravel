@extends('layouts.web-app')

@section('title', 'Consejos de Carrera - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/candidatos/consejos.css') }}">
@endsection

@section('content')
<div class="consejos-container">
    <section class="hero-consejos">
        <div class="container">
            <div class="hero-content">
                <h1>Consejos para tu Carrera</h1>
                <p>Guías y recursos para potenciar tu desarrollo profesional</p>
            </div>
        </div>
    </section>

    <section class="categorias-consejos">
        <div class="container">
            <div class="consejos-tabs">
                <button class="tab-btn active" data-tab="cv">CV y Currículum</button>
                <button class="tab-btn" data-tab="entrevistas">Entrevistas</button>
                <button class="tab-btn" data-tab="networking">Networking</button>
                <button class="tab-btn" data-tab="desarrollo">Desarrollo</button>
            </div>

            <!-- CV y Currículum -->
            <div class="tab-content active" id="cv">
                <div class="consejos-grid">
                    <article class="consejo-card">
                        <div class="consejo-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="consejo-content">
                            <h3>Cómo estructurar tu CV perfecto</h3>
                            <p>Aprende la estructura ideal para destacar tus fortalezas y experiencia profesional.</p>
                            <ul>
                                <li>Información personal y contacto</li>
                                <li>Resumen profesional impactante</li>
                                <li>Experiencia laboral relevante</li>
                                <li>Educación y certificaciones</li>
                                <li>Habilidades técnicas y blandas</li>
                            </ul>
                            <a href="#" class="btn btn-outline">Ver ejemplos</a>
                        </div>
                    </article>

                    <article class="consejo-card">
                        <div class="consejo-icon">
                            <i class="fas fa-magic"></i>
                        </div>
                        <div class="consejo-content">
                            <h3>Palabras clave que destacan</h3>
                            <p>Incluye términos relevantes para superar los filtros de ATS y llamar la atención de reclutadores.</p>
                            <div class="keywords-ejemplo">
                                <span class="keyword">Liderazgo</span>
                                <span class="keyword">Innovación</span>
                                <span class="keyword">Resultados</span>
                                <span class="keyword">Eficiencia</span>
                            </div>
                            <a href="#" class="btn btn-outline">Lista completa</a>
                        </div>
                    </article>

                    <article class="consejo-card">
                        <div class="consejo-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="consejo-content">
                            <h3>Cuantifica tus logros</h3>
                            <p>Usa números y métricas para demostrar el impacto de tu trabajo.</p>
                            <div class="ejemplos-logros">
                                <div class="logro-ejemplo">
                                    <strong>Antes:</strong> "Mejoré las ventas del equipo"
                                </div>
                                <div class="logro-ejemplo destacado">
                                    <strong>Después:</strong> "Incrementé las ventas en un 35% durante 6 meses"
                                </div>
                            </div>
                            <a href="#" class="btn btn-outline">Más ejemplos</a>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Entrevistas -->
            <div class="tab-content" id="entrevistas">
                <div class="consejos-grid">
                    <article class="consejo-card">
                        <div class="consejo-icon">
                            <i class="fas fa-comments"></i>
                        </div>
                        <div class="consejo-content">
                            <h3>Preparación para entrevistas</h3>
                            <p>Estrategias para llegar confiado y preparado a tu entrevista laboral.</p>
                            <div class="checklist">
                                <div class="check-item">
                                    <i class="fas fa-check"></i>
                                    <span>Investiga sobre la empresa</span>
                                </div>
                                <div class="check-item">
                                    <i class="fas fa-check"></i>
                                    <span>Practica respuestas comunes</span>
                                </div>
                                <div class="check-item">
                                    <i class="fas fa-check"></i>
                                    <span>Prepara preguntas inteligentes</span>
                                </div>
                                <div class="check-item">
                                    <i class="fas fa-check"></i>
                                    <span>Planifica tu vestimenta</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="consejo-card">
                        <div class="consejo-icon">
                            <i class="fas fa-question-circle"></i>
                        </div>
                        <div class="consejo-content">
                            <h3>Preguntas frecuentes y cómo responderlas</h3>
                            <p>Las preguntas más comunes en entrevistas y estrategias para responderlas efectivamente.</p>
                            <div class="preguntas-frecuentes">
                                <div class="pregunta-item">
                                    <strong>"Háblame de ti"</strong>
                                    <p>Enfócate en tu trayectoria profesional relevante</p>
                                </div>
                                <div class="pregunta-item">
                                    <strong>"¿Por qué quieres trabajar aquí?"</strong>
                                    <p>Muestra conocimiento sobre la empresa y alineación con sus valores</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="consejo-card">
                        <div class="consejo-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <div class="consejo-content">
                            <h3>Entrevistas virtuales</h3>
                            <p>Consejos específicos para destacar en entrevistas por videollamada.</p>
                            <ul>
                                <li>Prueba tu tecnología previamente</li>
                                <li>Encuentra un espacio iluminado y silencioso</li>
                                <li>Mantén contacto visual con la cámara</li>
                                <li>Ten agua y notas a mano</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Networking -->
            <div class="tab-content" id="networking">
                <div class="consejos-grid">
                    <article class="consejo-card">
                        <div class="consejo-icon">
                            <i class="fab fa-linkedin"></i>
                        </div>
                        <div class="consejo-content">
                            <h3>Optimiza tu perfil de LinkedIn</h3>
                            <p>Haz que tu perfil profesional destaque y atraiga oportunidades.</p>
                            <div class="linkedin-tips">
                                <div class="tip-item">
                                    <i class="fas fa-camera"></i>
                                    <span>Foto profesional de calidad</span>
                                </div>
                                <div class="tip-item">
                                    <i class="fas fa-pencil-alt"></i>
                                    <span>Titular llamativo y específico</span>
                                </div>
                                <div class="tip-item">
                                    <i class="fas fa-align-left"></i>
                                    <span>Resumen que cuenta tu historia</span>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="consejo-card">
                        <div class="consejo-icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="consejo-content">
                            <h3>Construye tu red profesional</h3>
                            <p>Estrategias para crear y mantener contactos profesionales valiosos.</p>
                            <ul>
                                <li>Participa en eventos de tu industria</li>
                                <li>Únete a grupos profesionales</li>
                                <li>Mantén contacto regular con tu red</li>
                                <li>Ofrece ayuda antes de pedirla</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>

            <!-- Desarrollo -->
            <div class="tab-content" id="desarrollo">
                <div class="consejos-grid">
                    <article class="consejo-card">
                        <div class="consejo-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="consejo-content">
                            <h3>Educación continua</h3>
                            <p>Mantente actualizado en tu campo profesional.</p>
                            <div class="recursos-educacion">
                                <a href="#" class="recurso-link">
                                    <i class="fas fa-book"></i>
                                    <span>Cursos online recomendados</span>
                                </a>
                                <a href="#" class="recurso-link">
                                    <i class="fas fa-certificate"></i>
                                    <span>Certificaciones valiosas</span>
                                </a>
                                <a href="#" class="recurso-link">
                                    <i class="fas fa-podcast"></i>
                                    <span>Podcasts de desarrollo profesional</span>
                                </a>
                            </div>
                        </div>
                    </article>

                    <article class="consejo-card">
                        <div class="consejo-icon">
                            <i class="fas fa-target"></i>
                        </div>
                        <div class="consejo-content">
                            <h3>Planifica tu carrera</h3>
                            <p>Define objetivos claros y crea un plan para alcanzarlos.</p>
                            <div class="plan-carrera">
                                <div class="paso">
                                    <span class="numero">1</span>
                                    <span>Evalúa tu situación actual</span>
                                </div>
                                <div class="paso">
                                    <span class="numero">2</span>
                                    <span>Define tus objetivos</span>
                                </div>
                                <div class="paso">
                                    <span class="numero">3</span>
                                    <span>Identifica las brechas</span>
                                </div>
                                <div class="paso">
                                    <span class="numero">4</span>
                                    <span>Crea un plan de acción</span>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="herramientas-carrera">
        <div class="container">
            <h2>Herramientas gratuitas</h2>
            <div class="herramientas-grid">
                <div class="herramienta">
                    <i class="fas fa-file-download"></i>
                    <h4>Plantillas de CV</h4>
                    <p>Descarga plantillas profesionales gratuitas</p>
                    <a href="#" class="btn btn-primary">Descargar</a>
                </div>
                
                <div class="herramienta">
                    <i class="fas fa-clipboard-check"></i>
                    <h4>Checklist de búsqueda</h4>
                    <p>Lista completa para organizar tu búsqueda de empleo</p>
                    <a href="#" class="btn btn-primary">Obtener</a>
                </div>
                
                <div class="herramienta">
                    <i class="fas fa-chart-pie"></i>
                    <h4>Test de personalidad laboral</h4>
                    <p>Descubre qué tipo de trabajo se adapta mejor a ti</p>
                    <a href="#" class="btn btn-primary">Realizar test</a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/candidatos/consejos.js') }}"></script>
@endsection