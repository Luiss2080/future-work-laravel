@extends('layouts.app')

@section('title', 'Dashboard - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/web/dashboard/index.css') }}">
@endsection

@section('content')
<div class="dashboard-container">
    <div class="dashboard-header">
        <h1>Panel de Control</h1>
        <p>Bienvenido de vuelta, {{ auth()->user()->name ?? 'Usuario' }}</p>
    </div>

    <div class="dashboard-stats">
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-briefcase"></i>
            </div>
            <div class="stat-info">
                <h3>12</h3>
                <p>Aplicaciones enviadas</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-eye"></i>
            </div>
            <div class="stat-info">
                <h3>245</h3>
                <p>Vistas de perfil</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-calendar"></i>
            </div>
            <div class="stat-info">
                <h3>3</h3>
                <p>Entrevistas programadas</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-star"></i>
            </div>
            <div class="stat-info">
                <h3>4.8</h3>
                <p>Valoración promedio</p>
            </div>
        </div>
    </div>

    <div class="dashboard-content">
        <div class="dashboard-main">
            <section class="recent-applications">
                <div class="section-header">
                    <h2>Aplicaciones Recientes</h2>
                    <a href="#" class="view-all">Ver todas</a>
                </div>
                <div class="applications-list">
                    <div class="application-item">
                        <div class="company-logo">
                            <img src="{{ asset('images/company-placeholder.jpg') }}" alt="Company">
                        </div>
                        <div class="application-info">
                            <h3>Desarrollador Frontend</h3>
                            <p class="company">TechStartup Inc.</p>
                            <span class="status pending">Pendiente</span>
                        </div>
                        <div class="application-date">
                            <span>Hace 2 días</span>
                        </div>
                    </div>
                    <!-- Más aplicaciones... -->
                </div>
            </section>

            <section class="recommended-jobs">
                <div class="section-header">
                    <h2>Trabajos Recomendados</h2>
                    <a href="#" class="view-all">Ver más</a>
                </div>
                <div class="jobs-grid">
                    <div class="job-card">
                        <h3>Desarrollador Full Stack</h3>
                        <p class="company">InnovaTech S.L.</p>
                        <p class="salary">€45,000 - €55,000</p>
                        <div class="job-tags">
                            <span class="tag">React</span>
                            <span class="tag">Node.js</span>
                            <span class="tag">MongoDB</span>
                        </div>
                        <button class="btn btn-primary">Aplicar</button>
                    </div>
                    <!-- Más trabajos... -->
                </div>
            </section>
        </div>

        <div class="dashboard-sidebar">
            <div class="profile-completion">
                <h3>Completar Perfil</h3>
                <div class="progress-bar">
                    <div class="progress-fill" style="width: 75%"></div>
                </div>
                <p>75% completado</p>
                <ul class="completion-tasks">
                    <li class="completed">Información básica</li>
                    <li class="completed">Foto de perfil</li>
                    <li class="pending">Experiencia laboral</li>
                    <li class="pending">Habilidades</li>
                </ul>
            </div>

            <div class="quick-actions">
                <h3>Acciones Rápidas</h3>
                <a href="#" class="action-btn">
                    <i class="fas fa-upload"></i>
                    Subir CV
                </a>
                <a href="#" class="action-btn">
                    <i class="fas fa-search"></i>
                    Buscar empleos
                </a>
                <a href="#" class="action-btn">
                    <i class="fas fa-user-edit"></i>
                    Editar perfil
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/web/dashboard/index.js') }}"></script>
@endsection