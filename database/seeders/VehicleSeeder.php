<?php

namespace Database\Seeders;

use App\Models\Maintenance;
use App\Models\Vehicle;
use Illuminate\Database\Seeder;

class VehicleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehicle::factory(33)
        ->has(Maintenance::factory()->count(3))
        ->create();
    }
}
