<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tarea;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TareaFactory extends Factory
{
    protected $model = Tarea::class;
    public function definition()
    {
        return [
            'titulo' => $this->faker->word(),
            'id_de_autor' => $this->faker->numberBetween(1,50),
            'descripcion' => $this->faker->sentence(),
            'id_de_usuario_seleccionado' => $this -> faker -> numberBetween(10,500)
        ];
    }
}
