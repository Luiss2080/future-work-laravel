@extends('layouts.app')

@section('title', 'Dashboard Empresa - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/web/companies/dashboard.css') }}">
@endsection

@section('content')
<div class="company-dashboard">
    <div class="dashboard-header">
        <h1>Panel de Empresa</h1>
        <p>Gestiona tus ofertas de empleo y candidatos</p>
    </div>

    <div class="dashboard-stats">
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-briefcase"></i>
            </div>
            <div class="stat-info">
                <h3>8</h3>
                <p>Ofertas activas</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-users"></i>
            </div>
            <div class="stat-info">
                <h3>156</h3>
                <p>Candidatos totales</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-user-check"></i>
            </div>
            <div class="stat-info">
                <h3>23</h3>
                <p>Candidatos nuevos</p>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <div class="stat-info">
                <h3>5</h3>
                <p>Entrevistas programadas</p>
            </div>
        </div>
    </div>

    <div class="dashboard-content">
        <div class="dashboard-main">
            <section class="active-jobs">
                <div class="section-header">
                    <h2>Ofertas Activas</h2>
                    <a href="{{ route('companies.post-job') }}" class="btn btn-primary">Nueva oferta</a>
                </div>
                <div class="jobs-table">
                    <table>
                        <thead>
                            <tr>
                                <th>Puesto</th>
                                <th>Candidatos</th>
                                <th>Publicado</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Desarrollador Frontend Senior</td>
                                <td>32</td>
                                <td>Hace 3 días</td>
                                <td><span class="status active">Activa</span></td>
                                <td>
                                    <button class="btn btn-sm">Editar</button>
                                    <button class="btn btn-sm">Ver candidatos</button>
                                </td>
                            </tr>
                            <!-- Más filas... -->
                        </tbody>
                    </table>
                </div>
            </section>

            <section class="recent-applications">
                <div class="section-header">
                    <h2>Aplicaciones Recientes</h2>
                    <a href="#" class="view-all">Ver todas</a>
                </div>
                <div class="applications-list">
                    <div class="application-item">
                        <div class="candidate-info">
                            <img src="{{ asset('images/default-avatar.jpg') }}" alt="Candidato" class="candidate-avatar">
                            <div>
                                <h4>María González</h4>
                                <p>Desarrollador Frontend Senior</p>
                            </div>
                        </div>
                        <div class="application-actions">
                            <button class="btn btn-outline-primary btn-sm">Ver perfil</button>
                            <button class="btn btn-primary btn-sm">Contactar</button>
                        </div>
                    </div>
                    <!-- Más aplicaciones... -->
                </div>
            </section>
        </div>

        <div class="dashboard-sidebar">
            <div class="company-profile">
                <h3>Perfil de Empresa</h3>
                <div class="company-logo">
                    <img src="{{ asset('images/company-placeholder.jpg') }}" alt="Logo empresa">
                </div>
                <h4>TechCorp S.A.</h4>
                <p>Tecnología • Madrid</p>
                <a href="#" class="btn btn-outline">Editar perfil</a>
            </div>

            <div class="quick-actions">
                <h3>Acciones Rápidas</h3>
                <a href="#" class="action-btn">
                    <i class="fas fa-plus"></i>
                    Publicar oferta
                </a>
                <a href="#" class="action-btn">
                    <i class="fas fa-search"></i>
                    Buscar candidatos
                </a>
                <a href="#" class="action-btn">
                    <i class="fas fa-chart-bar"></i>
                    Ver estadísticas
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/web/companies/dashboard.js') }}"></script>
@endsection