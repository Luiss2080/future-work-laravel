<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Sistema - Future Work')</title>
    <meta name="description" content="Sistema administrativo de Future Work">
    <meta name="robots" content="noindex, nofollow">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
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
    
    <!-- System CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/utilities.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/admin/main.css') }}">
    
    @stack('styles')
</head>
<body class="system-body @yield('body-class', '')">
    <div class="system-wrapper">
        <!-- Sidebar -->
        @include('components.admin.sidebar')
        
        <!-- Main Content -->
        <div class="main-wrapper">
            <!-- Header -->
            @include('components.admin.header')
            
            <!-- Content -->
            <main class="main-content">
                @yield('content')
            </main>
        </div>
    </div>
    
    <!-- Global Configuration -->
    <script type="text/html" id="admin-config">
        {
            "baseUrl": "{{ url('/') }}",
            "locale": "{{ app()->getLocale() }}",
            "csrfToken": "{{ csrf_token() }}",
            "user": @json(auth()->check() ? auth()->user()->only(['id', 'name', 'email']) : null)
        }
    </script>
    
    <!-- Initialize Admin App -->
    <script>
        window.FutureWork = JSON.parse(document.getElementById('admin-config').textContent);
    </script>
    
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- System JS -->
    <script src="{{ asset('assets/js/admin/main.js') }}"></script>
    
    @stack('scripts')
</body>
</html>