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

// Profesiones - Solo las rutas necesarias
Route::get('/albanil', function() { return app(HomeController::class)->profesion('albanil'); })->name('albanil');
Route::get('/arquitecto', function() { return app(HomeController::class)->profesion('arquitecto'); })->name('arquitecto');
Route::get('/carpintero', function() { return app(HomeController::class)->profesion('carpintero'); })->name('carpintero');
Route::get('/electricista', function() { return app(HomeController::class)->profesion('electricista'); })->name('electricista');
Route::get('/ingeniero-civil', function() { return app(HomeController::class)->profesion('ingeniero'); })->name('ingeniero-civil');
Route::get('/jardinero', function() { return app(HomeController::class)->profesion('jardinero'); })->name('jardinero');
Route::get('/plomero', function() { return app(HomeController::class)->profesion('plomero'); })->name('plomero');
Route::get('/diseñador-interiores', function() { return app(HomeController::class)->profesion('diseñador'); })->name('diseñador-interiores');
Route::get('/escultor', function() { return app(HomeController::class)->profesion('escultor'); })->name('escultor');

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
