@extends('layouts.web-app')

@section('title', 'Nosotros - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/nosotros/nosotros.css') }}">
@endsection

@section('content')
<div class="nosotros-container">
    <section class="hero-nosotros">
        <h1>Acerca de Future Work</h1>
        <p>Conectando talento con oportunidades desde 2020</p>
    </section>

    <section class="mision">
        <div class="container">
            <div class="content-grid">
                <div class="text-content">
                    <h2>Nuestra Misión</h2>
                    <p>Facilitar la conexión entre profesionales talentosos y empresas que buscan el mejor talento, creando un ecosistema laboral eficiente y transparente.</p>
                </div>
                <div class="image-content">
                    <img src="{{ asset('images/mision.jpg') }}" alt="Nuestra misión">
                </div>
            </div>
        </div>
    </section>

    <section class="valores">
        <div class="container">
            <h2>Nuestros Valores</h2>
            <div class="valores-grid">
                <div class="valor-card">
                    <i class="fas fa-handshake"></i>
                    <h3>Confianza</h3>
                    <p>Construimos relaciones basadas en la transparencia y honestidad.</p>
                </div>
                <div class="valor-card">
                    <i class="fas fa-rocket"></i>
                    <h3>Innovación</h3>
                    <p>Utilizamos tecnología de vanguardia para mejorar la experiencia.</p>
                </div>
                <div class="valor-card">
                    <i class="fas fa-users"></i>
                    <h3>Comunidad</h3>
                    <p>Creamos una comunidad laboral inclusiva y diversa.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="equipo">
        <div class="container">
            <h2>Nuestro Equipo</h2>
            <div class="team-grid">
                <div class="team-member">
                    <img src="{{ asset('images/team-1.jpg') }}" alt="CEO">
                    <h4>María González</h4>
                    <p>CEO & Fundadora</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/team-2.jpg') }}" alt="CTO">
                    <h4>Carlos Ruiz</h4>
                    <p>CTO</p>
                </div>
                <div class="team-member">
                    <img src="{{ asset('images/team-3.jpg') }}" alt="Marketing">
                    <h4>Ana López</h4>
                    <p>Directora de Marketing</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/nosotros/nosotros.js') }}"></script>
@endsection