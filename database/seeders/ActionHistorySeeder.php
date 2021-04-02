<?php

namespace Database\Seeders;

use App\Models\ActionHistory;
use Illuminate\Database\Seeder;

class ActionHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ActionHistory::factory(10)->create();
    }
}
