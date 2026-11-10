<?php

namespace Database\Factories;

use App\Models\TEMU;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<TEMU>
 */
class TEMUFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'nombre' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'Telefono' => fake()->phoneNumber(),
            'Direccion' => fake()->address(),
        ];
    }
}
