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

        <!-- Mostrar errores de validación -->
        @if($errors->any())
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-triangle me-2"></i>
                Por favor corrige los errores en el formulario
            </div>
        @endif

        <!-- Mostrar mensaje de éxito -->
        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
            </div>
        @endif
        
        <form class="auth-form" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" 
                       value="{{ old('nombre') }}" required autocomplete="name">
                @error('nombre')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Correo electrónico" 
                       value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" 
                       required autocomplete="new-password">
                @error('password')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <input type="password" name="password_confirmation" class="form-control" 
                       placeholder="Confirmar contraseña" required autocomplete="new-password">
            </div>
            
            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" name="terms" class="form-check-input" id="terms" required>
                    <label class="form-check-label" for="terms">
                        Acepto los <a href="#" target="_blank">términos y condiciones</a>
                    </label>
                </div>
                @error('terms')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
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