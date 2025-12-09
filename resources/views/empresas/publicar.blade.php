@extends('layouts.web-app')

@section('title', 'Publicar Empleo - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/empresas/publicar.css') }}">
@endsection

@section('content')
<div class="publicar-wrapper">
    
    <!-- LEFT COLUMN: INTRO & BENEFITS -->
    <div class="publicar-intro">
        <div class="intro-sticky-content">
            <span class="intro-subtitle" data-aos="fade-down">Para Empresas</span>
            <h1 class="intro-title" data-aos="fade-up" data-aos-delay="100">
                Encuentra al Talento Perfecto
            </h1>
            <p class="intro-text" data-aos="fade-up" data-aos-delay="200">
                Publica tu oferta en minutos y accede a una red global de profesionales verificados.
            </p>

            <!-- Stats -->
            <div class="intro-stats" data-aos="fade-up" data-aos-delay="300">
                <div class="stat-card">
                    <span class="stat-number">+5k</span>
                    <span class="stat-label">Candidatos Activos</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">95%</span>
                    <span class="stat-label">Tasa de Éxito</span>
                </div>
            </div>

            <!-- Benefits -->
            <div class="benefits-list">
                <div class="benefit-item" data-aos="fade-right" data-aos-delay="400">
                    <div class="benefit-icon"><i class="fas fa-bullseye"></i></div>
                    <div class="benefit-content">
                        <h4>Matching Inteligente</h4>
                        <p>Nuestra IA te sugiere los mejores perfiles automáticamente.</p>
                    </div>
                </div>
                <div class="benefit-item" data-aos="fade-right" data-aos-delay="500">
                    <div class="benefit-icon"><i class="fas fa-globe"></i></div>
                    <div class="benefit-content">
                        <h4>Alcance Global</h4>
                        <p>Tu oferta visible para candidatos de todo el mundo.</p>
                    </div>
                </div>
                <div class="benefit-item" data-aos="fade-right" data-aos-delay="600">
                    <div class="benefit-icon"><i class="fas fa-check-circle"></i></div>
                    <div class="benefit-content">
                        <h4>Garantía de Calidad</h4>
                        <p>Solo pagas si encuentras al candidato ideal (Planes Premium).</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- RIGHT COLUMN: JOB FORM -->
    <div class="publicar-form-section">
        <div class="form-card" data-aos="fade-left">
            <form id="empleoForm" class="empleo-form">
                @csrf
                
                <!-- Section 1: Job Details -->
                <div class="section-block">
                    <h3 class="section-title"><i class="fas fa-briefcase"></i> Detalles del Empleo</h3>
                    
                    <div class="form-group">
                        <label for="titulo">Título de la Oferta *</label>
                        <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Ej. Senior React Developer" required>
                    </div>

                    <div class="form-grid">
                        <div class="form-group">
                            <label for="categoria">Categoría Profesional *</label>
                            <select id="categoria" name="categoria" class="form-control" required>
                                <option value="">Selecciona...</option>
                                <option value="tecnologia">Tecnología / Desarrollo</option>
                                <option value="diseno">Diseño / Creativo</option>
                                <option value="marketing">Marketing Digital</option>
                                <option value="ventas">Ventas</option>
                                <option value="finanzas">Finanzas</option>
                                <option value="rrhh">Recursos Humanos</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipo_empleo">Tipo de Contrato *</label>
                            <select id="tipo_empleo" name="tipo_empleo" class="form-control" required>
                                <option value="full_time">Tiempo Completo</option>
                                <option value="part_time">Medio Tiempo</option>
                                <option value="freelance">Freelance / Proyectos</option>
                                <option value="internship">Prácticas</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="ubicacion">Ubicación (Ciudad o Remoto) *</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control" placeholder="Ej. Madrid, España (o Remoto)" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="descripcion">Descripción del Puesto *</label>
                        <textarea id="descripcion" name="descripcion" class="form-control" rows="6" placeholder="Detalla las responsabilidades, requisitos y lo que ofreces..." required></textarea>
                    </div>
                </div>

                <!-- Section 2: Company Details -->
                <div class="section-block" style="margin-top: 3rem;">
                    <h3 class="section-title"><i class="fas fa-building"></i> Sobre la Empresa</h3>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="empresa">Nombre de la Empresa *</label>
                            <input type="text" id="empresa" name="empresa" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email de Contacto (Privado) *</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="website">Sitio Web (Opcional)</label>
                        <input type="url" id="website" name="website" class="form-control" placeholder="https://tuempresa.com">
                    </div>
                </div>

                <!-- Section 3: Salary -->
                <div class="section-block" style="margin-top: 3rem;">
                    <h3 class="section-title"><i class="fas fa-coins"></i> Rango Salarial (Opcional)</h3>
                    
                    <div class="form-grid">
                        <div class="form-group">
                            <label for="salario_min">Mínimo</label>
                            <input type="number" id="salario_min" name="salario_min" class="form-control" placeholder="Ej. 30000">
                        </div>
                        <div class="form-group">
                            <label for="salario_max">Máximo</label>
                            <input type="number" id="salario_max" name="salario_max" class="form-control" placeholder="Ej. 50000">
                        </div>
                    </div>
                    
                    <label class="checkbox-option">
                        <input type="checkbox" name="negociable">
                        <span>Salario a convenir / Negociable</span>
                    </label>
                </div>

                <!-- Actions -->
                <div class="form-actions">
                    <button type="button" class="btn-draft">Guardar Borrador</button>
                    <button type="submit" class="btn-publish">
                        PUBLICAR AHORA <i class="fas fa-paper-plane"></i>
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/empresas/publicar.js') }}"></script>
    <script>
        // Simple mock script for form submission effect
        document.getElementById('empleoForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const btn = this.querySelector('.btn-publish');
            const originalText = btn.innerHTML;
            btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Publicando...';
            setTimeout(() => {
                alert('¡Oferta publicada con éxito! (Demo)');
                btn.innerHTML = originalText;
            }, 1500);
        });
    </script>
@endsection