<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $name = fake()->company();

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'phone_number' => fake()->phoneNumber(),
            'logo_path' => fake()->imageUrl(),
            'body' => implode(" ", fake()->paragraphs(rand(2, 3))),
            'title' => implode(" ", fake()->sentences(rand(3, 6))),
        ];
    }
}
