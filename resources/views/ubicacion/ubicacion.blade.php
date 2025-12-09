@extends('layouts.web-app')

@section('title', 'Nuestra Ubicación - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/ubicacion/ubicacion.css') }}">
@endsection

@section('content')

<!-- Hero Section -->
<section class="location-hero">
    <div class="container hero-content">
        <h1 data-aos="fade-down">Nuestras Sedes Globales</h1>
        <p data-aos="fade-up" data-aos-delay="100">
            Conectamos talento desde los centros tecnológicos más innovadores del mundo.
            Visítanos en nuestras oficinas.
        </p>
    </div>
</section>

<!-- Offices Cards -->
<section class="offices-section">
    <div class="container">
        <div class="offices-grid">
            <!-- Office 1: Madrid -->
            <div class="office-card" data-aos="fade-up">
                <div class="office-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1577412647305-991150c7d163?q=80&w=2070&auto=format&fit=crop" alt="Madrid Office">
                    <span class="office-badge">Sede Central</span>
                </div>
                <div class="office-content">
                    <h3>Madrid, España</h3>
                    <div class="office-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Av. Principal 123, Centro<br>Madrid, 28001</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span>+34 91 123 4567</span>
                    </div>
                    <div class="office-detail">
                        <i class="far fa-clock"></i>
                        <span>Lun - Vie: 9:00 - 18:00</span>
                    </div>
                    <a href="#" class="btn-map">Ver en Google Maps</a>
                </div>
            </div>

            <!-- Office 2: Barcelona -->
            <div class="office-card" data-aos="fade-up" data-aos-delay="100">
                <div class="office-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1558642452-9d2a7deb7f62?q=80&w=2070&auto=format&fit=crop" alt="Barcelona Office">
                    <span class="office-badge">Tech Hub</span>
                </div>
                <div class="office-content">
                    <h3>Barcelona, España</h3>
                    <div class="office-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Passeig de Gràcia 85<br>Barcelona, 08008</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span>+34 93 567 8901</span>
                    </div>
                    <div class="office-detail">
                        <i class="far fa-clock"></i>
                        <span>Lun - Vie: 9:00 - 18:00</span>
                    </div>
                    <a href="#" class="btn-map">Ver en Google Maps</a>
                </div>
            </div>

            <!-- Office 3: Valencia -->
            <div class="office-card" data-aos="fade-up" data-aos-delay="200">
                <div class="office-img-wrapper">
                    <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?q=80&w=2070&auto=format&fit=crop" alt="Valencia Office">
                    <span class="office-badge">Innovation Lab</span>
                </div>
                <div class="office-content">
                    <h3>Valencia, España</h3>
                    <div class="office-detail">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Calle Colón 56<br>Valencia, 46004</span>
                    </div>
                    <div class="office-detail">
                        <i class="fas fa-phone-alt"></i>
                        <span>+34 96 234 5678</span>
                    </div>
                    <div class="office-detail">
                        <i class="far fa-clock"></i>
                        <span>Lun - Vie: 9:00 - 17:00</span>
                    </div>
                    <a href="#" class="btn-map">Ver en Google Maps</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Map Embed -->
<section class="world-map-section" data-aos="zoom-in">
    <div class="container">
        <div class="map-container">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d194348.1398105085!2d-3.819962291244086!3d40.4378696956627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422997800a3c81%3A0xc436dec1618c2269!2sMadrid%2C%20Spain!5e0!3m2!1sen!2sus!4v1709400000000!5m2!1sen!2sus" 
                allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>

@endsection