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
                    <a href="#" class="nav-link dropdown-toggle">
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
                    <a href="#" class="nav-link dropdown-toggle">
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
                    <a href="#" class="nav-link dropdown-toggle">
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