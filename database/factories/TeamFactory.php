<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class TeamFactory extends Factory {

    public function definition(): array {
    	return [
    	    'name' => $this->faker->company,
            'principal' => $this->faker->unique()->firstName . ' ' . $this->faker->unique()->lastName,
            'headquarters' => $this->faker->city,
            'team_country' => $this->faker->country,
            'first_join' => $this->faker->year('-70 years', '-6 years'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
    	];
    }
}
