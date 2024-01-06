<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Factories\CarFactory;
use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        User::create(['name' => 'Admin', 'email' => 'admin@email.com', 'password' => '123', 'api_token' => 'token']);
        UserFactory::new()->count(10)->create();
        CarFactory::new()->count(10)->create();
    }
}
