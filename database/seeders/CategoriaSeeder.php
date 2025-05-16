<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categorias')->insert([
            // Accesorios (ID 1)
            ['nomcatg' => 'Pulseras', 'codcatprincipal' => 1, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Collares', 'codcatprincipal' => 1, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Llaveros', 'codcatprincipal' => 1, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Aretes', 'codcatprincipal' => 1, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Tobilleras', 'codcatprincipal' => 1, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Diadernas', 'codcatprincipal' => 1, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],

            // Árticulos personalizados (ID 2)
            ['nomcatg' => 'Pulseras con nombre', 'codcatprincipal' => 2, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Collares con fecha', 'codcatprincipal' => 2, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Accesorios', 'codcatprincipal' => 2, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Packs para eventos', 'codcatprincipal' => 2, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],

            // Regalos (ID 3)
            ['nomcatg' => 'Cajas de regalos', 'codcatprincipal' => 3, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Kits para fechas especiales', 'codcatprincipal' => 3, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Bolsitas ecológicas', 'codcatprincipal' => 3, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Tarjetas con semillas', 'codcatprincipal' => 3, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Regalos corporativos', 'codcatprincipal' => 3, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],

            // Artesanales (ID 4)
            ['nomcatg' => 'Bisutería', 'codcatprincipal' => 4, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Textiles', 'codcatprincipal' => 4, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Carámica y arcillas', 'codcatprincipal' => 4, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Madera', 'codcatprincipal' => 4, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Papel y cartón', 'codcatprincipal' => 4, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
            ['nomcatg' => 'Elementos para decoración', 'codcatprincipal' => 4, 'estado' => 'activo', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
