<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class kendaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
            public function definition(): array
    {
        return [
            'id_motor' => fake()->name(),
            'plat_motor' => fake()->unique()->safeEmail(),
            '' => fake()->phoneNumber(),
        ];
    }
}


