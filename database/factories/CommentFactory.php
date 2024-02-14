<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Problem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'problem_id' => Problem::factory(),
            'user_id' => User::factory(),
            'body' => implode(" ", fake()->paragraphs(rand(1, 2))),
        ];
    }
}
