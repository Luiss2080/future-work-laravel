<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Future Work - Portal de Empleo')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    
    <!-- CSS Componentes -->
    <link rel="stylesheet" href="{{ asset('assets/css/components/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components/footer.css') }}">

    <!-- CSS de página específica -->
    @yield('styles')
</head>
<body>
    <!-- Header -->
    @include('layouts.header')
    
    <!-- Contenido principal -->
    <main class="main-content">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('layouts.footer')
    
    <!-- JavaScript Base -->
    <script src="{{ asset('assets/js/comun/header.js') }}"></script>
    <script src="{{ asset('assets/js/comun/header-dropdowns.js') }}"></script>
    <script src="{{ asset('assets/js/comun/information.js') }}"></script>
    
    <!-- JavaScript de página específica -->
    @yield('scripts')
</body>
</html>