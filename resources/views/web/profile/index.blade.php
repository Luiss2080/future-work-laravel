@extends('layouts.app')

@section('title', 'Mi Perfil - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/web/profile/index.css') }}">
@endsection

@section('content')
<div class="profile-container">
    <div class="profile-header">
        <div class="profile-avatar">
            <img src="{{ asset('images/default-avatar.jpg') }}" alt="Avatar" class="avatar-img">
            <button class="change-avatar-btn">Cambiar foto</button>
        </div>
        <div class="profile-info">
            <h1 class="profile-name">{{ auth()->user()->name ?? 'Nombre Usuario' }}</h1>
            <p class="profile-email">{{ auth()->user()->email ?? 'usuario@ejemplo.com' }}</p>
            <span class="profile-type">Candidato</span>
        </div>
        <div class="profile-actions">
            <button class="btn btn-primary">Editar Perfil</button>
            <button class="btn btn-outline">Descargar CV</button>
        </div>
    </div>

    <div class="profile-content">
        <div class="profile-sidebar">
            <nav class="profile-nav">
                <a href="#personal" class="nav-item active">Información Personal</a>
                <a href="#experience" class="nav-item">Experiencia Laboral</a>
                <a href="#education" class="nav-item">Educación</a>
                <a href="#skills" class="nav-item">Habilidades</a>
                <a href="#settings" class="nav-item">Configuración</a>
            </nav>
        </div>

        <div class="profile-main">
            <section id="personal" class="profile-section active">
                <h2>Información Personal</h2>
                <form class="profile-form">
                    <div class="form-group">
                        <label for="full-name">Nombre completo</label>
                        <input type="text" id="full-name" name="full_name" value="Juan Pérez">
                    </div>
                    <div class="form-group">
                        <label for="phone">Teléfono</label>
                        <input type="tel" id="phone" name="phone" value="+34 600 123 456">
                    </div>
                    <div class="form-group">
                        <label for="location">Ubicación</label>
                        <input type="text" id="location" name="location" value="Madrid, España">
                    </div>
                    <div class="form-group">
                        <label for="bio">Descripción profesional</label>
                        <textarea id="bio" name="bio" rows="4">Desarrollador Full Stack con 5 años de experiencia...</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Guardar cambios</button>
                </form>
            </section>

            <section id="experience" class="profile-section">
                <h2>Experiencia Laboral</h2>
                <div class="experience-list">
                    <div class="experience-item">
                        <h3>Desarrollador Senior</h3>
                        <p class="company">TechCorp S.A.</p>
                        <p class="period">2020 - Actualidad</p>
                        <p class="description">Desarrollo y mantenimiento de aplicaciones web...</p>
                    </div>
                </div>
                <button class="btn btn-outline">Añadir experiencia</button>
            </section>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/web/profile/index.js') }}"></script>
@endsection