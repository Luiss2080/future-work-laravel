<header class="admin-header">
    <div class="header-left">
        <button class="sidebar-toggle-btn">
            <i class="fas fa-bars"></i>
        </button>
        <h1 class="page-title">@yield('title', 'Panel Administrativo')</h1>
    </div>
    
    <div class="header-right">
        <div class="header-notifications">
            <button class="btn btn-sm btn-outline-secondary position-relative">
                <i class="fas fa-bell"></i>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    3
                </span>
            </button>
        </div>
        
        <div class="header-user">
            <div class="dropdown">
                <button class="btn btn-sm d-flex align-items-center" type="button" data-bs-toggle="dropdown">
                    <div class="user-avatar me-2">
                        <i class="fas fa-user"></i>
                    </div>
                    <span>{{ auth()->user()->name }}</span>
                    <i class="fas fa-chevron-down ms-2"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="{{ route('home') }}">
                            <i class="fas fa-home me-2"></i>
                            Ver Sitio Web
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">
                            <i class="fas fa-user me-2"></i>
                            Mi Perfil
                        </a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item">
                                <i class="fas fa-sign-out-alt me-2"></i>
                                Cerrar Sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>