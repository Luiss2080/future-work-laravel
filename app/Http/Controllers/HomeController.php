<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Sesion;

class HomeController extends Controller
{
    /**
     * Mostrar la página de inicio
     */
    public function index()
    {
        return view('web.pages.home');
    }
    
    /**
     * Mostrar información general
     */
    public function informacion()
    {
        return view('web.pages.about');
    }
    
    /**
     * Mostrar página de contacto
     */
    public function contacto()
    {
        return view('web.pages.contact');
    }
    
    /**
     * Mostrar ubicación
     */
    public function ubicacion()
    {
        return view('web.pages.ubicacion');
    }
    
    /**
     * Mostrar bolsa de trabajo
     */
    public function bolsaTrabajo()
    {
        return view('web.pages.bolsa-trabajo');
    }
    
    /**
     * Mostrar profesiones
     */
    public function profesion($tipo)
    {
        $profesiones = [
            'albanil' => [
                'titulo' => 'Albañilería',
                'descripcion' => 'Profesionales en construcción y reparaciones de estructuras',
                'icono' => 'fas fa-hard-hat'
            ],
            'arquitecto' => [
                'titulo' => 'Arquitectura',
                'descripcion' => 'Diseño y planificación de espacios habitacionales',
                'icono' => 'fas fa-drafting-compass'
            ],
            'carpintero' => [
                'titulo' => 'Carpintería',
                'descripcion' => 'Trabajos especializados en madera y muebles',
                'icono' => 'fas fa-hammer'
            ],
            'electricista' => [
                'titulo' => 'Electricista',
                'descripcion' => 'Instalaciones eléctricas y sistemas de energía',
                'icono' => 'fas fa-bolt'
            ],
            'ingeniero' => [
                'titulo' => 'Ingeniería Civil',
                'descripcion' => 'Proyectos de infraestructura y construcción',
                'icono' => 'fas fa-building'
            ],
            'jardinero' => [
                'titulo' => 'Jardinería',
                'descripcion' => 'Diseño y mantenimiento de espacios verdes',
                'icono' => 'fas fa-seedling'
            ],
            'plomero' => [
                'titulo' => 'Plomería',
                'descripcion' => 'Sistemas hidráulicos y sanitarios',
                'icono' => 'fas fa-wrench'
            ],
            'diseñador' => [
                'titulo' => 'Diseño de Interiores',
                'descripcion' => 'Decoración y ambientación de espacios',
                'icono' => 'fas fa-paint-brush'
            ],
            'escultor' => [
                'titulo' => 'Escultura',
                'descripcion' => 'Arte en piedra, madera y materiales diversos',
                'icono' => 'fas fa-chess-rook'
            ]
        ];
        
        if (!isset($profesiones[$tipo])) {
            abort(404);
        }
        
        return view('web.profesiones.detalle', [
            'profesion' => $profesiones[$tipo],
            'tipo' => $tipo
        ]);
    }
}
