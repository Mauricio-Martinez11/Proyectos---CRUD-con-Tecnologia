<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;
use App\Models\Transportista;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Crear usuarios de prueba
        Usuario::create([
            'nombre' => 'Administrador',
            'email' => 'admin@example.com',
            'telefono' => '123456789',
            'rol' => 'admin',
            'activo' => true,
        ]);

        Usuario::create([
            'nombre' => 'Cliente Ejemplo',
            'email' => 'cliente@example.com',
            'telefono' => '987654321',
            'rol' => 'cliente',
            'activo' => true,
        ]);

        // Crear transportistas de prueba
        Transportista::create([
            'nombre' => 'Juan Pérez',
            'telefono' => '555123456',
            'licencia' => 'ABC123',
            'empresa' => 'Transportes Pérez',
            'activo' => true,
        ]);

        Transportista::create([
            'nombre' => 'María García',
            'telefono' => '555789012',
            'licencia' => 'XYZ789',
            'empresa' => 'Logística García',
            'activo' => true,
        ]);


    }
}
