@extends('layouts.web.app')

@section('title', 'Registro - Future Work')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/auth.css') }}">
@endpush

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h2><i class="fas fa-user-plus me-2"></i>Crear Cuenta</h2>
            <p>Únete a Future Work y encuentra tu empleo ideal</p>
        </div>
        
        <form class="auth-form" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmar contraseña" required>
            </div>
            <div class="form-group">
                <select name="tipo_usuario" class="form-select" required>
                    <option value="">Seleccionar tipo de usuario</option>
                    <option value="candidato">Candidato</option>
                    <option value="empresa">Empresa</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">
                Crear Cuenta
            </button>
        </form>
        
        <div class="auth-footer">
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a></p>
        </div>
    </div>
</div>
@endsection