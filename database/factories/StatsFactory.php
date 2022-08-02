<?php

namespace Database\Factories;

use App\Models\Driver;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class StatsFactory extends Factory {

    public function definition(): array {
    	return [
    	    'driver_number' => Driver::factory()->create()->driver_number,
            'win' => $this->faker->numberBetween(0, 50),
            'podium' => $this->faker->numberBetween(0, 120),
            'fastest_lap' => $this->faker->numberBetween(0, 40),
            'world_champion' => $this->faker->numberBetween(0, 7),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
    	];
    }
}
