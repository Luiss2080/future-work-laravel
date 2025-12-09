@extends('layouts.web-app')

@section('title', 'Iniciar Sesión - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/auth/login.css') }}">
@endsection

@section('content')
<div class="login-wrapper">

    <!-- LEFT SIDE: INTRO CONTENT -->
    <div class="login-intro">
        <div class="intro-content">
            <span class="intro-subtitle" data-aos="fade-down">Bienvenido de Nuevo</span>
            <h1 class="intro-title" data-aos="fade-up" data-aos-delay="100">
                Tu Próxima Gran <span>Oportunidad</span> Te Espera
            </h1>
            <p class="intro-text" data-aos="fade-up" data-aos-delay="200">
                Accede a tu panel de control personalizado y continúa tu búsqueda hacia el éxito profesional.
            </p>

            <div class="login-features">
                <div class="feature-item" data-aos="fade-right" data-aos-delay="300">
                    <div class="feature-icon"><i class="fas fa-chart-line"></i></div>
                    <div class="feature-text">
                        <h4>Seguimiento en Vivo</h4>
                        <p>Revisa el estado de tus postulaciones al instante.</p>
                    </div>
                </div>

                <div class="feature-item" data-aos="fade-right" data-aos-delay="400">
                    <div class="feature-icon"><i class="fas fa-bell"></i></div>
                    <div class="feature-text">
                        <h4>Alerta de Empleos</h4>
                        <p>Notificaciones personalizadas según tus preferencias.</p>
                    </div>
                </div>

                <div class="feature-item" data-aos="fade-right" data-aos-delay="500">
                    <div class="feature-icon"><i class="fas fa-lock"></i></div>
                    <div class="feature-text">
                        <h4>Acceso Seguro</h4>
                        <p>Tus datos protegidos con encriptación de grado bancario.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE: FORM -->
    <div class="login-form-section">
        <div class="auth-card" data-aos="zoom-in">
            <div class="auth-header">
                <div class="portal-badge">
                    <i class="fas fa-shield-alt"></i> Portal Seguro
                </div>
                <h2>Iniciar Sesión</h2>
                <p>Ingresa tus credenciales para continuar</p>
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
                
                <!-- Options -->
                <div class="auth-options">
                    <label class="form-check">
                        <input type="checkbox" name="remember" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>
                        <span>Recuérdame</span>
                    </label>
                    
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="forgot-link">¿Olvidaste tu contraseña?</a>
                    @endif
                </div>
                
                <button type="submit" class="btn-auth-submit">
                    Ingresar
                </button>
            </form>

            <div class="social-login">
                <p class="social-label">O continúa con</p>
                <div class="social-buttons">
                    <button class="btn-social"><i class="fab fa-google"></i></button>
                    <button class="btn-social"><i class="fab fa-linkedin-in"></i></button>
                    <button class="btn-social"><i class="fab fa-github"></i></button>
                </div>
            </div>
            
            <div class="auth-footer">
                <p>¿Aún no tienes cuenta? <a href="{{ route('register') }}">Regístrate gratis</a></p>
            </div>
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