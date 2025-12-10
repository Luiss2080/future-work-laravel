@extends('layouts.web-app')

@section('title', 'Inicio - Future Work')

@section('styles')
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/inicio/inicio.css') }}">
@endsection

@section('content')

<!-- 1. HERO SECTION -->
<section class="hero-section">
    <div class="hero-container">
        
        <!-- Text Content -->
        <div class="hero-text" data-aos="fade-right" data-aos-duration="1000">
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
        <div class="hero-visual" data-aos="fade-left" data-aos-duration="1000">
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

<!-- 2. TRUST BANNER (MARQUEE) -->
<div class="trust-section">
    <div class="marquee-wrapper">
        <!-- Content duplicated for infinite scroll effect -->
        <div class="trust-logo"><i class="fab fa-aws"></i> AMAZON</div>
        <div class="trust-logo"><i class="fab fa-google"></i> GOOGLE</div>
        <div class="trust-logo"><i class="fab fa-microsoft"></i> MICROSOFT</div>
        <div class="trust-logo"><i class="fab fa-airbnb"></i> AIRBNB</div>
        <div class="trust-logo"><i class="fab fa-uber"></i> UBER</div>
        <div class="trust-logo"><i class="fas fa-building"></i> CEMEX</div>
        <div class="trust-logo"><i class="fas fa-hard-hat"></i> GRUPO CARSO</div>
        <!-- Specs Clone -->
        <div class="trust-logo"><i class="fab fa-aws"></i> AMAZON</div>
        <div class="trust-logo"><i class="fab fa-google"></i> GOOGLE</div>
        <div class="trust-logo"><i class="fab fa-microsoft"></i> MICROSOFT</div>
        <div class="trust-logo"><i class="fab fa-airbnb"></i> AIRBNB</div>
        <div class="trust-logo"><i class="fab fa-uber"></i> UBER</div>
        <div class="trust-logo"><i class="fas fa-building"></i> CEMEX</div>
        <div class="trust-logo"><i class="fas fa-hard-hat"></i> GRUPO CARSO</div>
    </div>
</div>

<!-- 3. HOW IT WORKS (NEW) -->
<section class="steps-section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span>Proceso Simple</span>
            <h2>Cómo Funciona</h2>
        </div>
        
        <div class="steps-container">
            <!-- Step 1 -->
            <div class="step-card" data-aos="fade-up" data-aos-delay="100">
                <div class="step-icon">
                    <i class="fas fa-user-plus"></i>
                    <div class="step-number">1</div>
                </div>
                <h3>Crea tu Perfil</h3>
                <p style="color: var(--text-gray);">Regístrate gratis y completa tu perfil profesional o de empresa en menos de 2 minutos.</p>
            </div>

            <!-- Step 2 -->
            <div class="step-card" data-aos="fade-up" data-aos-delay="200">
                <div class="step-icon">
                    <i class="fas fa-search"></i>
                    <div class="step-number">2</div>
                </div>
                <h3>Conecta</h3>
                <p style="color: var(--text-gray);">Explora vacantes o candidatos. Nuestro algoritmo inteligente te sugiere las mejores opciones.</p>
            </div>

            <!-- Step 3 -->
            <div class="step-card" data-aos="fade-up" data-aos-delay="300">
                <div class="step-icon">
                    <i class="fas fa-handshake"></i>
                    <div class="step-number">3</div>
                </div>
                <h3>Trabaja</h3>
                <p style="color: var(--text-gray);">Cierra el trato directamente y comienza a trabajar. Sin intermediarios molestos.</p>
            </div>
        </div>
    </div>
</section>

<!-- 4. STATS SECTION -->
<section class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item" data-aos="zoom-in" data-aos-delay="100">
                <h3>15K+</h3>
                <p>Candidatos Activos</p>
            </div>
            <div class="stat-item" data-aos="zoom-in" data-aos-delay="200">
                <h3>8.5K</h3>
                <p>Empresas Confían</p>
            </div>
            <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
                <h3>98%</h3>
                <p>Tasa de Éxito</p>
            </div>
            <div class="stat-item" data-aos="zoom-in" data-aos-delay="400">
                <h3>24h</h3>
                <p>Tiempo Promedio</p>
            </div>
        </div>
    </div>
</section>

<!-- 5. PROFESSIONS GRID -->
<section class="professions-section">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <span>Explora Categorías</span>
            <h2>Profesiones Destacadas</h2>
        </div>

        <div class="professions-grid">
            
            <!-- Arquitecto -->
            <a href="{{ route('arquitecto') }}" class="profession-card" data-aos="fade-up">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1503387762-592deb58ef4e?q=80&w=2689&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-drafting-compass"></i></div>
                    <h3>Arquitecto</h3>
                    <span>Diseño y Planificación</span>
                </div>
            </a>

            <!-- Ingeniero Civil -->
            <a href="{{ route('ingeniero-civil') }}" class="profession-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1541888946425-d81bb19240f5?q=80&w=2670&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-building"></i></div>
                    <h3>Ingeniero Civil</h3>
                    <span>Infraestructura</span>
                </div>
            </a>

            <!-- Diseñador -->
            <a href="{{ route('disenador') }}" class="profession-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1618221195710-dd6b41faaea6?q=80&w=2600&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-paint-brush"></i></div>
                    <h3>Diseñador</h3>
                    <span>Interiores y Decoración</span>
                </div>
            </a>

            <!-- Escultor -->
            <a href="{{ route('escultor') }}" class="profession-card" data-aos="fade-up" data-aos-delay="300">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1569420842238-f909d9db5582?q=80&w=2576&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-hammer"></i></div>
                    <h3>Escultor</h3>
                    <span>Arte y Modelado</span>
                </div>
            </a>

            <!-- Albañil -->
            <a href="{{ route('albanil') }}" class="profession-card" data-aos="fade-up">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=2670&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-trowel"></i></div>
                    <h3>Albañil</h3>
                    <span>Construcción</span>
                </div>
            </a>

            <!-- Electricista -->
            <a href="{{ route('electricista') }}" class="profession-card" data-aos="fade-up" data-aos-delay="100">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1621905251189-08b45d6a269e?q=80&w=2669&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-bolt"></i></div>
                    <h3>Electricista</h3>
                    <span>Instalaciones</span>
                </div>
            </a>

            <!-- Plomero -->
            <a href="{{ route('plomero') }}" class="profession-card" data-aos="fade-up" data-aos-delay="200">
                <div class="card-img" style="background-image: url('https://images.unsplash.com/photo-1581244277943-fe4a9c777189?q=80&w=2670&auto=format&fit=crop');"></div>
                <div class="card-content">
                    <div class="card-icon"><i class="fas fa-wrench"></i></div>
                    <h3>Plomero</h3>
                    <span>Reparaciones</span>
                </div>
            </a>

            <!-- Jardinero -->
            <a href="{{ route('jardinero') }}" class="profession-card" data-aos="fade-up" data-aos-delay="300">
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

<!-- 6. NEWSLETTER & CTA -->
<section class="newsletter-section">
    <div class="newsletter-content" data-aos="flip-up">
        <h2 style="font-size: 2.5rem; font-weight: 800; margin-bottom: 1rem;">Únete a nuestra comunidad</h2>
        <p style="color: var(--text-gray); margin-bottom: 2rem;">
            Recibe las mejores ofertas de empleo y consejos profesionales directamente en tu correo.
        </p>
        <form class="newsletter-form">
            <input type="email" placeholder="Tu correo electrónico" class="newsletter-input">
            <button type="submit" class="btn-neon" style="border-radius: 50px;">Suscribirse</button>
        </form>
    </div>
</section>

@endsection

@section('scripts')
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize AOS
        AOS.init({
            duration: 800,
            offset: 50,
            once: true,
            easing: 'ease-out-cubic'
        });
    });
</script>
@endsection