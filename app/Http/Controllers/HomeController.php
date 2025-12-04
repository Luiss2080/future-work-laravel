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
        return view('inicio.inicio');
    }
    
    /**
     * Mostrar información general
     */
    public function informacion()
    {
        return view('nosotros.nosotros');
    }
    
    /**
     * Mostrar página de contacto
     */
    public function contacto()
    {
        return view('contacto.contacto');
    }
    
    /**
     * Mostrar ubicación
     */
    public function ubicacion()
    {
        return view('ubicacion.ubicacion');
    }
    
    /**
     * Mostrar bolsa de trabajo
     */
    public function bolsaTrabajo()
    {
        return view('candidatos.empleos');
    }
    
    /**
     * Subir CV - Para Candidatos
     */
    public function subirCv()
    {
        return view('candidatos.cv');
    }
    
    /**
     * Consejos de Carrera - Para Candidatos
     */
    public function consejosCarrera()
    {
        return view('candidatos.consejos');
    }
    
    /**
     * Publicar Empleo - Para Empresas
     */
    public function publicarEmpleo()
    {
        return view('empresas.publicar');
    }
    
    /**
     * Buscar Candidatos - Para Empresas
     */
    public function buscarCandidatos()
    {
        return view('empresas.candidatos');
    }
    
    /**
     * Planes y Precios - Para Empresas
     */
    public function planesPrecios()
    {
        return view('precios.precios');
    }
    
    /**
     * Recursos RH - Para Empresas
     */
    public function recursosRh()
    {
        return view('empresas.recursos');
    }
    
    /**
     * Mostrar profesiones
     */
    public function profesion($tipo)
    {
        // Mapa de tipos de profesión a nombres de vista
        $vista = $tipo;
        
        // Verificar si existe la vista específica
        if (view()->exists("profesiones.{$vista}")) {
            return view("profesiones.{$vista}");
        }
        
        // Fallback para profesiones que aún no tienen vista específica
        abort(404);
    }
}
