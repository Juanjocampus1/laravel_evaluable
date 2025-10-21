<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Poblar la base de datos con productos de ejemplo
     */
    public function run(): void
    {
        $productos = [
            [
                'nombre' => 'Camiseta',
                'descripcion' => 'Camiseta de algodón talla M',
                'precio' => 15.99,
                'stock' => 25
            ],
            [
                'nombre' => 'Pantalón',
                'descripcion' => 'Pantalón vaquero azul',
                'precio' => 35.50,
                'stock' => 12
            ],
            [
                'nombre' => 'Zapatillas',
                'descripcion' => 'Zapatillas deportivas blancas',
                'precio' => 45.00,
                'stock' => 8
            ],
            [
                'nombre' => 'Mochila',
                'descripcion' => 'Mochila escolar negra',
                'precio' => 25.99,
                'stock' => 15
            ],
            [
                'nombre' => 'Gorra',
                'descripcion' => 'Gorra de béisbol roja',
                'precio' => 12.50,
                'stock' => 30
            ]
        ];

        foreach ($productos as $producto) {
            Producto::create($producto);
        }
    }
}
