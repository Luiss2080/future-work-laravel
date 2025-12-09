@extends('layouts.web-app')

@section('title', 'Buscar Candidatos - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/empresas/candidatos.css') }}">
@endsection

@section('content')
<div class="candidatos-container">
    
    <!-- HERO SECTION -->
    <section class="hero-candidatos">
        <div class="hero-content">
            <h1 data-aos="fade-up">Encuentra al <span>Candidato Ideal</span></h1>
            <p data-aos="fade-up" data-aos-delay="100">Accede a nuestra base de talentos verificados y construye tu equipo de ensueño.</p>
            
            <div class="hero-search-wrapper" data-aos="fade-up" data-aos-delay="200">
                <input type="text" class="search-main-input" placeholder="Ej. Desarrollador React, Diseñador UX...">
                <button class="btn-hero-search">BUSCAR</button>
            </div>
        </div>
    </section>

    <!-- MAIN CONTENT GRID -->
    <div class="main-content-grid">
        
        <!-- SIDEBAR FILTERS -->
        <aside class="filtros-sidebar" data-aos="fade-right">
            <div class="sidebar-header">
                <i class="fas fa-filter"></i> Filtros
            </div>

            <div class="filtro-grupo">
                <h4><i class="fas fa-globe-americas"></i> Ubicación</h4>
                <select class="filtro-select">
                    <option value="">Cualquier lugar</option>
                    <option value="madrid">Madrid</option>
                    <option value="barcelona">Barcelona</option>
                    <option value="remoto">Remoto</option>
                </select>
            </div>

            <div class="filtro-grupo">
                <h4><i class="fas fa-layer-group"></i> Área</h4>
                <div class="checkbox-list">
                    <label><input type="checkbox"> Tecnología</label>
                    <label><input type="checkbox"> Creativo / Diseño</label>
                    <label><input type="checkbox"> Negocios</label>
                    <label><input type="checkbox"> Marketing</label>
                </div>
            </div>

            <div class="filtro-grupo">
                <h4><i class="fas fa-clock"></i> Experiencia</h4>
                <select class="filtro-select">
                    <option value="">Todos</option>
                    <option value="junior">1-2 años</option>
                    <option value="senior">3-5 años</option>
                    <option value="lead">+5 años</option>
                </select>
            </div>

            <div class="filtro-grupo">
                <h4><i class="fas fa-language"></i> Idioma</h4>
                <div class="checkbox-list">
                    <label><input type="checkbox"> Español</label>
                    <label><input type="checkbox"> Inglés</label>
                    <label><input type="checkbox"> Francés</label>
                </div>
            </div>

            <button class="btn-aplicar">ACTUALIZAR RESULTADOS</button>
        </aside>

        <!-- CANDIDATE GRID -->
        <main>
            <div class="resultados-header">
                <p>Mostrando <strong>842</strong> candidatos disponibles</p>
                <select class="filtro-select" style="width: auto; padding: 0.5rem 1rem;">
                    <option>Más Relevantes</option>
                    <option>Recién Activos</option>
                </select>
            </div>

            <div class="candidatos-grid">
                
                <!-- CARD 1 -->
                <div class="candidato-card" data-aos="fade-up">
                    <span class="card-badge">Top Talent</span>
                    <div class="card-avatar">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=1887&auto=format&fit=crop" alt="User">
                    </div>
                    <div class="card-info">
                        <h3>Laura Martínez</h3>
                        <span class="card-title">Senior UX Researcher</span>
                        <div class="card-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Madrid</span>
                            <span><i class="fas fa-briefcase"></i> 5 Años Exp.</span>
                        </div>
                        <div class="card-skills">
                            <span class="skill">Figma</span>
                            <span class="skill">User Testing</span>
                            <span class="skill">Agile</span>
                        </div>
                        <button class="btn-contact">Contactar Perfil</button>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="candidato-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-avatar">
                        <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?q=80&w=1887&auto=format&fit=crop" alt="User">
                    </div>
                    <div class="card-info">
                        <h3>David Chen</h3>
                        <span class="card-title">Full Stack Developer</span>
                        <div class="card-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Remoto</span>
                            <span><i class="fas fa-briefcase"></i> 3 Años Exp.</span>
                        </div>
                        <div class="card-skills">
                            <span class="skill">React</span>
                            <span class="skill">Node.js</span>
                            <span class="skill">PostgreSQL</span>
                        </div>
                        <button class="btn-contact">Contactar Perfil</button>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="candidato-card" data-aos="fade-up" data-aos-delay="200">
                    <span class="card-badge">Verificado</span>
                    <div class="card-avatar">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=1887&auto=format&fit=crop" alt="User">
                    </div>
                    <div class="card-info">
                        <h3>Alejandro Ruiz</h3>
                        <span class="card-title">Digital Marketing Specialist</span>
                        <div class="card-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Barcelona</span>
                            <span><i class="fas fa-briefcase"></i> 4 Años Exp.</span>
                        </div>
                        <div class="card-skills">
                            <span class="skill">SEO/SEM</span>
                            <span class="skill">Analytics</span>
                            <span class="skill">Content</span>
                        </div>
                        <button class="btn-contact">Contactar Perfil</button>
                    </div>
                </div>

                <!-- CARD 4 -->
                <div class="candidato-card" data-aos="fade-up">
                    <div class="card-avatar">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=1961&auto=format&fit=crop" alt="User">
                    </div>
                    <div class="card-info">
                        <h3>Sarah Johnson</h3>
                        <span class="card-title">Project Manager</span>
                        <div class="card-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Valencia</span>
                            <span><i class="fas fa-briefcase"></i> 6 Años Exp.</span>
                        </div>
                        <div class="card-skills">
                            <span class="skill">Scrum</span>
                            <span class="skill">Jira</span>
                            <span class="skill">Leadership</span>
                            <span class="skill">English C1</span>
                        </div>
                        <button class="btn-contact">Contactar Perfil</button>
                    </div>
                </div>

                 <!-- CARD 5 -->
                 <div class="candidato-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-avatar">
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?q=80&w=1780&auto=format&fit=crop" alt="User">
                    </div>
                    <div class="card-info">
                        <h3>Miguel Ángel</h3>
                        <span class="card-title">DevOps Engineer</span>
                        <div class="card-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Remoto</span>
                            <span><i class="fas fa-briefcase"></i> 4 Años Exp.</span>
                        </div>
                        <div class="card-skills">
                            <span class="skill">Docker</span>
                            <span class="skill">Kubernetes</span>
                            <span class="skill">AWS</span>
                            <span class="skill">CI/CD</span>
                        </div>
                        <button class="btn-contact">Contactar Perfil</button>
                    </div>
                </div>
                
                 <!-- CARD 6 -->
                 <div class="candidato-card" data-aos="fade-up" data-aos-delay="200">
                    <span class="card-badge">Top Talent</span>
                    <div class="card-avatar">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=2069&auto=format&fit=crop" alt="User">
                    </div>
                    <div class="card-info">
                        <h3>Elena Torres</h3>
                        <span class="card-title">Data Scientist</span>
                        <div class="card-meta">
                            <span><i class="fas fa-map-marker-alt"></i> Madrid</span>
                            <span><i class="fas fa-briefcase"></i> 3 Años Exp.</span>
                        </div>
                        <div class="card-skills">
                            <span class="skill">Python</span>
                            <span class="skill">Machine Learning</span>
                            <span class="skill">SQL</span>
                        </div>
                        <button class="btn-contact">Contactar Perfil</button>
                    </div>
                </div>

            </div>

             <!-- PREMIUM UPSELL -->
             <div class="premium-banner" data-aos="zoom-in">
                <h2><i class="fas fa-crown" style="color: #fbbf24;"></i> Accede a Todo el Talento</h2>
                <p>Nuestra base de datos completa incluye más de 10,000 perfiles validados. Desbloquea filtros avanzados y contacto ilimitado con el Plan Premium.</p>
                <a href="{{ route('planes-precios') }}" class="btn-premium">VER PLANES PREMIUM</a>
            </div>

        </main>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/empresas/candidatos.js') }}"></script>
    <script>
        // Simple hover effect for cards
        document.querySelectorAll('.candidato-card').forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.borderColor = 'var(--primary-neon)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.borderColor = 'var(--border-color)';
            });
        });
    </script>
@endsection