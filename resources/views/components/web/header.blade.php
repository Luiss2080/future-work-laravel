<header class="header-web">
    <div class="container">
        <nav class="navbar">
            <div class="navbar-brand">
                <a href="{{ route('home') }}" class="brand-link">
                    <span class="brand-logo">FW</span>
                    <span class="brand-text">Future Work</span>
                </a>
            </div>
            
            <div class="navbar-menu collapse" id="navbarNav">
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
            </button>
        </nav>
    </div>
</header>