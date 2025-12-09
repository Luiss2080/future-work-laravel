@extends('layouts.web-app')

@section('title', 'Subir CV - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/candidatos/cv.css') }}">
@endsection

@section('content')
<div class="cv-wrapper">
    
    <!-- LEFT COLUMN: INTRO & STATS -->
    <div class="cv-intro">
        <div class="intro-sticky-content">
            <span class="intro-subtitle" data-aos="fade-down">Impulsa tu Carrera</span>
            <h1 class="intro-title" data-aos="fade-up" data-aos-delay="100">
                Sube tu CV y Destaca ante el Mundo
            </h1>
            <p class="intro-text" data-aos="fade-up" data-aos-delay="200">
                Utilizamos Inteligencia Artificial para analizar tu perfil y conectarte con las empresas que buscan exactamente tu talento.
            </p>

            <!-- Stats -->
            <div class="intro-stats" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-card">
                    <span class="stat-number">92%</span>
                    <span class="stat-label">De visibilidad extra</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">48h</span>
                    <span class="stat-label">Tiempo respuesta promedio</span>
                </div>
            </div>

            <!-- Steps -->
            <div class="process-steps">
                <div class="step-item" data-aos="fade-right" data-aos-delay="400">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h4>Completa tu Perfil</h4>
                        <p>Llena los datos básicos para que las empresas te conozcan.</p>
                    </div>
                </div>
                <div class="step-item" data-aos="fade-right" data-aos-delay="500">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h4>Carga tu Archivo</h4>
                        <p>Formatos PDF o Word son ideales para nuestro analizador.</p>
                    </div>
                </div>
                <div class="step-item" data-aos="fade-right" data-aos-delay="600">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h4>Recibe Ofertas</h4>
                        <p>Nuestro sistema te notificará cuando haya match.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT COLUMN: UPLOAD FORM -->
    <div class="cv-form-section">
        <div class="cv-card" data-aos="fade-left">
            <form id="cvForm" class="cv-form" enctype="multipart/form-data">
                @csrf
                
                <!-- Section 1: Personal Info -->
                <h3 class="section-title"><i class="fas fa-user-circle"></i> Información Personal</h3>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="nombre">Nombre Completo</label>
                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Ej. Ana García" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="ana@ejemplo.com" required>
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono" class="form-control" placeholder="+34 600 000 000" required>
                    </div>
                    <div class="form-group">
                        <label for="ciudad">Ciudad de Residencia</label>
                        <input type="text" id="ciudad" name="ciudad" class="form-control" placeholder="Ej. Madrid" required>
                    </div>
                </div>

                <!-- Section 2: Professional Info -->
                <h3 class="section-title"><i class="fas fa-briefcase"></i> Perfil Profesional</h3>
                <div class="form-grid">
                    <div class="form-group">
                        <label for="profesion">Área Profesional</label>
                        <select id="profesion" name="profesion" class="form-control" required>
                            <option value="">Selecciona tu área</option>
                            <option value="tecnologia">Tecnología / IT</option>
                            <option value="marketing">Marketing y Diseño</option>
                            <option value="ventas">Ventas y Negocios</option>
                            <option value="rrhh">Recursos Humanos</option>
                            <option value="finanzas">Finanzas y Legal</option>
                            <option value="otros">Otros</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="experiencia">Años de Experiencia</label>
                        <select id="experiencia" name="experiencia" class="form-control" required>
                            <option value="junior">0 - 2 años (Junior)</option>
                            <option value="mid">3 - 5 años (Mid)</option>
                            <option value="senior">5 - 10 años (Senior)</option>
                            <option value="expert">Mas de 10 años (Expert)</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="descripcion">Breve Descripción / Bio</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="3" placeholder="Resume tu experiencia clave..."></textarea>
                </div>

                <!-- Section 3: Upload -->
                <h3 class="section-title"><i class="fas fa-cloud-upload-alt"></i> Tu Currículum</h3>
                
                <div class="file-upload-area" id="dropzone">
                    <input type="file" id="cvFile" name="cv_file" accept=".pdf,.doc,.docx" hidden>
                    <div class="upload-icon"><i class="fas fa-file-upload"></i></div>
                    <div class="upload-text">
                        <h4>Arrastra y suelta tu CV aquí</h4>
                        <p>o haz clic para explorar archivos (PDF, DOCX - Máx 5MB)</p>
                    </div>
                </div>
                <p id="fileNameDisplay" style="text-align: center; color: var(--primary-neon); margin-top: -10px; display: none;"></p>

                <!-- Checkboxes -->
                <div class="form-group" style="margin-top: 1.5rem;">
                    <label class="checkbox-group">
                        <input type="checkbox" name="terms" required>
                        <span>Acepto la Política de Privacidad y el tratamiento de mis datos.</span>
                    </label>
                </div>

                <button type="submit" class="btn-submit-cv">
                    ENVIAR MI CV AHORA <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
    // Simple script to handle file selection display
    const fileInput = document.getElementById('cvFile');
    const dropzone = document.getElementById('dropzone');
    const fileNameDisplay = document.getElementById('fileNameDisplay');

    dropzone.addEventListener('click', () => fileInput.click());

    fileInput.addEventListener('change', (e) => {
        if (e.target.files.length > 0) {
            fileNameDisplay.textContent = 'Archivo seleccionado: ' + e.target.files[0].name;
            fileNameDisplay.style.display = 'block';
            dropzone.style.borderColor = 'var(--primary-neon)';
        }
    });
</script>
@endsection