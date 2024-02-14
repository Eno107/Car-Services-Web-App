<?php

namespace Database\Factories;

use App\Models\Make;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'engine_size' => fake()->randomFloat(1, 1, 10),
            'year' => fake()->year(),
            'mileage' => fake()->numberBetween(0, 1000000),
        ];
    }
}
