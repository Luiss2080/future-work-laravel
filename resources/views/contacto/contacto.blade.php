@extends('layouts.web-app')

@section('title', 'Contacto - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/contacto/contacto.css') }}">
@endsection

@section('content')
<div class="contacto-container">
    <section class="hero-contacto">
        <h1>Contáctanos</h1>
        <p>Estamos aquí para ayudarte a encontrar tu próxima oportunidad</p>
    </section>

    <div class="contacto-content">
        <div class="formulario-contacto">
            <h2>Envíanos un mensaje</h2>
            <form id="form-contacto">
                <div class="form-grupo">
                    <label for="nombre">Nombre completo *</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                
                <div class="form-grupo">
                    <label for="email">Email *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-grupo">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono">
                </div>
                
                <div class="form-grupo">
                    <label for="asunto">Asunto *</label>
                    <select id="asunto" name="asunto" required>
                        <option value="">Selecciona un asunto</option>
                        <option value="candidato">Soy candidato</option>
                        <option value="empresa">Soy empresa</option>
                        <option value="soporte">Soporte técnico</option>
                        <option value="otro">Otro</option>
                    </select>
                </div>
                
                <div class="form-grupo">
                    <label for="mensaje">Mensaje *</label>
                    <textarea id="mensaje" name="mensaje" rows="5" required placeholder="Describe tu consulta..."></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Enviar mensaje</button>
            </form>
        </div>

        <div class="info-contacto">
            <h2>Información de contacto</h2>
            
            <div class="contacto-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <h4>Dirección</h4>
                    <p>Calle Gran Vía 123<br>28013 Madrid, España</p>
                </div>
            </div>
            
            <div class="contacto-item">
                <i class="fas fa-phone"></i>
                <div>
                    <h4>Teléfono</h4>
                    <p>+34 900 123 456</p>
                </div>
            </div>
            
            <div class="contacto-item">
                <i class="fas fa-envelope"></i>
                <div>
                    <h4>Email</h4>
                    <p>info@futurework.es</p>
                </div>
            </div>
            
            <div class="contacto-item">
                <i class="fas fa-clock"></i>
                <div>
                    <h4>Horario</h4>
                    <p>Lunes - Viernes<br>9:00 - 18:00</p>
                </div>
            </div>

            <div class="redes-sociales">
                <h4>Síguenos</h4>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="mapa-ubicacion">
        <h2>Nuestra ubicación</h2>
        <div class="mapa-container">
            <!-- Aquí iría el mapa de Google Maps o similar -->
            <div class="mapa-placeholder">
                <i class="fas fa-map"></i>
                <p>Mapa interactivo</p>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/contacto/contacto.js') }}"></script>
@endsection