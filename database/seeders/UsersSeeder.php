<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
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
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => \Illuminate\Support\Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Manager',
                'email' => 'manager@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => \Illuminate\Support\Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Incharge',
                'email' => 'incharge@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => \Illuminate\Support\Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Staff',
                'email' => 'staff@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => \Illuminate\Support\Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Captain',
                'email' => 'captain@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => \Illuminate\Support\Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => \Illuminate\Support\Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        DB::table('users')->insert($data);
    }
}
