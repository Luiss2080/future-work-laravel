@extends('layouts.web-app')

@section('title', 'Ubicación - Future Work')
@section('description', 'Encuentra nuestra ubicación física y ponte en contacto con nosotros. Future Work tiene oficinas en las principales ciudades.')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/ubicacion/ubicacion.css') }}">
@endsection

@section('content')
<div class="ubicacion-container">
    <!-- Hero Ubicación -->
    <section class="hero-ubicacion">
        <div class="hero-content">
            <h1>Nuestra Ubicación</h1>
            <p>Encuéntranos en nuestras oficinas principales</p>
        </div>
    </section>

    <!-- Oficinas Grid -->
    <section class="oficinas-section">
        <div class="container">
            <div class="oficinas-grid">
                
                <!-- Oficina Principal -->
                <div class="oficina-card principal">
                    <div class="oficina-header">
                        <h3>Oficina Principal</h3>
                        <span class="badge-principal">Principal</span>
                    </div>
                    <div class="oficina-info">
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Dirección:</strong>
                                <p>Av. Principal 123, Centro<br>Madrid, España 28001</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Teléfono:</strong>
                                <p>+34 91 123 4567</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Horarios:</strong>
                                <p>Lun - Vie: 9:00 - 18:00<br>Sáb: 9:00 - 14:00</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email:</strong>
                                <p>madrid@futurework.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="oficina-mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48383.96628522796!2d-3.7490200000000004!3d40.4637!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228e23705b53f%3A0xb05c7f0f214b2e10!2sMadrid%2C%20Spain!5e0!3m2!1sen!2sus!4v1639582901234!5m2!1sen!2sus" 
                                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- Oficina Barcelona -->
                <div class="oficina-card">
                    <div class="oficina-header">
                        <h3>Barcelona</h3>
                    </div>
                    <div class="oficina-info">
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Dirección:</strong>
                                <p>Passeig de Gràcia 85<br>Barcelona, España 08008</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Teléfono:</strong>
                                <p>+34 93 567 8901</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Horarios:</strong>
                                <p>Lun - Vie: 9:00 - 18:00</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email:</strong>
                                <p>barcelona@futurework.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="oficina-mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48383.96628522796!2d2.1734!3d41.3851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a2bd5eb7f6b1%3A0x4a5c9f0b3e2d8c7a!2sBarcelona%2C%20Spain!5e0!3m2!1sen!2sus!4v1639582901234!5m2!1sen!2sus" 
                                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

                <!-- Oficina Valencia -->
                <div class="oficina-card">
                    <div class="oficina-header">
                        <h3>Valencia</h3>
                    </div>
                    <div class="oficina-info">
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Dirección:</strong>
                                <p>Calle Colón 56<br>Valencia, España 46004</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <div>
                                <strong>Teléfono:</strong>
                                <p>+34 96 234 5678</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-clock"></i>
                            <div>
                                <strong>Horarios:</strong>
                                <p>Lun - Vie: 9:00 - 17:00</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <div>
                                <strong>Email:</strong>
                                <p>valencia@futurework.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="oficina-mapa">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48383.96628522796!2d-0.3763!3d39.4699!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd604f49a4d4b5b9%3A0x5b5f9e3a4c2d8b7e!2sValencia%2C%20Spain!5e0!3m2!1sen!2sus!4v1639582901234!5m2!1sen!2sus" 
                                width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Información de Contacto General -->
    <section class="contacto-general">
        <div class="container">
            <div class="contacto-grid">
                <div class="contacto-item">
                    <div class="icono">
                        <i class="fas fa-phone-alt"></i>
                    </div>
                    <h4>Línea Nacional</h4>
                    <p>900 123 456</p>
                    <span>Llamada gratuita</span>
                </div>
                
                <div class="contacto-item">
                    <div class="icono">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>Email General</h4>
                    <p>info@futurework.com</p>
                    <span>Respuesta en 24h</span>
                </div>
                
                <div class="contacto-item">
                    <div class="icono">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h4>Atención al Cliente</h4>
                    <p>Lun - Dom: 8:00 - 22:00</p>
                    <span>Soporte continuo</span>
                </div>
                
                <div class="contacto-item">
                    <div class="icono">
                        <i class="fab fa-whatsapp"></i>
                    </div>
                    <h4>WhatsApp</h4>
                    <p>+34 600 123 456</p>
                    <span>Chat directo</span>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="cta-visita">
        <div class="container">
            <div class="cta-content">
                <h2>¿Quieres visitarnos?</h2>
                <p>Te esperamos en cualquiera de nuestras oficinas. Programa tu cita.</p>
                <a href="{{ route('contacto') }}" class="btn btn-primary">
                    Agendar Cita
                    <i class="fas fa-calendar-alt"></i>
                </a>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/ubicacion/ubicacion.js') }}"></script>
@endsection