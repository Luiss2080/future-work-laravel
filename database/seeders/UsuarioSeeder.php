<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Usuario::create([
            'nombre' => 'Administrador',
            'email' => 'admin@futurework.com',
            'password' => bcrypt('admin123'),
            'activo' => true,
        ]);

        \App\Models\Usuario::create([
            'nombre' => 'Usuario Demo',
            'email' => 'demo@futurework.com',
            'password' => bcrypt('demo123'),
            'activo' => true,
        ]);
    }
}
