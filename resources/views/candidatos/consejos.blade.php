@extends('layouts.web-app')

@section('title', 'Consejos de Carrera - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/candidatos/consejos.css') }}">
@endsection

@section('content')

<!-- Hero Section -->
<section class="consejos-hero">
    <div class="container hero-content">
        <h1 data-aos="fade-down">Tu Carrera al Siguiente Nivel</h1>
        <p data-aos="fade-up" data-aos-delay="100">
            Descubre guías prácticas, secretos de expertos y herramientas para destacar en el mercado laboral actual.
        </p>
    </div>
</section>

<!-- Topics Navigation -->
<div class="container">
    <div class="topics-nav" data-aos="fade-up" data-aos-delay="200">
        <a href="#cv" class="topic-btn active"><i class="far fa-file-alt"></i> CV Perfecto</a>
        <a href="#entrevistas" class="topic-btn"><i class="far fa-comments"></i> Entrevistas</a>
        <a href="#networking" class="topic-btn"><i class="fas fa-users"></i> Networking</a>
        <a href="#desarrollo" class="topic-btn"><i class="fas fa-chart-line"></i> Desarrollo</a>
    </div>
</div>

<!-- Main Content -->
<section class="articles-section">
    <div class="container">

        <!-- CATEGORY: CV & CURRICULUM -->
        <h2 class="category-title" id="cv">Optimización de CV</h2>
        <div class="articles-grid">
            <!-- Article 1 -->
            <div class="article-card" data-aos="fade-up">
                <div class="article-thumb">
                    <img src="https://images.unsplash.com/photo-1586281380349-632531db7ed4?q=80&w=2070&auto=format&fit=crop" alt="CV Structure">
                    <span class="article-category">Guía Básica</span>
                </div>
                <div class="article-content">
                    <h3>Cómo estructurar tu CV para el 2025</h3>
                    <p>La estructura ideal ha cambiado. Aprende qué secciones priorizar para captar la atención de los reclutadores en 6 segundos.</p>
                    <div class="article-footer">
                        <span class="read-time"><i class="far fa-clock"></i> 5 min</span>
                        <a href="#" class="btn-read-more">Leer Artículo <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="article-card" data-aos="fade-up" data-aos-delay="100">
                <div class="article-thumb">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=2070&auto=format&fit=crop" alt="Keywords">
                    <span class="article-category">Estrategia</span>
                </div>
                <div class="article-content">
                    <h3>Palabras clave para vencer a los ATS</h3>
                    <p>Cómo optimizar tu currículum para que los algoritmos de selección automática no te descarten antes de tiempo.</p>
                    <div class="article-footer">
                        <span class="read-time"><i class="far fa-clock"></i> 8 min</span>
                        <a href="#" class="btn-read-more">Leer Artículo <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="article-card" data-aos="fade-up" data-aos-delay="200">
                <div class="article-thumb">
                    <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?q=80&w=2070&auto=format&fit=crop" alt="Achievements">
                    <span class="article-category">Tips Pro</span>
                </div>
                <div class="article-content">
                    <h3>Cuantifica tus logros</h3>
                    <p>No digas qué hiciste, di qué lograste. Aprende a convertir responsabilidades en métricas de éxito impactantes.</p>
                    <div class="article-footer">
                        <span class="read-time"><i class="far fa-clock"></i> 6 min</span>
                        <a href="#" class="btn-read-more">Leer Artículo <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- CATEGORY: ENTREVISTAS -->
        <h2 class="category-title" id="entrevistas">Maestría en Entrevistas</h2>
        <div class="articles-grid">
             <!-- Article 4 -->
             <div class="article-card" data-aos="fade-up">
                <div class="article-thumb">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=2069&auto=format&fit=crop" alt="Interview">
                    <span class="article-category">Soft Skills</span>
                </div>
                <div class="article-content">
                    <h3>Preguntas trampa y cómo responderlas</h3>
                    <p>Descubre qué hay detrás de preguntas como "¿Cuál es tu mayor debilidad?" y cómo responder con inteligencia emocional.</p>
                    <div class="article-footer">
                        <span class="read-time"><i class="far fa-clock"></i> 10 min</span>
                        <a href="#" class="btn-read-more">Leer Artículo <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <!-- Article 5 -->
            <div class="article-card" data-aos="fade-up" data-aos-delay="100">
                <div class="article-thumb">
                    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?q=80&w=2070&auto=format&fit=crop" alt="Negotiation">
                    <span class="article-category">Negociación</span>
                </div>
                <div class="article-content">
                    <h3>Negociación salarial para principiantes</h3>
                    <p>Guía paso a paso para investigar el mercado, esperar el momento justo y pedir lo que vales sin miedo.</p>
                    <div class="article-footer">
                        <span class="read-time"><i class="far fa-clock"></i> 12 min</span>
                        <a href="#" class="btn-read-more">Leer Artículo <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Featured Tip Box -->
            <div class="featured-tip" data-aos="zoom-in" data-aos-delay="200">
                <div class="tip-content">
                    <h2>¿Listo para el siguiente paso?</h2>
                    <p>Sube tu CV actualizado hoy mismo y deja que nuestra IA encuentre las vacantes ideales para tu nuevo perfil.</p>
                    <a href="{{ route('subir-cv') }}" class="btn-read-more" style="font-size: 1.2rem; background: var(--primary-neon); color: black; padding: 0.8rem 2rem; border-radius: 50px; display: inline-block;">
                        Subir mi CV Ahora
                    </a>
                </div>
                <div class="tip-icon">
                    <i class="fas fa-rocket"></i>
                </div>
            </div>

        </div>

    </div>
</section>

@endsection