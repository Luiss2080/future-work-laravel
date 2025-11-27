<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Sesion;
use Carbon\Carbon;

class SystemController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        // El middleware de autenticación se debe definir en las rutas
    }
    
    /**
     * Dashboard principal del sistema
     */
    public function dashboard()
    {
        $totalUsuarios = Usuario::count();
        $usuariosActivos = Usuario::where('activo', true)->count();
        $sesionesDiarias = Sesion::whereDate('inicio_sesion', today())->count();
        
        return view('dashboard_system', [
            'totalUsuarios' => $totalUsuarios,
            'usuariosActivos' => $usuariosActivos,
            'sesionesDiarias' => $sesionesDiarias
        ]);
    }
    
    /**
     * Gestión de usuarios
     */
    public function usuarios()
    {
        $usuarios = Usuario::latest()->paginate(20);
        
        return view('usuarios_system', [
            'usuarios' => $usuarios
        ]);
    }
    
    /**
     * Alternar estado de usuario
     */
    public function toggleUsuario($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->activo = !$usuario->activo;
        $usuario->save();
        
        return response()->json([
            'success' => true,
            'activo' => $usuario->activo,
            'message' => $usuario->activo ? 'Usuario activado' : 'Usuario desactivado'
        ]);
    }
    
    /**
     * Gestión de sesiones
     */
    public function sesiones()
    {
        $sesiones = Sesion::with('usuario')
            ->latest('inicio_sesion')
            ->paginate(20);
        
        return view('sesiones_system', [
            'sesiones' => $sesiones
        ]);
    }
}
