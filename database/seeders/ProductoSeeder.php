<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('productos')->insert([
            [
                'nompro' => 'Pulsera de Cuero',
                'descpro' => 'Pulsera artesanal hecha de cuero genuino.',
                'prepro' => 29.99,
                'stock_disponible' => 50,
                'stock_minimo' => 5,
                'estpro' => 'activo',
                'certipro' => 'Certificado de Autenticidad',
                'imgpro' => 'login-page__image.png',
                'codcatg' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nompro' => 'Collar de Plata',
                'descpro' => 'Collar elegante de plata 925 con diseño exclusivo.',
                'prepro' => 75.50,
                'stock_disponible' => 30,
                'stock_minimo' => 3,
                'estpro' => 'activo',
                'certipro' => 'Certificado de Plata',
                'imgpro' => 'login-page__image.png',
                'codcatg' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nompro' => 'Aretes de Perlas',
                'descpro' => 'Aretes delicados con perlas naturales.',
                'prepro' => 45.00,
                'stock_disponible' => 20,
                'stock_minimo' => 2,
                'estpro' => 'activo',
                'certipro' => 'Certificado de Calidad',
                'imgpro' => 'login-page__image.png',
                'codcatg' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nompro' => 'Llaveros Personalizados',
                'descpro' => 'Llaveros con grabado personalizado en metal.',
                'prepro' => 15.99,
                'stock_disponible' => 100,
                'stock_minimo' => 10,
                'estpro' => 'activo',
                'certipro' => 'Garantía de Calidad',
                'imgpro' => 'login-page__image.png',
                'codcatg' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nompro' => 'Pulsera Trenzada',
                'descpro' => 'Pulsera trenzada hecha a mano con hilo de colores.',
                'prepro' => 12.50,
                'stock_disponible' => 70,
                'stock_minimo' => 5,
                'estpro' => 'borrador',
                'certipro' => 'Certificado de Artesanía',
                'imgpro' => 'login-page__image.png',
                'codcatg' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nompro' => 'Collar de Madera',
                'descpro' => 'Collar artesanal hecho con piezas de madera natural.',
                'prepro' => 40.00,
                'stock_disponible' => 40,
                'stock_minimo' => 4,
                'estpro' => 'inactivo',
                'certipro' => 'Certificado Eco-Friendly',
                'imgpro' => 'login-page__image.png',
                'codcatg' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
