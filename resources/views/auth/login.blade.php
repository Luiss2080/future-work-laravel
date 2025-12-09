@extends('layouts.web-app')

@section('title', 'Iniciar Sesión - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/auth/login.css') }}">
@endsection

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <h2><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</h2>
            <p>Bienvenido de nuevo a Future Work</p>
        </div>
        
        <form class="auth-form" action="{{ route('login') }}" method="POST">
            @csrf
            
            <!-- Email -->
            <div class="form-group">
                <div class="input-icon-wrapper">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" class="form-control" placeholder="Correo electrónico" 
                           value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                           required autocomplete="current-password">
                    <i class="fas fa-eye password-toggle" onclick="togglePassword('password', this)"></i>
                </div>
                @error('password')
                    <div class="text-danger small mt-1">{{ $message }}</div>
                @enderror
            </div>
            
            <!-- Remember Me & Forgot Password -->
            <div class="auth-options">
                <div class="form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Recuérdame</label>
                </div>
                
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                @endif
            </div>
            
            <button type="submit" class="btn-auth-submit">
                Ingresar
            </button>
        </form>

        <div class="social-login">
            <p class="social-label">O inicia sesión con</p>
            <div class="social-buttons">
                <button class="btn-social"><i class="fab fa-google"></i></button>
                <button class="btn-social"><i class="fab fa-linkedin-in"></i></button>
                <button class="btn-social"><i class="fab fa-github"></i></button>
            </div>
        </div>
        
        <div class="auth-footer">
            <p>¿No tienes cuenta? <a href="{{ route('register') }}">Regístrate aquí</a></p>
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