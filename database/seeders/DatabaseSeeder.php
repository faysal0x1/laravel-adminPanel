<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\GoodCategory;
use Database\Seeders\UsersSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,
            PermissionSeeder::class,
            PermissionRoleSeeder::class,
            PermissionUserSeeder::class,
            CountrySeeder::class,
        ]);
    }
}
