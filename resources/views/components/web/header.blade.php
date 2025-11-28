<header class="header-web">
    <div class="main-header">
        <!-- Logo -->
        <div class="navbar-logo">
            <a href="{{ route('home') }}" class="brand-link">
                <img src="{{ asset('images/logo.PNG') }}" alt="Future Work">
                <span class="brand-text">Future Work</span>
            </a>
        </div>

        <!-- Navegación Central -->
        <nav class="navbar-menu-center" id="navbarNav">
            <ul class="navbar-nav navbar-nav-horizontal">
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
                        <li><h6 class="dropdown-header">Crear Perfil</h6></li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">
                            <i class="fas fa-user-plus"></i> Registrarse
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('subir-cv') }}">
                            <i class="fas fa-upload"></i> Subir CV
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><h6 class="dropdown-header">Buscar Trabajo</h6></li>
                        <li><a class="dropdown-item popular" href="{{ route('bolsa-trabajo') }}">
                            <i class="fas fa-briefcase"></i> Ofertas de Empleo
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('consejos-carrera') }}">
                            <i class="fas fa-lightbulb"></i> Consejos de Carrera
                        </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fas fa-building"></i>
                        Para Empresas
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><h6 class="dropdown-header">Reclutamiento</h6></li>
                        <li><a class="dropdown-item new" href="{{ route('publicar-empleo') }}">
                            <i class="fas fa-bullhorn"></i> Publicar Empleo
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('buscar-candidatos') }}">
                            <i class="fas fa-search"></i> Buscar Candidatos
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><h6 class="dropdown-header">Servicios</h6></li>
                        <li><a class="dropdown-item popular" href="{{ route('planes-precios') }}">
                            <i class="fas fa-tags"></i> Planes y Precios
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('recursos-rh') }}">
                            <i class="fas fa-tools"></i> Recursos de RH
                        </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fas fa-tools"></i>
                        Profesiones
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><h6 class="dropdown-header">Construcción</h6></li>
                        <li><a class="dropdown-item popular" href="{{ route('albanil') }}">
                            <i class="fas fa-hammer"></i> Albañil
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('carpintero') }}">
                            <i class="fas fa-saw"></i> Carpintero
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('electricista') }}">
                            <i class="fas fa-bolt"></i> Electricista
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('plomero') }}">
                            <i class="fas fa-wrench"></i> Plomero
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><h6 class="dropdown-header">Profesional</h6></li>
                        <li><a class="dropdown-item" href="{{ route('arquitecto') }}">
                            <i class="fas fa-drafting-compass"></i> Arquitecto
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('ingeniero-civil') }}">
                            <i class="fas fa-hard-hat"></i> Ingeniero Civil
                        </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <i class="fas fa-info-circle"></i>
                        Información
                        <i class="fas fa-chevron-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><h6 class="dropdown-header">Conoce Future Work</h6></li>
                        <li><a class="dropdown-item" href="{{ route('informacion') }}">
                            <i class="fas fa-building"></i> Nosotros
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('ubicacion') }}">
                            <i class="fas fa-map-marker-alt"></i> Ubicación
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><h6 class="dropdown-header">Soporte</h6></li>
                        <li><a class="dropdown-item" href="{{ route('contacto') }}">
                            <i class="fas fa-envelope"></i> Contacto
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('recursos-rh') }}">
                            <i class="fas fa-question-circle"></i> Centro de Ayuda
                        </a></li>
                    </ul>
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
        </nav>

        <!-- Botones de autenticación -->
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
                    <button class="user-toggle dropdown-toggle" data-bs-toggle="dropdown">
                        <div class="user-avatar">
                            <i class="fas fa-user"></i>
                        </div>
                        <span>{{ Auth::user()->name }}</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item" type="submit">
                                    <i class="fas fa-sign-out-alt"></i>
                                    Cerrar Sesión
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            @endguest
        </div>

        <!-- Hamburger para móvil -->
        <button class="navbar-hamburger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-hamburger-icon"></span>
            <span class="navbar-hamburger-icon"></span>
            <span class="navbar-hamburger-icon"></span>
        </button>
    </div>
</header>

<!-- Modal de Login -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">
                    <i class="fas fa-sign-in-alt"></i>
                    Iniciar Sesión
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">
                            Recordarme
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Iniciar Sesión</button>
                </form>
            </div>
            <div class="modal-footer">
                <p class="text-center w-100">
                    ¿No tienes cuenta? 
                    <a href="{{ route('register') }}" data-bs-dismiss="modal">Regístrate aquí</a>
                </p>
            </div>
        </div>
    </div>
</div>