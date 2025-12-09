@extends('layouts.web-app')

@section('title', 'Empleos - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/candidatos/empleos.css') }}">
@endsection

@section('content')
<div class="empleos-container">
    <div class="filtros-sidebar">
        <h3><i class="fas fa-filter" style="color: var(--primary-neon);"></i> Filtrar empleos</h3>
        
        <div class="filtro-grupo">
            <h4><i class="fas fa-map-marker-alt"></i> Ubicación</h4>
            <select id="filtro-ubicacion">
                <option value="">Todas las ciudades</option>
                <option value="madrid">Madrid</option>
                <option value="barcelona">Barcelona</option>
                <option value="valencia">Valencia</option>
            </select>
        </div>

        <div class="filtro-grupo">
            <h4><i class="fas fa-briefcase"></i> Categoría</h4>
            <div class="checkbox-group">
                <label><input type="checkbox" value="tecnologia"> Tecnología</label>
                <label><input type="checkbox" value="marketing"> Marketing</label>
                <label><input type="checkbox" value="ventas"> Ventas</label>
                <label><input type="checkbox" value="diseno"> Diseño</label>
            </div>
        </div>

        <div class="filtro-grupo">
            <h4><i class="fas fa-euro-sign"></i> Salario</h4>
            <select id="filtro-salario">
                <option value="">Cualquier salario</option>
                <option value="20-30">€20k - €30k</option>
                <option value="30-50">€30k - €50k</option>
                <option value="50-70">€50k - €70k</option>
                <option value="70+">€70k+</option>
            </select>
        </div>

        <div class="filtro-grupo">
            <h4><i class="fas fa-clock"></i> Experiencia</h4>
            <select id="filtro-experiencia">
                <option value="">Cualquier experiencia</option>
                <option value="junior">Junior (0-2 años)</option>
                <option value="mid">Mid-Level (2-5 años)</option>
                <option value="senior">Senior (5+ años)</option>
            </select>
        </div>

        <div class="filtro-grupo">
            <h4><i class="fas fa-building"></i> Modalidad</h4>
            <div class="checkbox-group">
                <label><input type="checkbox" value="remoto"> 100% Remoto</label>
                <label><input type="checkbox" value="hibrido"> Híbrido</label>
                <label><input type="checkbox" value="presencial"> Presencial</label>
            </div>
        </div>

        <button class="btn btn-primary" id="aplicar-filtros">Aplicar filtros</button>
    </div>

    <div class="empleos-main">
        <div class="empleos-header">
            <div class="header-top-row" style="display: flex; justify-content: space-between; align-items: end; margin-bottom: 2rem;">
                <div>
                    <h1 style="margin-bottom: 0.5rem;"><i class="fas fa-search-dollar" style="color: var(--primary-neon); margin-right: 15px;"></i>Ofertas de empleo</h1>
                    <p style="color: var(--text-gray);">Mostrando <span style="color: var(--primary-neon); font-weight: bold;">24</span> vacantes disponibles</p>
                </div>
                <div class="sort-box">
                    <select style="background: transparent; border: 1px solid var(--border-color); color: var(--text-gray); padding: 0.5rem; border-radius: 8px;">
                        <option>Más recientes</option>
                        <option>Mejor pagados</option>
                    </select>
                </div>
            </div>
            
            <div class="busqueda-container">
                <input type="search" id="buscar-empleos" placeholder="Buscar por cargo, empresa o palabra clave...">
                <button class="btn-buscar"><i class="fas fa-search"></i></button>
            </div>
        </div>

        <div class="empleos-lista" id="lista-empleos">
            <div class="empleo-card">
                <div class="empresa-logo">
                    <img src="{{ asset('images/empresa-1.jpg') }}" alt="Empresa">
                </div>
                <div class="empleo-info">
                    <h3>Desarrollador Full Stack</h3>
                    <p class="empresa">TechStart S.L.</p>
                    <p class="ubicacion"><i class="fas fa-map-marker-alt"></i> Madrid</p>
                    <p class="salario">€45,000 - €55,000</p>
                    <div class="empleo-tags">
                        <span>React</span>
                        <span>Node.js</span>
                        <span>MongoDB</span>
                    </div>
                </div>
                <div class="empleo-actions">
                    <button class="btn btn-primary">Aplicar</button>
                    <button class="btn btn-outline">Ver detalles</button>
                </div>
            </div>

            <div class="empleo-card">
                <div class="empresa-logo">
                    <img src="{{ asset('images/empresa-2.jpg') }}" alt="Empresa">
                </div>
                <div class="empleo-info">
                    <h3>Diseñador UX/UI</h3>
                    <p class="empresa">Creative Agency</p>
                    <p class="ubicacion"><i class="fas fa-map-marker-alt"></i> Barcelona</p>
                    <p class="salario">€35,000 - €42,000</p>
                    <div class="empleo-tags">
                        <span>Figma</span>
                        <span>Adobe XD</span>
                        <span>Sketch</span>
                    </div>
                </div>
                <div class="empleo-actions">
                    <button class="btn btn-primary">Aplicar</button>
                    <button class="btn btn-outline">Ver detalles</button>
                </div>
            </div>
        </div>

        <div class="paginacion">
            <button class="btn btn-outline">« Anterior</button>
            <span class="pagina-actual">Página 1 de 15</span>
            <button class="btn btn-outline">Siguiente »</button>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/candidatos/empleos.js') }}"></script>
@endsection