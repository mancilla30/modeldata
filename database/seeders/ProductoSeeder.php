<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Producto::factory(25)->create();


        // Producto::create([
        //     'nombre'=>'Producto 1',
        //     'descripcion_corta'=>'Lorem ipsum',
        //     'descripcion'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'precio'=>20,
        // ]);
        // Producto::create([
        //     'nombre'=>'Producto 2',
        //     'descripcion_corta'=>'Lorem ipsum',
        //     'descripcion'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'precio'=>42,
        // ]);
        // Producto::create([
        //     'nombre'=>'Producto 3',
        //     'descripcion_corta'=>'Lorem ipsum',
        //     'descripcion'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'precio'=>60,
        // ]);
    }
}
