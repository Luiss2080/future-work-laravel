@extends('layouts.web-app')

@section('title', 'Inicio - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/inicio/inicio.css') }}">
@endsection

@section('content')

<!-- 1. HERO SECTION -->
<section class="hero-section">
    <div class="hero-container">
        
        <!-- Text Content -->
        <div class="hero-text">
            <span>CONECTANDO TALENTO & OPORTUNIDAD</span>
            <h1>CONSTRUYE TU <br> <span class="highlight">FUTURO HOY</span></h1>
            <p>
                La plataforma líder que une a profesionales, oficios calificados y empresas 
                en un ecosistema digital inteligente. Encuentra empleo o contrata talento verificado en minutos.
            </p>
            <div class="hero-buttons">
                <a href="{{ route('bolsa-trabajo') }}" class="btn-neon">
                    Explorar Empleos
                </a>
                <a href="{{ route('register') }}" class="btn-neon" style="background: transparent; border: 1px solid var(--primary-neon); margin-left: 1rem; color: var(--primary-neon);">
                    Crear Perfil
                </a>
            </div>
        </div>

        <!-- Visual Content -->
        <div class="hero-visual">
            <div class="hero-image-main"></div>
            
            <!-- Floating Card 1 -->
            <div class="floating-card card-1">
                <div class="floating-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div>
                    <h4 style="margin: 0; color: white;">+500 Empleos</h4>
                    <span style="font-size: 0.8rem; color: var(--text-gray);">Publicados hoy</span>
                </div>
            </div>

            <!-- Floating Card 2 -->
            <div class="floating-card card-2">
                <div class="floating-icon" style="color: var(--accent-purple);">
                    <i class="fas fa-user-check"></i>
                </div>
                <div>
                    <h4 style="margin: 0; color: white;">Verificados</h4>
                    <span style="font-size: 0.8rem; color: var(--text-gray);">Profesionales Top</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. STATS SECTION -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item">
                <h3>15K+</h3>
                <p>Candidatos Activos</p>
            </div>
            <div class="stat-item">
                <h3>8.5K</h3>
                <p>Empresas Confían</p>
            </div>
            <div class="stat-item">
                <h3>98%</h3>
                <p>Tasa de Éxito</p>
            </div>
            <div class="stat-item">
                <h3>24h</h3>
                <p>Tiempo Promedio</p>
            </div>
        </div>
    </div>
</section>

<!-- 3. PROFESSIONS GRID -->
<section class="professions-section">
    <div class="container">
        <div class="section-title">
            <span>Explora Categorías</span>
            <h2>Profesiones Destacadas</h2>
        </div>

        <div class="professions-grid">
            
            <!-- Arquitecto -->
            <a href="{{ route('arquitecto') }}" class="profession-card">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=2689&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-drafting-compass"></i></div>
                    <h3>Arquitecto</h3>
                    <span>Diseño y Planificación</span>
                </div>
            </a>

            <!-- Ingeniero Civil -->
            <a href="{{ route('ingeniero-civil') }}" class="profession-card">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2670&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-building"></i></div>
                    <h3>Ingeniero Civil</h3>
                    <span>Infraestructura</span>
                </div>
            </a>

            <!-- Diseñador -->
            <a href="{{ route('disenador') }}" class="profession-card">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2600&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3>Diseñador</h3>
                    <span>Interiores y Decoración</span>
                </div>
            </a>

            <!-- Escultor -->
            <a href="{{ route('escultor') }}" class="profession-card">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1549887534-1541e9326642?q=80&w=2670&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-hammer"></i></div>
                    <h3>Escultor</h3>
                    <span>Arte y Modelado</span>
                </div>
            </a>

            <!-- Albañil -->
            <a href="{{ route('albanil') }}" class="profession-card">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2670&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-trowel"></i></div>
                    <h3>Albañil</h3>
                    <span>Construcción</span>
                </div>
            </a>

            <!-- Electricista -->
            <a href="{{ route('electricista') }}" class="profession-card">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=2669&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Electricista</h3>
                    <span>Instalaciones</span>
                </div>
            </a>

            <!-- Plomero -->
            <a href="{{ route('plomero') }}" class="profession-card">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1581244277943-fe4a9c777189?q=80&w=2670&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-wrench"></i></div>
                    <h3>Plomero</h3>
                    <span>Reparaciones</span>
                </div>
            </a>

            <!-- Jardinero -->
            <a href="{{ route('jardinero') }}" class="profession-card">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1557429287-b2e26467fc2b?q=80&w=2574&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-leaf"></i></div>
                    <h3>Jardinero</h3>
                    <span>Paisajismo</span>
                </div>
            </a>

        </div>
    </div>
</section>

<!-- 4. SERVICES FEATURES -->
<section class="services-section">
    <div class="container">
        <div class="section-title">
            <span>¿Por qué elegirnos?</span>
            <h2>Soluciones Integrales</h2>
        </div>
        
        <div class="services-grid">
            <div class="service-card">
                <i class="fas fa-shield-alt"></i>
                <h3>Verificación 100%</h3>
                <p>Todos los profesionales y empresas pasan por un riguroso proceso de validación de identidad y certificaciones.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-rocket"></i>
                <h3>Contratación Rápida</h3>
                <p>Nuestro algoritmo reduce el tiempo de búsqueda en un 70%. Conecta con el talento ideal en cuestión de horas.</p>
            </div>
            <div class="service-card">
                <i class="fas fa-comments-dollar"></i>
                <h3>Sin Comisiones Ocultas</h3>
                <p>Transparencia total. Lo que acuerdas es lo que pagas. Modelo de suscripción flexible para empresas.</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. TESTIMONIALS -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-title">
            <span>Testimonios</span>
            <h2>Lo que dicen nuestros usuarios</h2>
        </div>
        
        <div class="testimonials-wrapper">
            <div class="testimonial-card">
                <i class="fas fa-quote-left"></i>
                <p class="testimonial-text">
                    "Gracias a Future Work encontré un equipo de albañiles certificados para mi proyecto residencial en tiempo récord. La calidad del trabajo fue excepcional."
                </p>
                <div class="testimonial-author">
                    <div class="author-img" style="background-image: url('https://randomuser.me/api/portraits/men/32.jpg');"></div>
                    <div class="author-info">
                        <h4>Carlos Rodríguez</h4>
                        <span>Gerente de Proyecto</span>
                    </div>
                </div>
            </div>
            <div class="testimonial-card">
                <i class="fas fa-quote-left"></i>
                <p class="testimonial-text">
                    "Como arquitecta independiente, esta plataforma me ha permitido visibilizar mi portafolio y conseguir clientes de alto valor. ¡Totalmente recomendada!"
                </p>
                <div class="testimonial-author">
                    <div class="author-img" style="background-image: url('https://randomuser.me/api/portraits/women/44.jpg');"></div>
                    <div class="author-info">
                        <h4>Ana Sofía Méndez</h4>
                        <span>Arquitecta</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 6. FINAL CTA -->
<section class="cta-section">
    <div class="cta-box" data-aos="zoom-in">
        <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 2rem;">¿Listo para transformar tu futuro?</h2>
        <a href="{{ route('register') }}" class="btn-neon" style="font-size: 1.2rem; padding: 1.2rem 3rem;">
            Comenzar Ahora <i class="fas fa-arrow-right" style="margin-left: 10px;"></i>
        </a>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // Simple Scroll Reveal API
    document.addEventListener('DOMContentLoaded', () => {
        const observerOptions = { threshold: 0.1 };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        const elements = document.querySelectorAll('.profession-card, .service-card, .testimonial-card');
        elements.forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease-out';
            el.style.transitionDelay = `${index * 100}ms`; // Stagger effect
            observer.observe(el);
        });
    });
</script>
@endsection