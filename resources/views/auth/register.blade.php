@extends('layouts.web-app')

@section('title', 'Registro - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/auth/register.css') }}">
@endsection

@section('content')
<div class="register-wrapper">
    
    <!-- LEFT SIDE: INTRO CONTENT (New) -->
    <div class="register-intro">
        <div class="intro-content">
            <span class="intro-subtitle" data-aos="fade-down">Únete a la Revolución</span>
            <h1 class="intro-title" data-aos="fade-up" data-aos-delay="100">
                Tu Futuro Profesional Comienza Aquí
            </h1>
            <p class="intro-text" data-aos="fade-up" data-aos-delay="200">
                Crea tu cuenta gratuita y accede a miles de oportunidades laborales diseñadas para potenciar tu carrera.
            </p>

            <div class="benefits-list">
                <!-- Benefit 1 -->
                <div class="benefit-item" data-aos="fade-right" data-aos-delay="300">
                    <div class="benefit-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="benefit-text">
                        <h4>Oportunidades Globales</h4>
                        <p>Accede a ofertas de empresas líderes en tecnología alrededor del mundo.</p>
                    </div>
                </div>

                <!-- Benefit 2 -->
                <div class="benefit-item" data-aos="fade-right" data-aos-delay="400">
                    <div class="benefit-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="benefit-text">
                        <h4>Matching con IA</h4>
                        <p>Nuestro algoritmo encuentra las ofertas que mejor se adaptan a tu perfil.</p>
                    </div>
                </div>

                <!-- Benefit 3 -->
                <div class="benefit-item" data-aos="fade-right" data-aos-delay="500">
                    <div class="benefit-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="benefit-text">
                        <h4>Recursos Exclusivos</h4>
                        <p>Accede a guías, plantillas y webinars para mejorar tu perfil profesional.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT SIDE: FORM (Existing, wrapped) -->
    <div class="register-form-section">
        <div class="auth-card" data-aos="fade-left">
            <div class="auth-header">
                <h2>Crear Cuenta</h2>
                <p>Completa tus datos para comenzar</p>
            </div>

            <!-- Validation Errors -->
            @if($errors->any())
                <div class="alert alert-danger mb-4 p-3 rounded bg-red-900/50 border border-red-500 text-red-200">
                    <ul class="mb-0 ps-3">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
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
                </div>
                
                <!-- Email -->
                <div class="form-group">
                    <div class="input-icon-wrapper">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" class="form-control" placeholder="Correo electrónico" 
                               value="{{ old('email') }}" required autocomplete="email">
                    </div>
                </div>
                
                <!-- Password -->
                <div class="form-group">
                    <div class="input-icon-wrapper">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" 
                               required autocomplete="new-password">
                        <i class="fas fa-eye password-toggle" onclick="togglePassword('password', this)"></i>
                    </div>
                </div>
                
                <!-- Confirm Password -->
                <div class="form-group">
                    <div class="input-icon-wrapper">
                        <i class="fas fa-shield-alt"></i>
                        <input type="password" name="password_confirmation" id="password_confirm" class="form-control" 
                               placeholder="Confirmar contraseña" required autocomplete="new-password">
                        <i class="fas fa-eye password-toggle" onclick="togglePassword('password_confirm', this)"></i>
                    </div>
                </div>
                
                <div class="form-group">
                    <div class="form-check">
                        <input type="checkbox" name="terms" class="form-check-input" id="terms" required>
                        <label class="form-check-label" for="terms">
                            Acepto los <a href="#" target="_blank">términos y condiciones</a>
                        </label>
                    </div>
                </div>
                
                <button type="submit" class="btn-auth-submit">
                    Registrarme
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
                <p>¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
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