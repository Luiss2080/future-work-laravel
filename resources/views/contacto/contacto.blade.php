@extends('layouts.web-app')

@section('title', 'Contáctanos - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/contacto/contacto.css') }}">
@endsection

@section('content')

<!-- Hero Section -->
<section class="contact-hero">
    <div class="container hero-content">
        <h1 data-aos="fade-down">Hablemos de Futuro</h1>
        <p data-aos="fade-up" data-aos-delay="100">
            ¿Tienes preguntas o propuestas? Estamos aquí para escucharte y construir juntos.
        </p>
    </div>
</section>

<!-- Content Section -->
<section class="contact-section">
    <div class="container">
        <div class="contact-grid">
            
            <!-- Contact Form -->
            <div class="contact-form-card" data-aos="fade-right">
                <h2 class="form-title">Envíanos un mensaje</h2>
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Ej. Juan Pérez" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="juan@ejemplo.com" required>
                    </div>

                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <select id="subject" name="subject" class="form-control">
                            <option value="">Selecciona un asunto</option>
                            <option value="soporte">Soporte Técnico</option>
                            <option value="ventas">Ventas / Empresas</option>
                            <option value="prensa">Prensa</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Mensaje</label>
                        <textarea id="message" name="message" class="form-control" placeholder="Describe tu consulta..." required></textarea>
                    </div>

                    <button type="submit" class="btn-submit">Enviar Mensaje</button>
                </form>
            </div>

            <!-- Info Sidebar -->
            <div class="info-sidebar">
                <!-- Address -->
                <div class="info-card" data-aos="fade-left">
                    <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                    <h4>Visítanos</h4>
                    <p>Av. Principal 123, Piso 4<br>Edificio Future Tower<br>Madrid, España</p>
                </div>

                <!-- Phone -->
                <div class="info-card" data-aos="fade-left" data-aos-delay="100">
                    <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                    <h4>Llámanos</h4>
                    <p>Atención 24/7</p>
                    <p><a href="tel:+34911234567">+34 91 123 4567</a></p>
                </div>

                <!-- Email -->
                <div class="info-card" data-aos="fade-left" data-aos-delay="200">
                    <div class="info-icon"><i class="fas fa-envelope"></i></div>
                    <h4>Escríbenos</h4>
                    <p>Consultas generales:</p>
                    <p><a href="mailto:hola@futurework.com">hola@futurework.com</a></p>
                </div>

                <!-- Socials -->
                <div class="info-card" data-aos="fade-left" data-aos-delay="300">
                    <div class="info-icon"><i class="fas fa-share-alt"></i></div>
                    <h4>Síguenos</h4>
                    <p>Encuéntranos en redes sociales para las últimas novedades.</p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection