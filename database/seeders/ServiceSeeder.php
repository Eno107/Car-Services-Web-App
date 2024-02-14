<?php

namespace Database\Seeders;

use App\Models\Make;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $serviceData = [
            ['logo_path' => 'logo1'],
            ['logo_path' => 'logo2'],
            ['logo_path' => 'logo3'],
            ['logo_path' => 'logo4'],
            ['logo_path' => 'logo5'],
            ['logo_path' => 'logo6'],
            ['logo_path' => 'logo7'],
            ['logo_path' => 'logo8'],
            ['logo_path' => 'logo9'],
            ['logo_path' => 'logo10'],
            ['logo_path' => 'logo11'],
            ['logo_path' => 'logo12'],
            ['logo_path' => 'logo13'],
            ['logo_path' => 'logo14'],
            ['logo_path' => 'logo15'],
            ['logo_path' => 'logo16'],
            ['logo_path' => 'logo17'],
            ['logo_path' => 'logo18'],
            ['logo_path' => 'logo19'],
            ['logo_path' => 'logo20'],
        ];

        foreach ($serviceData as $service) {
            $service = Service::factory()->create($service);

            $categories = Category::inRandomOrder()->take(rand(1, 6))->get();
            $service->categories()->attach($categories);

            $makes = Make::inRandomOrder()->take(rand(1, 5))->get();
            $service->makes()->attach($makes);
        }
    }
}
