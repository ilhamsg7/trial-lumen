<?php

namespace Database\Factories;

use App\Models\Team;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class DriverFactory extends Factory {

    public function definition(): array {
    	return [
    	    'team_id' => rand(1, Team::count()),
            'name' => $this->faker->unique()->firstName . ' ' . $this->faker->unique()->lastName,
            'nickname' => $this->faker->unique()->regexify('[A-Z]{3}'),
            'driver_number' => $this->faker->unique()->numberBetween(1, 99),
            'nationality' => $this->faker->country,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
    	];
    }
}
