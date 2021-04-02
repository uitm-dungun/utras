<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'admin',
            'can_access_campus_codes' => json_encode(['dgn','kt','bb']),
            'can_create' => true, 'can_view' => true, 'can_update' => true, 'can_delete' => true,
        ]);
    }
}
