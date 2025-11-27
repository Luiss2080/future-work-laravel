@extends('layouts.system.app')

@section('title', 'Usuarios - Future Work Admin')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/admin/users.css') }}">
@endpush

@section('content')
<div class="users-header">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            <h1><i class="fas fa-users me-2"></i>Usuarios</h1>
            <p class="text-muted">Gestiona todos los usuarios registrados</p>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
            <i class="fas fa-plus me-2"></i>
            Crear Usuario
        </button>
    </div>
</div>

<div class="users-filters">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <input type="text" class="form-control" placeholder="Buscar por nombre o email">
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>Todos los tipos</option>
                        <option>Candidato</option>
                        <option>Empresa</option>
                        <option>Admin</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <select class="form-select">
                        <option>Todos los estados</option>
                        <option>Activo</option>
                        <option>Inactivo</option>
                    </select>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary w-100">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="users-table">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Tipo</th>
                            <th>Registro</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="user-info">
                                    <div class="user-avatar">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div>
                                        <strong>Juan Pérez</strong>
                                        <br>
                                        <small class="text-muted">juan@email.com</small>
                                    </div>
                                </div>
                            </td>
                            <td><span class="badge bg-primary">Candidato</span></td>
                            <td>25/11/2025</td>
                            <td><span class="badge bg-success">Activo</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/admin/users.js') }}"></script>
@endpush