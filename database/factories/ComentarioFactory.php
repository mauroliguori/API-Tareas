<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comentario;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comentario>
 */
class ComentarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Comentario::class;
    public function definition()
    {
        return [
            'id_de_usuario' => $this->faker->numberBetween(1,11),
            'tarea_id' => $this -> faker -> numberBetween(1,50),
            'descripcion' => $this->faker->sentence()
        ];
    }
}
