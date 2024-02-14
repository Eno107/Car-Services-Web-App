<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categoryData = [
            ['name' => 'Unknown'],
            ['name' => 'engine'],
            ['name' => 'transmission'],
            ['name' => 'exhaust'],
            ['name' => 'brake'],
            ['name' => 'Tire and Wheel'],
            ['name' => 'Electrical System'],
            ['name' => 'Suspension and Steering'],
            ['name' => 'Fluid and Filter'],
            ['name' => 'Body and Interior'],
        ];

        foreach ($categoryData as $category) {
            Category::factory()->create($category);
        }
    }
}
