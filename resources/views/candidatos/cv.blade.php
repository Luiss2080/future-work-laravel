@extends('layouts.web-app')

@section('title', 'Subir CV - Future Work')
@section('description', 'Sube tu CV y haz que las mejores empresas te encuentren. Mejora tu perfil profesional con Future Work.')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/candidatos/cv.css') }}">
@endsection

@section('content')
<div class="cv-container">
    <!-- Hero CV -->
    <section class="hero-cv">
        <div class="hero-content">
            <h1>Sube tu CV</h1>
            <p>Haz que las mejores empresas te encuentren</p>
        </div>
    </section>

    <!-- Formulario CV -->
    <section class="cv-upload-section">
        <div class="container">
            <div class="upload-grid">
                
                <!-- Formulario Principal -->
                <div class="upload-form-card">
                    <form id="cvForm" class="cv-form" enctype="multipart/form-data">
                        <h3>Información Personal</h3>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nombre">Nombre Completo *</label>
                                <input type="text" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label for="telefono">Teléfono *</label>
                                <input type="tel" id="telefono" name="telefono" required>
                            </div>
                            <div class="form-group">
                                <label for="ciudad">Ciudad *</label>
                                <input type="text" id="ciudad" name="ciudad" required>
                            </div>
                        </div>

                        <h3>Perfil Profesional</h3>
                        
                        <div class="form-group">
                            <label for="profesion">Profesión/Área *</label>
                            <select id="profesion" name="profesion" required>
                                <option value="">Selecciona tu área</option>
                                <option value="construccion">Construcción</option>
                                <option value="arquitectura">Arquitectura</option>
                                <option value="ingenieria">Ingeniería</option>
                                <option value="electricidad">Electricidad</option>
                                <option value="plomeria">Plomería</option>
                                <option value="carpinteria">Carpintería</option>
                                <option value="jardineria">Jardinería</option>
                                <option value="diseno">Diseño</option>
                                <option value="otros">Otros</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="experiencia">Años de Experiencia *</label>
                            <select id="experiencia" name="experiencia" required>
                                <option value="">Selecciona</option>
                                <option value="0-1">0-1 años</option>
                                <option value="2-3">2-3 años</option>
                                <option value="4-5">4-5 años</option>
                                <option value="6-10">6-10 años</option>
                                <option value="10+">Más de 10 años</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="salario">Expectativa Salarial (€/mes)</label>
                            <input type="number" id="salario" name="salario" min="800" max="10000" step="50">
                        </div>

                        <h3>Subir CV</h3>
                        
                        <div class="file-upload-area" id="fileUploadArea">
                            <input type="file" id="cvFile" name="cv_file" accept=".pdf,.doc,.docx" hidden>
                            <div class="upload-content">
                                <i class="fas fa-cloud-upload-alt"></i>
                                <h4>Arrastra tu CV aquí o haz clic para seleccionar</h4>
                                <p>Formatos aceptados: PDF, DOC, DOCX (máx. 5MB)</p>
                            </div>
                        </div>
                        
                        <div class="file-preview" id="filePreview" style="display: none;">
                            <div class="file-info">
                                <i class="fas fa-file-pdf"></i>
                                <div class="file-details">
                                    <span class="file-name"></span>
                                    <span class="file-size"></span>
                                </div>
                                <button type="button" class="remove-file" id="removeFile">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>

                        <h3>Información Adicional</h3>
                        
                        <div class="form-group">
                            <label for="descripcion">Descripción Breve</label>
                            <textarea id="descripcion" name="descripcion" rows="4" 
                                      placeholder="Cuéntanos brevemente sobre tu experiencia y objetivos..."></textarea>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="disponibilidad" name="disponibilidad">
                                <span class="checkmark"></span>
                                Disponible para trabajar inmediatamente
                            </label>
                        </div>
                        
                        <div class="form-group checkbox-group">
                            <label class="checkbox-label">
                                <input type="checkbox" id="privacidad" name="privacidad" required>
                                <span class="checkmark"></span>
                                Acepto la <a href="#">Política de Privacidad</a> y el procesamiento de mis datos
                            </label>
                        </div>
                        
                        <button type="submit" class="btn btn-primary btn-upload">
                            Subir CV
                            <i class="fas fa-upload"></i>
                        </button>
                    </form>
                </div>

                <!-- Consejos Sidebar -->
                <div class="consejos-sidebar">
                    <div class="consejo-card">
                        <h4><i class="fas fa-lightbulb"></i> Consejos para tu CV</h4>
                        <ul class="consejos-list">
                            <li>Mantén tu CV actualizado y conciso</li>
                            <li>Incluye tus logros más relevantes</li>
                            <li>Usa un formato profesional y limpio</li>
                            <li>Personaliza tu CV para cada área</li>
                            <li>Revisa la ortografía antes de subir</li>
                        </ul>
                        <a href="{{ route('consejos-carrera') }}" class="btn btn-outline">Ver más consejos</a>
                    </div>
                    
                    <div class="estadisticas-card">
                        <h4><i class="fas fa-chart-line"></i> Estadísticas</h4>
                        <div class="stat-item">
                            <span class="stat-number">85%</span>
                            <span class="stat-label">de contrataciones exitosas</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">48h</span>
                            <span class="stat-label">tiempo promedio de respuesta</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">500+</span>
                            <span class="stat-label">empresas activas</span>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Proceso -->
    <section class="proceso-section">
        <div class="container">
            <h2>¿Cómo funciona?</h2>
            <div class="proceso-grid">
                <div class="proceso-step">
                    <div class="step-number">1</div>
                    <h4>Sube tu CV</h4>
                    <p>Completa tus datos y sube tu currículum en pocos minutos</p>
                </div>
                
                <div class="proceso-step">
                    <div class="step-number">2</div>
                    <h4>Revisión</h4>
                    <p>Nuestro equipo revisa y optimiza tu perfil profesional</p>
                </div>
                
                <div class="proceso-step">
                    <div class="step-number">3</div>
                    <h4>Matching</h4>
                    <p>Te conectamos con empresas que buscan tu perfil</p>
                </div>
                
                <div class="proceso-step">
                    <div class="step-number">4</div>
                    <h4>Contratación</h4>
                    <p>Recibe ofertas laborales directamente en tu email</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/candidatos/cv.js') }}"></script>
@endsection