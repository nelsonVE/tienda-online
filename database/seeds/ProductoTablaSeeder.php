<?php

use Illuminate\Database\Seeder;

class ProductoTablaSeeder extends Seeder
{
    public function run()
    {
        $i = 0;
        for($i = 0; $i < 10; $i++)
        {
            DB::table('productos')->insert([
                'nombre' => 'Producto de prueba',
                'descripcion' => 'Descripción',
                'precio' => 254125
            ]);
        }
    }
}
