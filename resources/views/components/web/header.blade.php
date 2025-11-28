<header class="header-web">
    <!-- Header principal -->
    <div class="header-main">
        <div class="container">
            <nav class="navbar">
                <div class="navbar-brand">
                    <a href="{{ route('home') }}" class="brand-link">
                        <img src="{{ asset('images/logo.PNG') }}" alt="Future Work" class="brand-logo">
                        <span class="brand-text">Future Work</span>
                    </a>
                </div>
                
                <!-- Navegación en el centro -->
                <div class="navbar-menu-center collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                                <i class="fas fa-home"></i>
                                Inicio
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('bolsa-trabajo') }}" class="nav-link {{ request()->routeIs('bolsa-trabajo') ? 'active' : '' }}">
                                <i class="fas fa-briefcase"></i>
                                Empleos
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fas fa-users"></i>
                                Para Candidatos
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('register') }}">Crear Perfil</a></li>
                                <li><a class="dropdown-item" href="{{ route('bolsa-trabajo') }}">Buscar Empleos</a></li>
                                <li><a class="dropdown-item" href="#">Subir CV</a></li>
                                <li><a class="dropdown-item" href="#">Consejos de Carrera</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fas fa-building"></i>
                                Para Empresas
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Publicar Empleo</a></li>
                                <li><a class="dropdown-item" href="#">Buscar Candidatos</a></li>
                                <li><a class="dropdown-item" href="#">Planes y Precios</a></li>
                                <li><a class="dropdown-item" href="#">Recursos RH</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <i class="fas fa-tools"></i>
                                Profesiones
                                <i class="fas fa-chevron-down"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('albanil') }}">Albañil</a></li>
                                <li><a class="dropdown-item" href="{{ route('arquitecto') }}">Arquitecto</a></li>
                                <li><a class="dropdown-item" href="{{ route('carpintero') }}">Carpintero</a></li>
                                <li><a class="dropdown-item" href="{{ route('electricista') }}">Electricista</a></li>
                                <li><a class="dropdown-item" href="{{ route('ingeniero-civil') }}">Ingeniero Civil</a></li>
                                <li><a class="dropdown-item" href="{{ route('plomero') }}">Plomero</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('informacion') }}" class="nav-link {{ request()->routeIs('informacion') ? 'active' : '' }}">
                                <i class="fas fa-info-circle"></i>
                                Nosotros
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('contacto') }}" class="nav-link {{ request()->routeIs('contacto') ? 'active' : '' }}">
                                <i class="fas fa-envelope"></i>
                                Contacto
                            </a>
                        </li>
                    </ul>
                    
                    <!-- Buscador -->
                    <div class="navbar-search">
                        <div class="search-container">
                            <input type="text" class="search-input" placeholder="¿Qué empleo buscas?">
                            <button class="search-btn" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                
                <div class="navbar-auth">
                    @guest
                    <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                        <i class="fas fa-sign-in-alt"></i>
                        Ingresar
                    </a>
                    <a href="{{ route('register') }}" class="btn btn-primary">
                        <i class="fas fa-user-plus"></i>
                        Registrarse
                    </a>
                    @else
                    <div class="user-menu dropdown">
                        <button class="user-toggle btn" data-bs-toggle="dropdown">
                            <div class="user-avatar">
                                <i class="fas fa-user"></i>
                            </div>
                            <span class="user-name">{{ auth()->user()->name }}</span>
                            <i class="fas fa-chevron-down"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                    <i class="fas fa-tachometer-alt"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt"></i>
                                        Cerrar Sesión
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                    @endguest
                </div>
                
                <button class="navbar-toggler d-lg-none" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </div>
</header>