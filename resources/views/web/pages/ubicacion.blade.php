@extends('layouts.web.app')

@section('title', 'Ubicación - Future Work')
@section('description', 'Encuentra nuestra oficina y conoce cómo llegar a Future Work.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/pages.css') }}">
@endpush

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="page-title">Nuestra Ubicación</h1>
                <p class="page-subtitle">Encuéntranos y visítanos</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item">
                            <a href="{{ route('home') }}">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Ubicación</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<!-- Location Content -->
<section class="location-section py-5">
    <div class="container">
        <div class="row g-5">
            <!-- Map -->
            <div class="col-lg-8">
                <div class="map-container">
                    <div class="map-placeholder">
                        <i class="fas fa-map-marker-alt text-primary" style="font-size: 3rem;"></i>
                        <p class="mt-3">Mapa interactivo próximamente</p>
                        <p class="text-muted">Aquí se mostrará la ubicación exacta de nuestras oficinas</p>
                    </div>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-4">
                <div class="contact-info">
                    <h3 class="mb-4">Información de Contacto</h3>
                    
                    <div class="contact-item mb-4">
                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                        <div>
                            <h5>Dirección</h5>
                            <p class="text-muted mb-0">
                                Av. Principal #123<br>
                                Colonia Centro<br>
                                Ciudad, Estado CP 12345
                            </p>
                        </div>
                    </div>

                    <div class="contact-item mb-4">
                        <i class="fas fa-phone text-primary me-3"></i>
                        <div>
                            <h5>Teléfono</h5>
                            <p class="text-muted mb-0">
                                <a href="tel:+525555551234" class="text-decoration-none">
                                    +52 (555) 555-1234
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-item mb-4">
                        <i class="fas fa-envelope text-primary me-3"></i>
                        <div>
                            <h5>Email</h5>
                            <p class="text-muted mb-0">
                                <a href="mailto:info@futurework.com" class="text-decoration-none">
                                    info@futurework.com
                                </a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-item mb-4">
                        <i class="fas fa-clock text-primary me-3"></i>
                        <div>
                            <h5>Horarios de Atención</h5>
                            <p class="text-muted mb-0">
                                Lunes a Viernes: 9:00 AM - 6:00 PM<br>
                                Sábados: 9:00 AM - 2:00 PM<br>
                                Domingos: Cerrado
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Directions -->
        <div class="row mt-5">
            <div class="col-12">
                <div class="directions-card">
                    <h3 class="mb-4">¿Cómo llegar?</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <h5><i class="fas fa-car text-primary me-2"></i>En Automóvil</h5>
                            <p class="text-muted">
                                Desde el centro de la ciudad, tomar la Av. Principal hacia el norte. 
                                Estacionamiento disponible en el edificio.
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h5><i class="fas fa-bus text-primary me-2"></i>Transporte Público</h5>
                            <p class="text-muted">
                                Líneas de autobús: 12, 25, 47. 
                                Parada más cercana: "Centro Comercial Plaza Norte"
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    // Aquí se puede agregar código para el mapa interactivo
    console.log('Ubicación cargada');
</script>
@endpush