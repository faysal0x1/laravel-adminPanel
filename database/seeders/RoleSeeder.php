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
                'name' => 'doctor',
                'display_name' => 'Doctor',
            ],
            [
                'name' => 'nurse',
                'display_name' => 'Nurse',
            ],
            [
                'name' => 'staff',
                'display_name' => 'Staff',
            ],
            [
                'name' => 'patient',
                'display_name' => 'Patient',
            ],
            [
                'name' => 'receptionist',
                'display_name' => 'Receptionist',
            ],
            [
                'name' => 'accountant',
                'display_name' => 'Accountant',
            ],
        );

        DB::table('roles')->insert($data);
    }
}
