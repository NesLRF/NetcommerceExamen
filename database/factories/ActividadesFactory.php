<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Actividades;

class ActividadesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'Nombre' => $this->faker->word,
            'Descripcion' => $this->faker->text(100),
            'Inicio' => $this->faker->dateTimeBetween('-1 week', 'now'),
            'Fin' => $this->faker->dateTimeBetween('now', '+1 week'),
            'Estado' => 'Pendiente',
        ];
    }
}
