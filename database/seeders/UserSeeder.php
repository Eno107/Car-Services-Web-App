<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(10)->create();
        $users->push(User::factory()->create([
            'name' => 'testName',
            'email' => 'testemail@gmail.com',
            'password' => 'testPassword',
        ]));
    }
}
