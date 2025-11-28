@extends('layouts.web.app')

@section('title', 'Login - Future Work')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/auth.css') }}">
@endpush

@section('content')
<div class="auth-container">
    <div class="auth-main">
        <!-- Panel Visual Izquierdo -->
        <div class="auth-visual">
            <div class="auth-visual-content">
                <div class="auth-visual-icon">
                    <i class="fas fa-hard-hat"></i>
                </div>
                <h3>¡Bienvenido de vuelta!</h3>
                <p>Conecta con las mejores oportunidades laborales en el sector de la construcción y servicios</p>
            </div>
        </div>

        <!-- Panel de Formulario -->
        <div class="auth-card">
            <div class="auth-header">
                <h2>Iniciar Sesión</h2>
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
                    <i class="form-group-icon fas fa-envelope"></i>
                    <input type="email" name="email" class="form-control" placeholder="Correo electrónico" 
                           value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <div class="text-danger small mt-1">
                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <i class="form-group-icon fas fa-lock"></i>
                    <input type="password" name="password" class="form-control" placeholder="Contraseña" 
                           required autocomplete="current-password">
                    @error('password')
                        <div class="text-danger small mt-1">
                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" name="remember" class="form-check-input" id="remember">
                        <label class="form-check-label" for="remember">
                            <i class="fas fa-check me-1"></i>Recordar mi sesión
                        </label>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-sign-in-alt me-2"></i>
                    Iniciar Sesión
                </button>
            </form>

            <div class="social-divider">
                <span>¿Olvidaste tu contraseña?</span>
            </div>

            <div class="text-center">
                <a href="#" class="text-decoration-none">
                    <i class="fas fa-key me-1"></i>Recuperar contraseña
                </a>
            </div>
            
            <div class="auth-footer">
                <p>
                    <i class="fas fa-user-plus me-1"></i>
                    ¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection