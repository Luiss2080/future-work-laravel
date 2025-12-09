@extends('layouts.web-app')

@section('title', 'Inicio - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/inicio/inicio.css') }}">
@endsection

@section('content')
<div class="inicio-wrapper">

    {{-- 1. HERO SECTION --}}
    <section class="hero-section">
        <div class="hero-bg">
            {{-- Ideally this is a high-quality video or image of people working --}}
            <img src="{{ asset('images/hero-trabajo.jpg') }}" alt="Future Work Hero">
        </div>
        <div class="hero-overlay"></div>
        
        <div class="container hero-content">
            <h1>CONSTRUYE TU <br> <span class="highlight">FUTURO HOY</span></h1>
            <p>La plataforma #1 en Latinoamérica que conecta profesionales, oficios y empresas en un solo ecosistema inteligente.</p>
            <div class="hero-actions">
                <a href="{{ route('bolsa-trabajo') }}" class="btn-neon">
                    Explorar Empleos <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>
    </section>

    {{-- 1.5 REAL-TIME STATS --}}
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>15K+</h3>
                    <p>Empleos Activos</p>
                </div>
                <div class="stat-card">
                    <h3>8.5K</h3>
                    <p>Empresas Verificadas</p>
                </div>
                <div class="stat-card">
                    <h3>98%</h3>
                    <p>Tasa de Éxito</p>
                </div>
                <div class="stat-card">
                    <h3>24h</h3>
                    <p>Tiempo Promedio de Contratación</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. SERVICIOS EXTRAS (TRADES GRID) --}}
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <span>Soluciones Integrales</span>
                <h2>Nuestros Servicios</h2>
                <p style="color: var(--text-gray); max-width: 600px; margin: 0 auto;">
                    No solo conectamos empresas con empleados. También ofrecemos una red confiable de oficios esenciales para tu hogar o negocio.
                </p>
            </div>

            <div class="services-grid">
                <!-- Bolsa de Trabajo -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>
                    <h3>Bolsa de Trabajo</h3>
                    <p>Miles de vacantes corporativas y remotas actualizadas diariamente. Tu próximo salto profesional está aquí.</p>
                </div>

                <!-- Carpintería -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <h3>Carpintería</h3>
                    <p>Muebles a medida, reparaciones y estructuras de madera. Carpinteros certificados y calificados.</p>
                </div>

                <!-- Plomería -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>Plomería</h3>
                    <p>Soluciones rápidas para fugas, instalaciones y mantenimiento de tuberías residencial y comercial.</p>
                </div>

                <!-- Electricidad -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Electricidad</h3>
                    <p>Instalaciones seguras, cableado estructurado y reparaciones eléctricas por profesionales.</p>
                </div>

                <!-- Jardinería -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <h3>Jardinería</h3>
                    <p>Diseño de paisajes, mantenimiento de áreas verdes y poda profesional para tu espacio.</p>
                </div>

                <!-- Albañilería -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-trowel"></i>
                    </div>
                    <h3>Albañilería</h3>
                    <p>Construcción, remodelaciones y acabados de alta calidad para transformar tus espacios.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 2.5 PROCESS SECTION --}}
    <section class="process-section">
        <div class="container">
            <div class="section-title">
                <span>Simplicidad</span>
                <h2>Cómo Funciona</h2>
            </div>
            <div class="process-steps">
                <div class="process-step">
                    <div class="step-number">1</div>
                    <h3>Crea tu Perfil</h3>
                    <p>Regístrate en segundos. Si eres candidato, sube tu CV. Si eres empresa, publica tu primera vacante.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">2</div>
                    <h3>Conecta</h3>
                    <p>Nuestro algoritmo te sugiere las mejores coincidencias automáticamente según tus habilidades.</p>
                </div>
                <div class="process-step">
                    <div class="step-number">3</div>
                    <h3>Empieza</h3>
                    <p>Cierra el trato directamente. Sin intermediarios, sin comisiones ocultas.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- 2.8 TESTIMONIALS SECTION --}}
    <section class="testimonials-section">
        <div class="container">
            <div class="section-title">
                <span>Historias de Éxito</span>
                <h2>Lo que dicen de nosotros</h2>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <i class="fas fa-quote-left"></i>
                    <p class="testimonial-content">
                        "Encontré un plomero certificado en menos de 2 horas para una emergencia en mi restaurante. Servicio impecable."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar" style="background: url('https://i.pravatar.cc/150?img=11'); background-size: cover;"></div>
                        <div class="author-info">
                            <h4>Carlos Ruiz</h4>
                            <span>Gerente de Operaciones</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <i class="fas fa-quote-left"></i>
                    <p class="testimonial-content">
                        "Como carpintera independiente, Future Work ha duplicado mi cartera de clientes. Es la mejor plataforma para oficios."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar" style="background: url('https://i.pravatar.cc/150?img=5'); background-size: cover;"></div>
                        <div class="author-info">
                            <h4>Ana Martínez</h4>
                            <span>Carpintera Profesional</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. JOB BOARD PREVIEW --}}
    <section class="job-board-section">
        <div class="container">
            <div class="job-preview-container">
                <div class="job-text">
                    <div class="section-title" style="text-align: left;">
                        <span>Para Candidatos</span>
                        <h2>Encuentra el <br> Trabajo Ideal</h2>
                    </div>
                    <p style="color: var(--text-gray); margin-bottom: 2rem; font-size: 1.1rem;">
                        Nuestro algoritmo inteligente analiza tu perfil y te empareja con las ofertas que mejor se adaptan a tus habilidades y aspiraciones salariales.
                    </p>
                    <ul style="list-style: none; padding: 0; margin-bottom: 2rem; color: var(--text-gray);">
                        <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle" style="color: var(--primary-neon); margin-right: 10px;"></i> Alertas de empleo en tiempo real</li>
                        <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle" style="color: var(--primary-neon); margin-right: 10px;"></i> Constructor de CV profesional</li>
                        <li style="margin-bottom: 1rem;"><i class="fas fa-check-circle" style="color: var(--primary-neon); margin-right: 10px;"></i> Conexión directa con reclutadores</li>
                    </ul>
                    <a href="{{ route('register') }}" class="btn-neon" style="background: transparent; border: 1px solid var(--primary-neon); color: var(--primary-neon);">
                        Crear Perfil Gratis
                    </a>
                </div>
                
                <div class="job-visual">
                    <!-- Floating Cards Animation -->
                    <div class="floating-card card-1">
                        <div style="font-size: 0.8rem; color: var(--text-gray);">Nueva Vacante</div>
                        <h4 style="margin: 0.5rem 0; color: white;">Desarrollador Senior</h4>
                        <div style="color: var(--primary-neon); font-weight: bold;">$45,000 - $60,000</div>
                    </div>
                    
                    <div class="floating-card card-2">
                        <div style="font-size: 0.8rem; color: var(--text-gray);">Contratado</div>
                        <h4 style="margin: 0.5rem 0; color: white;">Arq. Luis Méndez</h4>
                        <div style="color: var(--accent-purple); font-weight: bold;">Constructora Global</div>
                    </div>

                    <div class="floating-card card-3">
                        <div style="font-size: 0.8rem; color: var(--text-gray);">Solicitud Aceptada</div>
                        <h4 style="margin: 0.5rem 0; color: white;">Jardinero Exprés</h4>
                        <div style="color: var(--gold); font-weight: bold;">Disponible Hoy</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 3.5 BRANDS SECTION --}}
    <section class="brands-section">
        <div class="container">
            <div class="brands-grid">
                <div class="brand-item">TECHNO</div>
                <div class="brand-item">CONSTRUMEX</div>
                <div class="brand-item">INOVA</div>
                <div class="brand-item">GLOBAL</div>
                <div class="brand-item">STARTUP</div>
            </div>
        </div>
    </section>

    {{-- 4. ADS SECTION --}}
    <section class="ads-section">
        <div class="container">
            <div class="ad-banner">
                <div class="ad-content">
                    <span class="ad-badge">Espacio Publicitario</span>
                    <h3>Impulsa tu Marca con Future Work</h3>
                    <p style="color: var(--text-gray); max-width: 600px; margin: 0 auto 2rem auto;">
                        Llega a más de 50,000 profesionales y empresas activas cada mes. Alquila este espacio y haz crecer tu negocio hoy mismo.
                    </p>
                    <a href="{{ route('contacto') }}" class="btn-neon">
                        Contactar Ventas
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection

@section('scripts')
    {{-- Simple Scroll Reveal Script --}}
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });

            document.querySelectorAll('.service-card, .section-title, .hero-content').forEach(el => {
                el.style.opacity = 0;
                el.style.transform = 'translateY(30px)';
                el.style.transition = 'all 0.8s ease-out';
                observer.observe(el);
            });
        });
    </script>
@endsection