@extends('layouts.web.app')

@section('title', 'Empleos - Future Work')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/candidatos/empleos.css') }}">
@endsection

@section('content')
<div class="empleos-container">
    <div class="filtros-sidebar">
        <h3>Filtrar empleos</h3>
        
        <div class="filtro-grupo">
            <h4>Ubicación</h4>
            <select id="filtro-ubicacion">
                <option value="">Todas las ciudades</option>
                <option value="madrid">Madrid</option>
                <option value="barcelona">Barcelona</option>
                <option value="valencia">Valencia</option>
            </select>
        </div>

        <div class="filtro-grupo">
            <h4>Categoría</h4>
            <div class="checkbox-group">
                <label><input type="checkbox" value="tecnologia"> Tecnología</label>
                <label><input type="checkbox" value="marketing"> Marketing</label>
                <label><input type="checkbox" value="ventas"> Ventas</label>
                <label><input type="checkbox" value="diseno"> Diseño</label>
            </div>
        </div>

        <div class="filtro-grupo">
            <h4>Salario</h4>
            <select id="filtro-salario">
                <option value="">Cualquier salario</option>
                <option value="20-30">€20k - €30k</option>
                <option value="30-50">€30k - €50k</option>
                <option value="50-70">€50k - €70k</option>
                <option value="70+">€70k+</option>
            </select>
        </div>

        <button class="btn btn-primary" id="aplicar-filtros">Aplicar filtros</button>
    </div>

    <div class="empleos-main">
        <div class="empleos-header">
            <h1>Ofertas de empleo</h1>
            <div class="busqueda-container">
                <input type="search" id="buscar-empleos" placeholder="Buscar empleos...">
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