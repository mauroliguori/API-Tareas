<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tarea;
use App\Models\Comentario;
use App\Models\Categoria;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Tarea::factory(50)->create();
        Comentario::factory(50)->create();
        Categoria::factory(50)->create();


        Tarea::all()->each(function ($tarea) {
            $categorias = Categoria::inRandomOrder()->limit(5)->get();
            $tarea->categorias()->attach($categorias);
        });



    }
}
