<header class="header-web">
    <div class="header-top">
        <div class="container">
            <div class="top-content">
                <div class="contact-info">
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <span>info@futurework.com</span>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone"></i>
                        <span>+52 55 1234 5678</span>
                    </div>
                </div>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="header-main">
        <div class="container">
            <nav class="navbar">
                <div class="navbar-brand">
                    <a href="{{ route('home') }}" class="brand-link">
                        <img src="{{ asset('images/logo.png') }}" alt="Future Work" class="brand-logo">
                        <span class="brand-text">Future Work</span>
                    </a>
                </div>
                
                <button class="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                
                <div class="navbar-menu">
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
                    
                    <div class="navbar-auth">
                        @guest
                        <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                            <i class="fas fa-sign-in-alt"></i>
                            Ingresar
                        </button>
                        <a href="{{ route('register') }}" class="btn btn-primary">
                            <i class="fas fa-user-plus"></i>
                            Registrarse
                        </a>
                        @else
                        <div class="user-menu dropdown">
                            <button class="user-toggle" data-bs-toggle="dropdown">
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
                </div>
            </nav>
        </div>
    </div>
</header>