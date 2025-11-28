<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;
use App\Models\Sesion;

class LoginController extends Controller
{
    /**
     * Show the application's login form.
     */
    public function showLoginForm()
    {
        return view('web.auth.login');
    }
    
    /**
     * Handle a login request to the application.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ], [
            'email.required' => 'El email es obligatorio',
            'email.email' => 'Ingrese un email válido',
            'password.required' => 'La contraseña es obligatoria',
        ]);

        $credentials = $request->only('email', 'password');
        
        // Buscar usuario activo
        $usuario = Usuario::where('email', $credentials['email'])
                         ->where('activo', true)
                         ->first();
        
        if (!$usuario || !Hash::check($credentials['password'], $usuario->password)) {
            return back()->withErrors([
                'email' => 'Las credenciales no coinciden con nuestros registros.',
            ])->withInput($request->except('password'));
        }
        
        // Autenticar usuario
        Auth::login($usuario, $request->filled('remember'));
        
        // Actualizar último acceso
        $usuario->update([
            'ultimo_acceso' => now()
        ]);
        
        // Registrar sesión
        Sesion::create([
            'usuario_id' => $usuario->id,
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
            'inicio_sesion' => now()
        ]);
        
        $request->session()->regenerate();
        
        return redirect()->intended('/admin/dashboard');
    }
    
    /**
     * Log the user out of the application.
     */
    public function logout(Request $request)
    {
        // Actualizar sesión antes de cerrar
        if (Auth::check()) {
            $sesion = Sesion::where('usuario_id', Auth::id())
                           ->whereNull('fin_sesion')
                           ->latest()
                           ->first();
                           
            if ($sesion) {
                $sesion->update([
                    'fin_sesion' => now()
                ]);
            }
        }

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
