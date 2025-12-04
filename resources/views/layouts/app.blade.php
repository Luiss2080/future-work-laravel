<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Future Work - Portal de Empleo')</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- CSS Base -->
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/variables.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utilities.css') }}">
    
    <!-- CSS Compartidos -->
    <link rel="stylesheet" href="{{ asset('assets/css/web/shared/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/web/shared/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/web/shared/header-dropdowns.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/web/shared/pages-common.css') }}">
    
    <!-- CSS para autenticación -->
    <link rel="stylesheet" href="{{ asset('assets/css/web/auth/index.css') }}">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS de página específica -->
    @yield('styles')
</head>
<body class="auth-body">
    <!-- Header simple para auth -->
    <header class="auth-header">
        <div class="auth-header-container">
            <a href="{{ route('home') }}" class="auth-brand">
                <img src="{{ asset('images/logo.PNG') }}" alt="Future Work">
                <span>Future Work</span>
            </a>
        </div>
    </header>
    
    <!-- Contenido principal -->
    <main class="auth-main">
        @yield('content')
    </main>
    
    <!-- Footer simple -->
    <footer class="auth-footer">
        <div class="auth-footer-container">
            <p>&copy; {{ date('Y') }} Future Work. Todos los derechos reservados.</p>
        </div>
    </footer>
    
    <!-- JavaScript Base -->
    <script src="{{ asset('assets/js/web/auth/index.js') }}"></script>
    
    <!-- JavaScript de página específica -->
    @yield('scripts')
</body>
</html>