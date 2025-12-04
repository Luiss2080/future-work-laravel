@extends('layouts.web.app')

@section('title', 'Inicio - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/inicio/inicio.css') }}">
@endsection

@section('content')
<div class="inicio-container">
    <section class="hero">
        <div class="hero-content">
            <h1>Encuentra tu trabajo ideal</h1>
            <p>Conectamos talento con oportunidades laborales</p>
            <div class="hero-actions">
                <a href="{{ route('empleos') }}" class="btn btn-primary">Buscar empleos</a>
                <a href="{{ route('empresas.publicar') }}" class="btn btn-outline">Publicar empleo</a>
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/hero-trabajo.jpg') }}" alt="Trabajo">
        </div>
    </section>

    <section class="estadisticas">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <h3>1,250+</h3>
                    <p>Empleos activos</p>
                </div>
                <div class="stat-card">
                    <h3>850+</h3>
                    <p>Empresas registradas</p>
                </div>
                <div class="stat-card">
                    <h3>3,200+</h3>
                    <p>Candidatos</p>
                </div>
                <div class="stat-card">
                    <h3>95%</h3>
                    <p>Satisfacción</p>
                </div>
            </div>
        </div>
    </section>

    <section class="empleos-destacados">
        <div class="container">
            <h2>Empleos destacados</h2>
            <div class="jobs-grid">
                <div class="job-card">
                    <h3>Desarrollador Frontend</h3>
                    <p class="company">TechCorp</p>
                    <p class="salary">€35,000 - €45,000</p>
                    <div class="job-tags">
                        <span>React</span>
                        <span>JavaScript</span>
                        <span>CSS</span>
                    </div>
                </div>
                <!-- Más trabajos -->
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/inicio/inicio.js') }}"></script>
@endsection