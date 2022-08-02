<?php

namespace Database\Seeders;

use App\Models\Driver;
use Illuminate\Database\Seeder;

class DriverSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Driver::factory(20)->create();
    }
}
