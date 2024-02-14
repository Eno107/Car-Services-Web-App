<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Appointment;
use App\Models\Car;
use App\Models\Make;
use App\Models\User;
use App\Models\Comment;
use App\Models\Problem;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Seeders\CategorySeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        Category::query()->delete();
        Make::query()->delete();
        Service::query()->delete();
        User::query()->delete();
        Problem::query()->delete();
        Comment::query()->delete();
        Car::query()->delete();

        $this->call(CategorySeeder::class);
        $this->call(MakeSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(ProblemSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(CarSeeder::class);
        $this->call(AppointmentSeeder::class);
    }
}
