<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Comment;
use App\Models\Problem;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 40) as $index) {
            $user = User::inRandomOrder()->first();
            $problem = Problem::inRandomOrder()->first();

            Comment::factory()->create([
                'problem_id' => $problem->id,
                'user_id' => $user->id,
            ]);
        }
    }
}
