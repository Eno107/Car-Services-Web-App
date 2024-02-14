<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Make;
use App\Models\Problem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 15) as $index) {
            $user = User::inRandomOrder()->first();
            $category = Category::inRandomOrder()->first();
            $make = Make::inRandomOrder()->first();

            Problem::factory()->create([
                'user_id' => $user->id,
                'category_id' => $category->id,
                'make_id' => $make->id,
            ]);
        }
    }
}
