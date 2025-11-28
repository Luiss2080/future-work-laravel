<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\SystemController;

// ===== RUTAS PÚBLICAS =====

// Página de inicio
Route::get('/', [HomeController::class, 'index'])->name('home');

// Páginas informativas
Route::get('/informacion', [HomeController::class, 'informacion'])->name('informacion');
Route::get('/contacto', [HomeController::class, 'contacto'])->name('contacto');
Route::get('/ubicacion', [HomeController::class, 'ubicacion'])->name('ubicacion');
Route::get('/bolsa-trabajo', [HomeController::class, 'bolsaTrabajo'])->name('bolsa-trabajo');

// ===== RUTAS PARA CANDIDATOS =====
Route::get('/subir-cv', [HomeController::class, 'subirCv'])->name('subir-cv');
Route::get('/consejos-carrera', [HomeController::class, 'consejosCarrera'])->name('consejos-carrera');

// ===== RUTAS PARA EMPRESAS =====
Route::get('/publicar-empleo', [HomeController::class, 'publicarEmpleo'])->name('publicar-empleo');
Route::get('/buscar-candidatos', [HomeController::class, 'buscarCandidatos'])->name('buscar-candidatos');
Route::get('/planes-precios', [HomeController::class, 'planesPrecios'])->name('planes-precios');
Route::get('/recursos-rh', [HomeController::class, 'recursosRh'])->name('recursos-rh');

// Profesiones - Solo las rutas necesarias
Route::get('/profesion/{tipo}', [HomeController::class, 'profesion'])->name('profesion');

// Rutas específicas de profesiones para SEO
Route::get('/albanil', [HomeController::class, 'profesion'])->defaults('tipo', 'albanil')->name('albanil');
Route::get('/arquitecto', [HomeController::class, 'profesion'])->defaults('tipo', 'arquitecto')->name('arquitecto');
Route::get('/carpintero', [HomeController::class, 'profesion'])->defaults('tipo', 'carpintero')->name('carpintero');
Route::get('/electricista', [HomeController::class, 'profesion'])->defaults('tipo', 'electricista')->name('electricista');
Route::get('/ingeniero-civil', [HomeController::class, 'profesion'])->defaults('tipo', 'ingeniero')->name('ingeniero-civil');
Route::get('/plomero', [HomeController::class, 'profesion'])->defaults('tipo', 'plomero')->name('plomero');

// ===== RUTAS DE AUTENTICACIÓN =====
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rutas de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// ===== RUTAS PROTEGIDAS (ADMIN) =====
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [SystemController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/usuarios', [SystemController::class, 'usuarios'])->name('admin.usuarios');
    Route::post('/usuarios/{id}/toggle', [SystemController::class, 'toggleUsuario'])->name('admin.usuarios.toggle');
    Route::get('/sesiones', [SystemController::class, 'sesiones'])->name('admin.sesiones');
});

// Redirección por defecto
Route::fallback(function () {
    return redirect()->route('home');
});
