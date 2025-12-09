@extends('layouts.web-app')

@section('title', 'Empleos - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/candidatos/empleos.css') }}">
@endsection

@section('content')

<!-- HERO SECTION: Search & Intro -->
<section class="empleos-hero">
    <div class="hero-content">
        <h1>Encuentra tu <span>Trabajo Ideal</span></h1>
        <p>Miles de oportunidades en las mejores empresas tecnológicas están esperando por ti. Filtra, aplica y despega.</p>
        
        <div class="hero-search-box" data-aos="fade-up">
            <input type="text" placeholder="Cargo, empresa o palabra clave...">
            <button>BUSCAR</button>
        </div>
    </div>
</section>

<!-- MAIN CONTENT GRID -->
<div class="empleos-container">
    
    <!-- LEFT SIDEBAR: FILTERS -->
    <aside class="filtros-sidebar" data-aos="fade-right">
        <div class="sidebar-header">
            <i class="fas fa-sliders-h"></i> Filtros
        </div>

        <div class="filtro-grupo">
            <h4><i class="fas fa-map-marker-alt"></i> Ubicación</h4>
            <select class="filtro-select">
                <option value="">Todas las ciudades</option>
                <option value="madrid">Madrid</option>
                <option value="barcelona">Barcelona</option>
                <option value="valencia">Valencia</option>
                <option value="remoto">Remoto</option>
            </select>
        </div>

        <div class="filtro-grupo">
            <h4><i class="fas fa-code"></i> Categoría</h4>
            <div class="checkbox-list">
                <label><input type="checkbox"> Desarrollo Web</label>
                <label><input type="checkbox"> Diseño UX/UI</label>
                <label><input type="checkbox"> Marketing</label>
                <label><input type="checkbox"> Data Science</label>
            </div>
        </div>

        <div class="filtro-grupo">
            <h4><i class="fas fa-briefcase"></i> Experiencia</h4>
            <select class="filtro-select">
                <option value="">Cualquier nivel</option>
                <option value="junior">Junior (0-2 años)</option>
                <option value="mid">Mid (3-5 años)</option>
                <option value="senior">Senior (5+ años)</option>
            </select>
        </div>

        <div class="filtro-grupo">
            <h4><i class="fas fa-money-bill-wave"></i> Salario Anual</h4>
            <div class="checkbox-list">
                <label><input type="checkbox"> €20k - €30k</label>
                <label><input type="checkbox"> €30k - €50k</label>
                <label><input type="checkbox"> €50k +</label>
            </div>
        </div>

        <button class="btn-aplicar">APLICAR FILTROS</button>
    </aside>

    <!-- RIGHT CONTENT: JOB LIST -->
    <main class="empleos-main">
        
        <!-- ADDITIONAL CONTENT: TOP BANNER -->
        <div class="featured-companies-banner" data-aos="fade-down">
            <div class="banner-text">
                <h3><i class="fas fa-star" style="color: #fbbf24;"></i> Empresas Destacadas</h3>
                <p>Contratando activamente esta semana</p>
            </div>
            <div class="company-logos">
                <img src="https://img.logoipsum.com/286.svg" height="30" alt="Logo" style="opacity: 0.8;">
                <img src="https://img.logoipsum.com/297.svg" height="30" alt="Logo" style="opacity: 0.8;">
                <img src="https://img.logoipsum.com/244.svg" height="30" alt="Logo" style="opacity: 0.8;">
            </div>
            <button class="btn-partner">Ver Partners</button>
        </div>

        <!-- HEADER INFO -->
        <div class="empleos-header" style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem;">
            <p style="color: var(--text-gray); font-size: 0.9rem;">Mostrando <strong>124</strong> vacantes</p>
            <select style="background: transparent; border: none; color: white; cursor: pointer;">
                <option>Más recientes</option>
                <option>Mejor pagados</option>
            </select>
        </div>

        <!-- JOB CARDS LIST -->
        <div class="empleos-lista">

            <!-- JOB CARD 1 -->
            <div class="empleo-card" data-aos="fade-up">
                <div class="card-logo">
                    <!-- Standard placeholder logo since we don't have local files guaranteed, using logoipsum via url for demo or span -->
                    <i class="fas fa-rocket" style="font-size: 2rem; color: #2563eb;"></i> 
                </div>
                <div class="card-info">
                    <h3>Senior Frontend Developer</h3>
                    <div class="company-name">
                        TechNova Solutions <i class="fas fa-check-circle" style="color: #22d3ee;" title="Verificado"></i>
                    </div>
                    <div class="job-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Madrid (Híbrido)</span>
                        <span><i class="fas fa-clock"></i> Full Time</span>
                        <span><i class="fas fa-euro-sign"></i> 45k - 60k</span>
                    </div>
                    <div class="card-tags">
                        <div class="tag">React</div>
                        <div class="tag">TypeScript</div>
                        <div class="tag">Tailwind</div>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn-job btn-apply">Aplicar Ahora</button>
                    <button class="btn-job btn-view">Guardar</button>
                </div>
            </div>

            <!-- JOB CARD 2 -->
            <div class="empleo-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-logo">
                    <i class="fas fa-cubes" style="font-size: 2rem; color: #7c3aed;"></i>
                </div>
                <div class="card-info">
                    <h3>Product Designer UX/UI</h3>
                    <div class="company-name">
                        Creative Studio
                    </div>
                    <div class="job-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Barcelona (Remoto)</span>
                        <span><i class="fas fa-clock"></i> Full Time</span>
                        <span><i class="fas fa-euro-sign"></i> 35k - 45k</span>
                    </div>
                    <div class="card-tags">
                        <div class="tag">Figma</div>
                        <div class="tag">Prototyping</div>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn-job btn-apply">Aplicar Ahora</button>
                    <button class="btn-job btn-view">Guardar</button>
                </div>
            </div>

             <!-- JOB CARD 3 -->
             <div class="empleo-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-logo">
                    <i class="fas fa-database" style="font-size: 2rem; color: #059669;"></i>
                </div>
                <div class="card-info">
                    <h3>Backend Engineer (Python)</h3>
                    <div class="company-name">
                        DataFlow Systems <i class="fas fa-check-circle" style="color: #22d3ee;"></i>
                    </div>
                    <div class="job-meta">
                        <span><i class="fas fa-map-marker-alt"></i> Valencia</span>
                        <span><i class="fas fa-clock"></i> Full Time</span>
                        <span><i class="fas fa-euro-sign"></i> 50k - 70k</span>
                    </div>
                    <div class="card-tags">
                        <div class="tag">Python</div>
                        <div class="tag">Django</div>
                        <div class="tag">AWS</div>
                    </div>
                </div>
                <div class="card-actions">
                    <button class="btn-job btn-apply">Aplicar Ahora</button>
                    <button class="btn-job btn-view">Guardar</button>
                </div>
            </div>

            <!-- ADVERTISEMENT / MIDDLE BANNER -->
            <div class="empleo-card" style="background: linear-gradient(135deg, rgba(6, 182, 212, 0.1), rgba(34, 211, 238, 0.05)); border-color: var(--primary-neon); text-align: center; flex-direction: column; align-items: center; padding: 2rem;" data-aos="zoom-in">
                <h3 style="color: white; font-size: 1.5rem; margin-bottom: 0.5rem;">¿No encuentras lo que buscas?</h3>
                <p style="color: var(--text-gray); margin-bottom: 1.5rem;">Sube tu CV a nuestra base de datos y deja que las empresas te contacten a ti.</p>
                <a href="{{ route('subir-cv') }}" style="background: var(--primary-neon); color: black; padding: 0.8rem 2rem; border-radius: 50px; text-decoration: none; font-weight: bold;">
                    Subir mi CV <i class="fas fa-arrow-right"></i>
                </a>
            </div>

        </div>

        <!-- PAGINATION -->
        <div class="paginacion">
            <div class="page-btn"><i class="fas fa-chevron-left"></i></div>
            <div class="page-btn active">1</div>
            <div class="page-btn">2</div>
            <div class="page-btn">3</div>
            <div class="page-btn">...</div>
            <div class="page-btn"><i class="fas fa-chevron-right"></i></div>
        </div>

    </main>
</div>

@endsection

@section('scripts')
    <!-- Pass -->
@endsection