<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = array(
            array('id' => '1', 'name' => 'doctor-create', 'display_name' => 'doctor.create', 'description' => null, 'created_at' => '2024-06-12 10:29:52', 'updated_at' => '2024-06-12 10:29:52'),
            array('id' => '2', 'name' => 'doctor-delete', 'display_name' => 'doctor.delete', 'description' => null, 'created_at' => '2024-06-12 10:30:02', 'updated_at' => '2024-06-12 10:30:02'),
            array('id' => '3', 'name' => 'doctor-edit', 'display_name' => 'doctor.edit', 'description' => null, 'created_at' => '2024-06-12 10:30:22', 'updated_at' => '2024-06-12 10:30:22'),
            array('id' => '4', 'name' => 'patient-create', 'display_name' => 'patient.create', 'description' => null, 'created_at' => '2024-06-12 10:30:45', 'updated_at' => '2024-06-12 10:30:45'),
            array('id' => '5', 'name' => 'patient-edit', 'display_name' => 'patient.edit', 'description' => null, 'created_at' => '2024-06-12 10:30:51', 'updated_at' => '2024-06-12 10:30:51'),
            array('id' => '6', 'name' => 'patient-delete', 'display_name' => 'patient.delete', 'description' => null, 'created_at' => '2024-06-12 10:30:57', 'updated_at' => '2024-06-12 10:30:57'),
            array('id' => '7', 'name' => 'receptionist-create', 'display_name' => 'receptionist.create', 'description' => null, 'created_at' => '2024-06-12 10:31:13', 'updated_at' => '2024-06-12 10:31:13'),
            array('id' => '8', 'name' => 'receptionist-edit', 'display_name' => 'receptionist.edit', 'description' => null, 'created_at' => '2024-06-12 10:31:19', 'updated_at' => '2024-06-12 10:31:19'),
            array('id' => '9', 'name' => 'receptionist-delete', 'display_name' => 'receptionist.delete', 'description' => null, 'created_at' => '2024-06-12 10:31:27', 'updated_at' => '2024-06-12 10:31:27'),
            array('id' => '10', 'name' => 'accountant-create', 'display_name' => 'accountant.create', 'description' => null, 'created_at' => '2024-06-12 10:31:40', 'updated_at' => '2024-06-12 10:31:40'),
            array('id' => '11', 'name' => 'accountant-edit', 'display_name' => 'accountant.edit', 'description' => null, 'created_at' => '2024-06-12 10:31:46', 'updated_at' => '2024-06-12 10:31:46'),
            array('id' => '12', 'name' => 'accountant-delete', 'display_name' => 'accountant.delete', 'description' => null, 'created_at' => '2024-06-12 10:31:52', 'updated_at' => '2024-06-12 10:31:52'),
            array('id' => '13', 'name' => 'department-create', 'display_name' => 'department.create', 'description' => null, 'created_at' => '2024-06-12 10:32:11', 'updated_at' => '2024-06-12 10:32:11'),
            array('id' => '14', 'name' => 'department-edit', 'display_name' => 'department.edit', 'description' => null, 'created_at' => '2024-06-12 10:32:17', 'updated_at' => '2024-06-12 10:32:17'),
            array('id' => '15', 'name' => 'department-delete', 'display_name' => 'department.delete', 'description' => null, 'created_at' => '2024-06-12 10:32:24', 'updated_at' => '2024-06-12 10:32:24'),
            array('id' => '16', 'name' => 'appointment-create', 'display_name' => 'appointment.create', 'description' => null, 'created_at' => '2024-06-12 10:32:37', 'updated_at' => '2024-06-12 10:32:37'),
            array('id' => '17', 'name' => 'appointment-edit', 'display_name' => 'appointment.edit', 'description' => null, 'created_at' => '2024-06-12 10:32:44', 'updated_at' => '2024-06-12 10:32:44'),
            array('id' => '18', 'name' => 'appointment-delete', 'display_name' => 'appointment.delete', 'description' => null, 'created_at' => '2024-06-12 10:32:52', 'updated_at' => '2024-06-12 10:32:52'),
            array('id' => '19', 'name' => 'invoice-create', 'display_name' => 'invoice.create', 'description' => null, 'created_at' => '2024-06-12 10:33:05', 'updated_at' => '2024-06-12 10:33:05'),
            array('id' => '20', 'name' => 'invoice-edit', 'display_name' => 'invoice.edit', 'description' => null, 'created_at' => '2024-06-12 10:33:23', 'updated_at' => '2024-06-12 10:33:23'),
            array('id' => '21', 'name' => 'invoice-delete', 'display_name' => 'invoice.delete', 'description' => null, 'created_at' => '2024-06-12 10:33:34', 'updated_at' => '2024-06-12 10:33:34'),
            array('id' => '22', 'name' => 'prescription-create', 'display_name' => 'prescription.create', 'description' => null, 'created_at' => '2024-06-12 10:34:03', 'updated_at' => '2024-06-12 10:34:03'),
            array('id' => '23', 'name' => 'prescription-edit', 'display_name' => 'prescription.edit', 'description' => null, 'created_at' => '2024-06-12 10:34:09', 'updated_at' => '2024-06-12 10:34:09'),
            array('id' => '24', 'name' => 'prescription-delete', 'display_name' => 'prescription.delete', 'description' => null, 'created_at' => '2024-06-12 10:34:17', 'updated_at' => '2024-06-12 10:34:17'),
            array('id' => '25', 'name' => 'site-setting', 'display_name' => 'site.setting', 'description' => null, 'created_at' => '2024-06-12 10:34:40', 'updated_at' => '2024-06-12 10:34:40'),
        );

        DB::table('permissions')->insert($permissions);
    }
}
