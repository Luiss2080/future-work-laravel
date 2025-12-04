@extends('layouts.web.app')

@section('title', 'Login - Future Work')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/auth.css') }}">
@endpush

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h2><i class="fas fa-sign-in-alt me-2"></i>Iniciar Sesión</h2>
            <p>Accede a tu cuenta de Future Work</p>
        </div>

        <!-- Mostrar errores de validación -->
        @if($errors->any())
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-triangle me-2"></i>
                {{ $errors->first() }}
            </div>
        @endif

        <!-- Mostrar mensaje de éxito -->
        @if(session('success'))
            <div class="alert alert-success">
                <i class="fas fa-check-circle me-2"></i>
                {{ session('success') }}
            </div>
        @endif
        
        <form class="auth-form" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Correo electrónico" 
                       value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Contraseña" 
                       required autocomplete="current-password">
                @error('password')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="form-group form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Recordarme</label>
            </div>
            
            <button type="submit" class="btn btn-primary w-100">
                Iniciar Sesión
            </button>
        </form>

        <div class="auth-divider">
            <span>¿Olvidaste tu contraseña?</span>
        </div>

        <div class="text-center mb-3">
            <a href="#" class="text-decoration-none">Recuperar contraseña</a>
        </div>
        
        <div class="auth-footer">
            <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
        </div>
    </div>
</div>
@endsection