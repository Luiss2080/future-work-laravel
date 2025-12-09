@extends('layouts.web-app')

@section('title', 'Registro - Future Work')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/css/auth/register.css') }}">
@endsection

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
            
            <!-- Nombre -->
            <div class="form-group">
                <div class="input-icon-wrapper">
                    <i class="fas fa-user"></i>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" 
                           value="{{ old('nombre') }}" required autocomplete="name">
                </div>
                @error('nombre')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- Email -->
            <div class="form-group">
                <div class="input-icon-wrapper">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" class="form-control" placeholder="Correo electrónico" 
                           value="{{ old('email') }}" required autocomplete="email">
                </div>
                @error('email')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- Password -->
            <div class="form-group">
                <div class="input-icon-wrapper">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" 
                           required autocomplete="new-password">
                    <i class="fas fa-eye password-toggle" onclick="togglePassword('password', this)" style="left: auto; right: 1rem; cursor: pointer; pointer-events: auto;"></i>
                </div>
                @error('password')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- Confirm Password -->
            <div class="form-group">
                <div class="input-icon-wrapper">
                    <i class="fas fa-shield-alt"></i>
                    <input type="password" name="password_confirmation" id="password_confirm" class="form-control" 
                           placeholder="Confirmar contraseña" required autocomplete="new-password">
                    <i class="fas fa-eye password-toggle" onclick="togglePassword('password_confirm', this)" style="left: auto; right: 1rem; cursor: pointer; pointer-events: auto;"></i>
                </div>
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
            
            <button type="submit" class="btn-auth-submit">
                Crear Cuenta
            </button>
        </form>

        <div class="social-login">
            <p class="social-label">O regístrate con</p>
            <div class="social-buttons">
                <button class="btn-social"><i class="fab fa-google"></i></button>
                <button class="btn-social"><i class="fab fa-linkedin-in"></i></button>
                <button class="btn-social"><i class="fab fa-github"></i></button>
            </div>
        </div>
        
        <div class="auth-footer">
            <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión aquí</a></p>
        </div>
    </div>
</div>

<script>
function togglePassword(inputId, icon) {
    const input = document.getElementById(inputId);
    if (input.type === "password") {
        input.type = "text";
        icon.classList.remove('fa-eye');
        icon.classList.add('fa-eye-slash');
    } else {
        input.type = "password";
        icon.classList.remove('fa-eye-slash');
        icon.classList.add('fa-eye');
    }
}
</script>
@endsection