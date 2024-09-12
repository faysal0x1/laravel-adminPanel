<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'can_manage_lot',
                'display_name' => 'Can Manage Lot',
            ],
            [
                'name' => 'can_add_lot',
                'display_name' => 'Can Add Lot',
            ],
            [
                'name' => 'can_edit_lot',
                'display_name' => 'Can Edit Lot'
            ],
            [
                'name' => 'can_delete_lot',
                'display_name' => 'Can Delete Lot'
            ],
            [
                'name' => 'can_see_user',
                'display_name' => 'Can See User',
            ],
            [
                'name' => 'can_add_user',
                'display_name' => 'Can Add User',
            ],
            [
                'name' => 'can_edit_user',
                'display_name' => 'Can Edit User',
            ],
            [
                'name' => 'can_delete_user',
                'display_name' => 'Can Delete User',
            ],
            [
                'name' => 'can_manage_role',
                'display_name' => 'Can Manage Role',
            ],
            [
                'name' => 'can_manage_permission',
                'display_name' => 'Can Manage Permission',
            ],

            [
                'name' => 'can_update_lot',
                'display_name' => 'Can Update Lot',
            ],
            [
                'name' => 'can_add_track',
                'display_name' => 'Can Add Track'
            ],
            [
                'name' => 'can_view_track',
                'display_name' => 'Can View Track'
            ],

            [
                'name' => 'can_add_product',
                'display_name' => 'Can Add Product'
            ],
            [
                'name' => 'can_update_product',
                'display_name' => 'Can Update Product'
            ],
            [
                'name' => 'can_update_track_status',
                'display_name' => 'Can Update Track Status'
            ],
            [
                'name' => 'can_delete_product',
                'display_name' => 'Can Delete Product'
            ],
            [
                'name' => 'can_update_lot_status',
                'display_name' => 'Can Update Lot Status'
            ],

            [
                'name' => 'can_update_status',
                'display_name' => 'Can Update Status'
            ],

        ];

        DB::table('permissions')->insert($data);
    }
}
