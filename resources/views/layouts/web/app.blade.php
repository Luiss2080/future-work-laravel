<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Future Work - Portal de Empleos')</title>
    <meta name="description" content="@yield('description', 'Encuentra tu empleo ideal o publica ofertas de trabajo en Future Work, el portal de empleos líder en la región.')">
    <meta name="keywords" content="@yield('keywords', 'empleos, trabajo, empleo, ofertas laborales, buscar trabajo, publicar empleo')">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/apple-touch-icon.png') }}">
    
    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'Future Work - Portal de Empleos')">
    <meta property="og:description" content="@yield('description', 'Encuentra tu empleo ideal o publica ofertas de trabajo.')">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    
    <!-- Preconnect -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    
    <!-- CSS Variables -->
    <link rel="stylesheet" href="{{ asset('assets/css/variables.css') }}">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/web/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/web/footer.css') }}">
    
    @stack('styles')
</head>
<body class="@yield('body-class', '')">
    <!-- Header -->
    @include('components.web.header')
    
    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>
    
    <!-- Footer -->
    @include('components.web.footer')
    
    <!-- Modals -->
    @include('components.web.modals.auth')
    
    <!-- Global Configuration -->
    <script type="text/html" id="app-config">
        {
            "baseUrl": "{{ url('/') }}",
            "locale": "{{ app()->getLocale() }}",
            "csrfToken": "{{ csrf_token() }}",
            "user": @json(auth()->check() ? auth()->user()->only('id', 'nombre', 'email', 'tipo_usuario') : null)
        }
    </script>
    
    <!-- Initialize App -->
    <script>
        window.FutureWork = JSON.parse(document.getElementById('app-config').textContent);
    </script>
    
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Header JS -->
    <script src="{{ asset('assets/js/web/header.js') }}"></script>
    <script src="{{ asset('assets/js/web/auth.js') }}"></script>
    
    @stack('scripts')
</body>
</html>