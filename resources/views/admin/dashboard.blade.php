@extends('layouts.system.app')

@section('title', 'Dashboard - Future Work Admin')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/admin/dashboard.css') }}">
@endpush

@section('content')
<div class="dashboard-header">
    <h1><i class="fas fa-tachometer-alt me-2"></i>Dashboard</h1>
    <p>Bienvenido, {{ auth()->user()->nombre }}</p>
</div>

<div class="dashboard-stats">
    <div class="row">
        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <div class="stat-icon bg-primary">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-content">
                    <h3>1,250</h3>
                    <p>Usuarios Registrados</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <div class="stat-icon bg-success">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="stat-content">
                    <h3>450</h3>
                    <p>Empleos Activos</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <div class="stat-icon bg-info">
                    <i class="fas fa-building"></i>
                </div>
                <div class="stat-content">
                    <h3>85</h3>
                    <p>Empresas</p>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="stat-card">
                <div class="stat-icon bg-warning">
                    <i class="fas fa-handshake"></i>
                </div>
                <div class="stat-content">
                    <h3>320</h3>
                    <p>Contrataciones</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dashboard-content">
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5><i class="fas fa-chart-line me-2"></i>Actividad Reciente</h5>
                </div>
                <div class="card-body">
                    <div class="activity-item">
                        <i class="fas fa-user-plus text-success"></i>
                        <div class="activity-content">
                            <strong>Nuevo usuario registrado:</strong> María González
                            <small class="text-muted">Hace 5 minutos</small>
                        </div>
                    </div>
                    <div class="activity-item">
                        <i class="fas fa-briefcase text-primary"></i>
                        <div class="activity-content">
                            <strong>Nuevo empleo publicado:</strong> Desarrollador Frontend
                            <small class="text-muted">Hace 15 minutos</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5><i class="fas fa-tasks me-2"></i>Acciones Rápidas</h5>
                </div>
                <div class="card-body">
                    <a href="{{ route('admin.users.index') }}" class="btn btn-outline-primary w-100 mb-2">
                        <i class="fas fa-users me-2"></i>
                        Gestionar Usuarios
                    </a>
                    <a href="#" class="btn btn-outline-success w-100 mb-2">
                        <i class="fas fa-briefcase me-2"></i>
                        Gestionar Empleos
                    </a>
                    <a href="#" class="btn btn-outline-info w-100">
                        <i class="fas fa-chart-bar me-2"></i>
                        Ver Reportes
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/admin/dashboard.js') }}"></script>
@endpush