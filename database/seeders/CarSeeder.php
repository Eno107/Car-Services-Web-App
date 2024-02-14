<?php

namespace Database\Seeders;

use App\Models\Car;
use App\Models\Make;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 25) as $index) {
            $user = User::inRandomOrder()->first();
            $make = Make::inRandomOrder()->first();

            Car::factory()->create([
                'user_id' => $user->id,
                'make_id' => $make->id,
            ]);
        }
    }
}
