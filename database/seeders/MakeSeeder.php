<?php

namespace Database\Seeders;

use App\Models\Make;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MakeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $makeData = [
            ['name' => 'alfa romeo', 'logo_path' => 'alfa-romeo'],
            ['name' => 'audi', 'logo_path' => 'audi'],
            ['name' => 'bmw', 'logo_path' => 'bmw'],
            ['name' => 'citroën', 'logo_path' => 'citroen'],
            ['name' => 'ford', 'logo_path' => 'ford'],
            ['name' => 'porsche', 'logo_path' => 'porsche'],
            ['name' => 'volkswagen', 'logo_path' => 'volkswagen'],
            ['name' => 'mercedes-benz', 'logo_path' => 'mercedes-benz'],
        ];

        foreach ($makeData as $make) {
            Make::factory()->create($make);
        }
    }
}
