@extends('layouts.web.app')

@section('title', 'Registro - Future Work')

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
                    <i class="fas fa-users-cog"></i>
                </div>
                <h3>¡Únete a nosotros!</h3>
                <p>Forma parte de la comunidad laboral más grande del sector construcción. Encuentra tu próximo trabajo o encuentra el talento perfecto.</p>
            </div>
        </div>

        <!-- Panel de Formulario -->
        <div class="auth-card">
            <div class="auth-header">
                <h2>Crear Cuenta</h2>
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
                    <i class="form-group-icon fas fa-user"></i>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" 
                           value="{{ old('nombre') }}" required autocomplete="name">
                    @error('nombre')
                        <div class="text-danger small mt-1">
                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>
                
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
                    <input type="password" name="password" class="form-control" placeholder="Contraseña (mín. 8 caracteres)" 
                           required autocomplete="new-password">
                    @error('password')
                        <div class="text-danger small mt-1">
                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="form-group">
                    <i class="form-group-icon fas fa-lock"></i>
                    <input type="password" name="password_confirmation" class="form-control" 
                           placeholder="Confirmar contraseña" required autocomplete="new-password">
                </div>
                
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" name="terms" class="form-check-input" id="terms" required>
                        <label class="form-check-label" for="terms">
                            <i class="fas fa-shield-alt me-1"></i>
                            Acepto los <a href="#" target="_blank" class="text-decoration-none">términos y condiciones</a> y la <a href="#" target="_blank" class="text-decoration-none">política de privacidad</a>
                        </label>
                    </div>
                    @error('terms')
                        <div class="text-danger small mt-1">
                            <i class="fas fa-exclamation-circle me-1"></i>{{ $message }}
                        </div>
                    @enderror
                </div>
                
                <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-user-plus me-2"></i>
                    Crear Mi Cuenta
                </button>
            </form>

            <div class="social-divider">
                <span>¿Ya tienes una cuenta?</span>
            </div>
            
            <div class="auth-footer">
                <p>
                    <i class="fas fa-sign-in-alt me-1"></i>
                    <a href="{{ route('login') }}">Inicia sesión aquí</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
    </div>
</div>
@endsection