<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'nombre',
        'email', 
        'password',
        'ultimo_acceso',
        'activo',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'ultimo_acceso' => 'datetime',
        'activo' => 'boolean',
    ];

    public function sesiones()
    {
        return $this->hasMany(Sesion::class, 'usuario_id');
    }

    public function sesionesRecientes()
    {
        return $this->hasMany(Sesion::class, 'usuario_id')
                   ->orderBy('created_at', 'desc')
                   ->limit(5);
    }

    public function getTotalSesionesAttribute()
    {
        return $this->sesiones()->count();
    }
}
