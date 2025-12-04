@extends('layouts.web-app')

@section('title', 'Publicar Empleo - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/empresas/publicar.css') }}">
@endsection

@section('content')
<div class="publicar-container">
    <section class="hero-publicar">
        <div class="container">
            <div class="hero-content">
                <h1>Publica tu empleo</h1>
                <p>Encuentra el candidato perfecto para tu empresa</p>
                <div class="stats-mini">
                    <span>+5,000 candidatos activos</span>
                    <span>95% efectividad</span>
                </div>
            </div>
        </div>
    </section>

    <section class="formulario-empleo">
        <div class="container">
            <form id="empleoForm" class="empleo-form">
                <div class="form-section">
                    <h3>Información del Empleo</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="titulo">Título del Empleo *</label>
                            <input type="text" id="titulo" name="titulo" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="categoria">Categoría *</label>
                            <select id="categoria" name="categoria" required>
                                <option value="">Seleccionar categoría</option>
                                <option value="construccion">Construcción</option>
                                <option value="tecnologia">Tecnología</option>
                                <option value="administracion">Administración</option>
                                <option value="ventas">Ventas</option>
                                <option value="educacion">Educación</option>
                                <option value="salud">Salud</option>
                                <option value="otros">Otros</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="ubicacion">Ubicación *</label>
                            <input type="text" id="ubicacion" name="ubicacion" placeholder="Ciudad, País" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="tipo_empleo">Tipo de Empleo *</label>
                            <select id="tipo_empleo" name="tipo_empleo" required>
                                <option value="">Seleccionar tipo</option>
                                <option value="tiempo_completo">Tiempo Completo</option>
                                <option value="medio_tiempo">Medio Tiempo</option>
                                <option value="freelance">Freelance</option>
                                <option value="temporal">Temporal</option>
                                <option value="practicas">Prácticas</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="descripcion">Descripción del Empleo *</label>
                        <textarea id="descripcion" name="descripcion" rows="6" placeholder="Describe las responsabilidades, requisitos y beneficios..." required></textarea>
                    </div>
                </div>

                <div class="form-section">
                    <h3>Información de la Empresa</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="empresa">Nombre de la Empresa *</label>
                            <input type="text" id="empresa" name="empresa" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email de Contacto *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="telefono">Teléfono</label>
                        <input type="tel" id="telefono" name="telefono">
                    </div>
                </div>

                <div class="form-section">
                    <h3>Detalles del Salario</h3>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="salario_min">Salario Mínimo</label>
                            <input type="number" id="salario_min" name="salario_min" placeholder="€">
                        </div>
                        
                        <div class="form-group">
                            <label for="salario_max">Salario Máximo</label>
                            <input type="number" id="salario_max" name="salario_max" placeholder="€">
                        </div>
                        
                        <div class="form-group">
                            <label for="frecuencia">Frecuencia</label>
                            <select id="frecuencia" name="frecuencia">
                                <option value="mensual">Por mes</option>
                                <option value="anual">Por año</option>
                                <option value="por_hora">Por hora</option>
                            </select>
                        </div>
                    </div>

                    <div class="checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="negociable" id="negociable">
                            <span class="checkmark"></span>
                            Salario negociable
                        </label>
                    </div>
                </div>

                <div class="form-actions">
                    <button type="button" class="btn btn-secondary">Guardar Borrador</button>
                    <button type="submit" class="btn btn-primary">Publicar Empleo</button>
                </div>
            </form>
        </div>
    </section>

    <section class="beneficios-publicar">
        <div class="container">
            <h2>¿Por qué publicar en Future Work?</h2>
            <div class="beneficios-grid">
                <div class="beneficio-card">
                    <i class="fas fa-users"></i>
                    <h4>Base amplia de candidatos</h4>
                    <p>Acceso a miles de profesionales calificados</p>
                </div>
                <div class="beneficio-card">
                    <i class="fas fa-target"></i>
                    <h4>Segmentación precisa</h4>
                    <p>Encuentra candidatos específicos para tu industria</p>
                </div>
                <div class="beneficio-card">
                    <i class="fas fa-clock"></i>
                    <h4>Publicación rápida</h4>
                    <p>Tu empleo estará visible en menos de 24 horas</p>
                </div>
                <div class="beneficio-card">
                    <i class="fas fa-chart-line"></i>
                    <h4>Analytics detallados</h4>
                    <p>Estadísticas completas de tu publicación</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/empresas/publicar.js') }}"></script>
@endsection