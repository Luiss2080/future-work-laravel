@extends('layouts.web.app')

@section('title', 'Sobre Nosotros - Future Work')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/css/web/about.css') }}">
@endpush

@section('content')
<div class="about-hero">
    <div class="container">
        <h1>Sobre Future Work</h1>
        <p>Conectamos talento con oportunidades desde 2020</p>
    </div>
</div>

<div class="about-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2>Nuestra Misión</h2>
                <p>Democratizar el acceso a oportunidades laborales y facilitar la conexión entre profesionales talentosos y empresas que buscan crecer.</p>
            </div>
            <div class="col-lg-6">
                <h2>Nuestra Visión</h2>
                <p>Ser la plataforma líder en América Latina para la búsqueda y publicación de empleos, transformando la manera en que las personas encuentran trabajo.</p>
            </div>
        </div>
    </div>
</div>
@endsection