<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mascota>
 */
class MascotaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'especie' => $this->faker->randomElement(['Perro', 'Gato', 'Conejo', 'Pájaro']),
            'raza' => $this->faker->word,
            'edad' => $this->faker->numberBetween(1, 15),
            'descripcion' => $this->faker->paragraph,
        ];
    }
}
