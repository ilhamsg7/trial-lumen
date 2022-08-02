<?php

namespace Database\Seeders;

use App\Models\Stats;
use Illuminate\Database\Seeder;

class StatsSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Stats::factory(20)->create();
    }
}
