@extends('layouts.web-app')

@section('title', 'Sobre Nosotros - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/nosotros/nosotros.css') }}">
@endsection

@section('content')

<!-- Hero Section -->
<section class="about-hero">
    <div class="container hero-content">
        <h1 data-aos="fade-down">Impulsando el Futuro</h1>
        <p data-aos="fade-up" data-aos-delay="100">
            Conectamos ambición con oportunidad. La plataforma líder donde el talento encuentra su hogar.
        </p>
    </div>
</section>

<!-- Stats Strip -->
<div class="stats-section">
    <div class="container">
        <div class="stats-grid">
            <div class="stat-item" data-aos="fade-up">
                <h3>15K+</h3>
                <p>Vacantes Activas</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                <h3>850+</h3>
                <p>Empresas Aliadas</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                <h3>50K+</h3>
                <p>Candidatos</p>
            </div>
            <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                <h3>98%</h3>
                <p>Éxito</p>
            </div>
        </div>
    </div>
</div>

<!-- Mission & Vision -->
<section class="mission-vision-section">
    <div class="container">
        <div class="mv-grid">
            <div class="mv-card" data-aos="fade-right">
                <span class="mv-number">01</span>
                <div class="mv-content">
                    <i class="fas fa-rocket mv-icon"></i>
                    <h3 class="mv-title">Nuestra Misión</h3>
                    <p class="mv-text">
                        Democratizar el acceso a oportunidades laborales de calidad en toda Latinoamérica, utilizando tecnología de punta para eliminar barreras y sesgos en la contratación.
                    </p>
                </div>
            </div>
            <div class="mv-card" data-aos="fade-left">
                <span class="mv-number">02</span>
                <div class="mv-content">
                    <i class="fas fa-globe-americas mv-icon"></i>
                    <h3 class="mv-title">Nuestra Visión</h3>
                    <p class="mv-text">
                        Construir la red profesional más confiable y eficiente del continente, donde cada profesional pueda alcanzar su máximo potencial sin importar su ubicación.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values-section">
    <div class="container">
        <div class="section-title">
            <span>Nuestros Valores</span>
        </div>
        
        <div class="values-grid">
            <div class="value-card" data-aos="zoom-in">
                <div class="value-icon-wrapper"><i class="fas fa-bolt"></i></div>
                <h3 class="value-title">Agilidad</h3>
                <p class="value-text">Nos movemos rápido para adaptarnos a un mercado laboral en constante evolución.</p>
            </div>
            <div class="value-card" data-aos="zoom-in" data-aos-delay="100">
                <div class="value-icon-wrapper"><i class="fas fa-shield-alt"></i></div>
                <h3 class="value-title">Seguridad</h3>
                <p class="value-text">Protegemos los datos y la privacidad de nuestros usuarios por encima de todo.</p>
            </div>
            <div class="value-card" data-aos="zoom-in" data-aos-delay="200">
                <div class="value-icon-wrapper"><i class="fas fa-users"></i></div>
                <h3 class="value-title">Comunidad</h3>
                <p class="value-text">Creemos en el poder de conectar personas para crear sinergias únicas.</p>
            </div>
            <div class="value-card" data-aos="zoom-in" data-aos-delay="300">
                <div class="value-icon-wrapper"><i class="fas fa-chart-line"></i></div>
                <h3 class="value-title">Impacto</h3>
                <p class="value-text">Medimos nuestro éxito por las vidas que cambiamos positivamente cada día.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section (New) -->
<section class="team-section">
    <div class="container">
        <div class="section-title">
            <span>Nuestro Equipo</span>
        </div>
        <div class="team-grid">
            <!-- Team Member 1: Augusto -->
            <div class="team-card" data-aos="flip-left">
                <div class="team-img-wrapper">
                    <img src="{{ asset('images/Augusto.jpg') }}" alt="Augusto">
                </div>
                <div class="team-info">
                    <h3>Augusto</h3>
                    <span>CEO & Fundador</span>
                    <div class="team-socials">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 2: Jenny -->
            <div class="team-card" data-aos="flip-left" data-aos-delay="100">
                <div class="team-img-wrapper">
                    <img src="{{ asset('images/Jenny.jpg') }}" alt="Jenny">
                </div>
                <div class="team-info">
                    <h3>Jenny</h3>
                    <span>Directora de Marketing</span>
                    <div class="team-socials">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 3: Jose -->
            <div class="team-card" data-aos="flip-left" data-aos-delay="200">
                <div class="team-img-wrapper">
                    <img src="{{ asset('images/Jose.jpg') }}" alt="Jose">
                </div>
                <div class="team-info">
                    <h3>José</h3>
                    <span>Desarrollador Lead</span>
                    <div class="team-socials">
                        <a href="#"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 4: Ronaldo -->
            <div class="team-card" data-aos="flip-left" data-aos-delay="300">
                <div class="team-img-wrapper">
                    <img src="{{ asset('images/Ronaldo.jpg') }}" alt="Ronaldo">
                </div>
                <div class="team-info">
                    <h3>Ronaldo</h3>
                    <span>Jefe de Operaciones</span>
                    <div class="team-socials">
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>

            <!-- Team Member 5: Jose (Sin Lentes) - Assuming a distinct role or person -->
            <div class="team-card" data-aos="flip-left" data-aos-delay="400">
                <div class="team-img-wrapper">
                    <img src="{{ asset('images/JoseSinLentes.jpg') }}" alt="Jose Alternativo">
                </div>
                <div class="team-info">
                    <h3>José (CM)</h3>
                    <span>Community Manager</span>
                    <div class="team-socials">
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section (New) -->
<section class="faq-section">
    <div class="container">
        <div class="section-title">
            <span>Preguntas Frecuentes</span>
        </div>
        
        <details data-aos="fade-up">
            <summary>¿Cómo funciona el proceso de selección?</summary>
            <div class="faq-content">
                Nuestra IA analiza tu perfil y lo empareja con las ofertas que mejor se adaptan a tus habilidades. Las empresas reciben tu CV filtrado y pueden contactarte directamente.
            </div>
        </details>
        
        <details data-aos="fade-up" data-aos-delay="100">
            <summary>¿Es gratis para los candidatos?</summary>
            <div class="faq-content">
                ¡Sí! Para los candidatos, registrarse, subir su CV y aplicar a ofertas es 100% gratuito y siempre lo será.
            </div>
        </details>
        
        <details data-aos="fade-up" data-aos-delay="200">
            <summary>¿Cómo verifican a las empresas?</summary>
            <div class="faq-content">
                Tenemos un riguroso proceso de validación manual para asegurar que todas las ofertas provienen de empresas legítimas y respetables.
            </div>
        </details>

        <details data-aos="fade-up" data-aos-delay="300">
            <summary>¿Puedo ocultar mi perfil?</summary>
            <div class="faq-content">
                Absolutamente. Puedes configurar tu perfil como "visible solo para empresas a las que aplico" desde tu panel de configuración.
            </div>
        </details>
    </div>
</section>

<!-- CTA Section (New) -->
<section class="cta-section" data-aos="zoom-in-up">
    <div class="container cta-box">
        <h2>¿Listo para el siguiente paso?</h2>
        <p>Únete a miles de profesionales que ya han impulsado su carrera con Future Work.</p>
        <a href="{{ route('register') }}" class="btn-cta">Crear Cuenta Gratis</a>
    </div>
</section>

@endsection