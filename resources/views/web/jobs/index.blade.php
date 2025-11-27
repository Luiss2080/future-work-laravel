@extends('layouts.web.app')

@section('title', 'Empleos - Future Work')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/jobs.css') }}">
@endpush

@section('content')
<div class="jobs-header">
    <div class="container">
        <h1><i class="fas fa-briefcase me-3"></i>Empleos Disponibles</h1>
        <p>Encuentra tu trabajo ideal entre miles de oportunidades</p>
    </div>
</div>

<div class="jobs-filters">
    <div class="container">
        <form class="filter-form">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar por cargo o empresa">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>Todas las categorías</option>
                        <option>Tecnología</option>
                        <option>Marketing</option>
                        <option>Ventas</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>Todas las ubicaciones</option>
                        <option>Remoto</option>
                        <option>México</option>
                        <option>Colombia</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="jobs-content">
    <div class="container">
        <div class="jobs-list">
            <div class="job-card">
                <div class="job-header">
                    <h3>Desarrollador Frontend React</h3>
                    <div class="job-salary">$50,000 - $70,000</div>
                </div>
                <div class="job-company">
                    <i class="fas fa-building me-2"></i>
                    Tech Solutions Inc.
                </div>
                <div class="job-location">
                    <i class="fas fa-map-marker-alt me-2"></i>
                    Remoto / México
                </div>
                <div class="job-description">
                    Buscamos desarrollador Frontend con experiencia en React, TypeScript y metodologías ágiles...
                </div>
                <div class="job-tags">
                    <span class="tag">React</span>
                    <span class="tag">TypeScript</span>
                    <span class="tag">Remoto</span>
                </div>
                <div class="job-actions">
                    <button class="btn btn-primary">Aplicar Ahora</button>
                    <button class="btn btn-outline-secondary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/web/jobs.js') }}"></script>
@endpush