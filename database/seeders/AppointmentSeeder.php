<?php

namespace Database\Seeders;

use App\Models\Appointment;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (range(1, 25) as $index) {
            $user = User::inRandomOrder()->first();
            $car = $user->cars->isNotEmpty() ? $user->cars->random() : null;
            $service = Service::inRandomOrder()->first();

            Appointment::factory()->create([
                'user_id' => $user->id,
                'car_id' => $car ? $car->id : null,
                'service_id' => $service->id,
            ]);
        }
    }
}
