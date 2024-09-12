<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1; $i <= 19; $i++) {
            DB::table('permission_user')->insert([
                'permission_id' => $i,
                'user_id' => 1,
                'user_type' => 'App\Models\User',
            ]);
        }
        for ($i = 1; $i <= 19; $i++) {
            DB::table('permission_user')->insert([
                'permission_id' => $i,
                'user_id' => 2,
                'user_type' => 'App\Models\User',
            ]);
        }
    }
}
