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
     * Subir CV - Para Candidatos
     */
    public function subirCv()
    {
        return view('web.pages.subir-cv');
    }
    
    /**
     * Consejos de Carrera - Para Candidatos
     */
    public function consejosCarrera()
    {
        return view('web.pages.consejos-carrera');
    }
    
    /**
     * Publicar Empleo - Para Empresas
     */
    public function publicarEmpleo()
    {
        return view('web.pages.publicar-empleo');
    }
    
    /**
     * Buscar Candidatos - Para Empresas
     */
    public function buscarCandidatos()
    {
        return view('web.pages.buscar-candidatos');
    }
    
    /**
     * Planes y Precios - Para Empresas
     */
    public function planesPrecios()
    {
        return view('web.pages.planes-precios');
    }
    
    /**
     * Recursos RH - Para Empresas
     */
    public function recursosRh()
    {
        return view('web.pages.recursos-rh');
    }
    
    /**
     * Mostrar profesiones
     */
    public function profesion($tipo)
    {
        // Mapa de tipos de profesión a nombres de vista
        // Si el nombre de la vista es igual al tipo, no es necesario agregarlo aquí
        $vista = $tipo;
        
        // Verificar si existe la vista específica
        if (view()->exists("web.profesiones.{$vista}")) {
            return view("web.profesiones.{$vista}");
        }
        
        // Fallback para profesiones que aún no tienen vista específica (opcional, o 404)
        abort(404);
    }
}
