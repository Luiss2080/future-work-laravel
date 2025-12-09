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
                        <li><a class="dropdown-item" href="{{ route('jardinero') }}">
                            <i class="fas fa-seedling"></i> Jardinero
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><h6 class="dropdown-header">Profesional y Creativo</h6></li>
                        <li><a class="dropdown-item" href="{{ route('arquitecto') }}">
                            <i class="fas fa-drafting-compass"></i> Arquitecto
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('ingeniero-civil') }}">
                            <i class="fas fa-hard-hat"></i> Ingeniero Civil
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('disenador') }}">
                            <i class="fas fa-paint-brush"></i> Diseñador de Interiores
                        </a></li>
                        <li><a class="dropdown-item" href="{{ route('escultor') }}">
                            <i class="fas fa-chess-rook"></i> Escultor
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
        </nav>

        <!-- Acciones Derecha (Buscador + Auth) -->
        <div class="header-right-actions">


            <div class="navbar-auth">
                @guest
                    <a href="{{ route('login') }}" class="btn btn-outline-primary">
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
        </div>

        <!-- Hamburger para móvil -->
        <button class="navbar-hamburger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-hamburger-icon"></span>
            <span class="navbar-hamburger-icon"></span>
            <span class="navbar-hamburger-icon"></span>
        </button>
    </div>
</header>

