<?php

namespace Database\Factories;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class carFactory extends Factory
{
    protected $model = Car::class;

    public function definition(): array
    {
        return [
            'model' => $this->faker->word(),
            'color' => $this->faker->word(),
            'plates' => $this->faker->word(),
            'brand' => $this->faker->word(),
            'user_id' => User::factory(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null,
        ];
    }
}
