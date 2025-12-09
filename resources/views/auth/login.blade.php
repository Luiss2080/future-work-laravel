@extends('layouts.web-app')

@section('title', 'Iniciar Sesión - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/auth/login.css') }}">
@endsection

@section('content')
<div class="auth-container">
    <div class="auth-card">
        <div class="auth-header">
            <div class="security-badge">
                <i class="fas fa-shield-alt"></i> Portal Seguro
            </div>
            <h2>Bienvenido de nuevo</h2>
            <p>Ingresa a tu cuenta para continuar</p>
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
            
            <!-- Remember & Forgot -->
            <div class="auth-options">
                <div class="form-check">
                    <input type="checkbox" name="remember" id="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Recuérdame</label>
                </div>
                
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="forgot-link">¿Olvidaste tu contraseña?</a>
                @endif
            </div>
            
            <button type="submit" class="btn-auth-submit">
                INICIAR SESIÓN
            </button>
        </form>

        <div class="auth-divider">
            <span>O continúa con</span>
        </div>

        <div class="social-buttons">
            <button class="btn-social" title="Google"><i class="fab fa-google"></i></button>
            <button class="btn-social" title="LinkedIn"><i class="fab fa-linkedin-in"></i></button>
            <button class="btn-social" title="GitHub"><i class="fab fa-github"></i></button>
        </div>
        
        <div class="auth-footer">
            <p>¿Aún no tienes cuenta? <a href="{{ route('register') }}">Regístrate gratis</a></p>
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