@extends('layouts.web.app')

@section('title', 'Subir CV - Future Work')
@section('description', 'Sube tu currículum vitae y permite que las empresas te encuentren fácilmente.')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/pages-common.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/web/candidates.css') }}">
@endpush

@section('content')
<!-- Hero Section -->
<section class="page-hero">
    <div class="container">
        <div class="hero-content text-center">
            <h1 class="page-title">
                <i class="fas fa-file-upload text-primary me-3"></i>
                Subir tu CV
            </h1>
            <p class="page-subtitle">
                Comparte tu currículum vitae con miles de empresas y permite que te encuentren
            </p>
        </div>
    </div>
</section>

<!-- Upload Section -->
<section class="upload-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="upload-card">
                    <div class="upload-header text-center mb-4">
                        <i class="fas fa-cloud-upload-alt display-4 text-primary mb-3"></i>
                        <h3>Carga tu Currículum Vitae</h3>
                        <p class="text-muted">Formatos aceptados: PDF, DOC, DOCX (Máximo 5MB)</p>
                    </div>
                    
                    <form class="upload-form" enctype="multipart/form-data">
                        @csrf
                        <div class="upload-dropzone" id="dropzone">
                            <div class="upload-icon">
                                <i class="fas fa-file-pdf"></i>
                            </div>
                            <p class="upload-text">
                                Arrastra tu archivo aquí o <button type="button" class="btn-link">selecciona un archivo</button>
                            </p>
                            <input type="file" id="cv-file" name="cv" accept=".pdf,.doc,.docx" hidden>
                        </div>
                        
                        <div class="form-section mt-4">
                            <h4>Información Adicional</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="nombre_completo">Nombre Completo</label>
                                        <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="telefono">Teléfono</label>
                                        <input type="tel" class="form-control" id="telefono" name="telefono">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="profesion">Profesión Principal</label>
                                        <select class="form-control" id="profesion" name="profesion">
                                            <option value="">Selecciona tu profesión</option>
                                            <option value="albanil">Albañil</option>
                                            <option value="arquitecto">Arquitecto</option>
                                            <option value="carpintero">Carpintero</option>
                                            <option value="electricista">Electricista</option>
                                            <option value="ingeniero">Ingeniero Civil</option>
                                            <option value="plomero">Plomero</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="experiencia">Años de Experiencia</label>
                                        <select class="form-control" id="experiencia" name="experiencia">
                                            <option value="">Selecciona</option>
                                            <option value="0-1">Sin experiencia / Menos de 1 año</option>
                                            <option value="1-3">1 - 3 años</option>
                                            <option value="3-5">3 - 5 años</option>
                                            <option value="5-10">5 - 10 años</option>
                                            <option value="10+">Más de 10 años</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary btn-lg">
                                <i class="fas fa-upload me-2"></i>
                                Subir CV
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h3 class="mb-5">¿Por qué subir tu CV con nosotros?</h3>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-eye display-5 text-primary mb-3"></i>
                    <h5>Mayor Visibilidad</h5>
                    <p>Miles de empresas buscan talento como el tuyo</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-shield-alt display-5 text-primary mb-3"></i>
                    <h5>Seguridad Garantizada</h5>
                    <p>Tu información personal está protegida y cifrada</p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="benefit-card">
                    <i class="fas fa-bell display-5 text-primary mb-3"></i>
                    <h5>Notificaciones</h5>
                    <p>Te avisamos cuando hay ofertas que coinciden con tu perfil</p>
                </div>
            </div>
        </div>
        
        <!-- Navigation Section -->
        <div class="text-center mt-5">
            <h4>¿Necesitas ayuda con tu carrera?</h4>
            <p class="mb-4">Explora nuestros consejos y recursos para profesionales</p>
            <a href="{{ route('consejos-carrera') }}" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-lightbulb me-2"></i>
                Consejos de Carrera
            </a>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dropzone = document.getElementById('dropzone');
    const fileInput = document.getElementById('cv-file');
    
    dropzone.addEventListener('click', () => fileInput.click());
    
    dropzone.addEventListener('dragover', (e) => {
        e.preventDefault();
        dropzone.classList.add('drag-over');
    });
    
    dropzone.addEventListener('dragleave', () => {
        dropzone.classList.remove('drag-over');
    });
    
    dropzone.addEventListener('drop', (e) => {
        e.preventDefault();
        dropzone.classList.remove('drag-over');
        const files = e.dataTransfer.files;
        if (files.length > 0) {
            fileInput.files = files;
            updateFileDisplay(files[0]);
        }
    });
    
    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            updateFileDisplay(e.target.files[0]);
        }
    });
    
    function updateFileDisplay(file) {
        const uploadText = dropzone.querySelector('.upload-text');
        const uploadIcon = dropzone.querySelector('.upload-icon i');
        
        uploadText.innerHTML = `<strong>${file.name}</strong> (${(file.size / 1024 / 1024).toFixed(2)} MB)`;
        uploadIcon.className = 'fas fa-file-check text-success';
    }
});
</script>
@endpush