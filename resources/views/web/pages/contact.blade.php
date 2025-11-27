@extends('layouts.web.app')

@section('title', 'Contacto - Future Work')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/contact.css') }}">
@endpush

@section('content')
<div class="contact-header">
    <div class="container">
        <h1><i class="fas fa-envelope me-3"></i>Contactanos</h1>
        <p>¿Tienes preguntas? Estamos aquí para ayudarte</p>
    </div>
</div>

<div class="contact-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form class="contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Nombre completo" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Asunto" required>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" rows="5" placeholder="Mensaje" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane me-2"></i>
                        Enviar Mensaje
                    </button>
                </form>
            </div>
            <div class="col-lg-4">
                <div class="contact-info">
                    <h3>Información de Contacto</h3>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@futurework.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+52 55 1234 5678</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Ciudad de México, México</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('assets/js/web/contact.js') }}"></script>
@endpush