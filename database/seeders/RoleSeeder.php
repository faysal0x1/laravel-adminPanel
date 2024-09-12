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
        $data = array(
            [
                'name' => 'admin',
                'display_name' => 'Admin',
            ],
            [
                'name' => 'manager',
                'display_name' => 'Manager',
            ],
            [
                'name' => 'incharge',
                'display_name' => 'Incharge',
            ], [
                'name' => 'staff',
                'display_name' => 'Staff',
            ], [
                'name' => 'captain',
                'display_name' => 'Captain',
            ],
            [
                'name' => 'user',
                'display_name' => 'User',
            ],
        );

        DB::table('roles')->insert($data);
    }
}
