<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            array('id' => '1', 'name' => 'Admin', 'email' => 'admin@gmail.com', 'age' => NULL, 'gender' => NULL, 'phone' => NULL, 'address' => NULL, 'photo' => NULL, 'email_verified_at' => '2024-06-11 05:29:25', 'password' => '$2y$10$Bj1DDZ0iEbbsQCb/tDL9u.fYF7ihyt6d0GIHf0.IT3vfD.haPINfe', 'status' => '1', 'role' => 'user', 'remember_token' => 'BWMkoRNCMIGKejg4RoSslt6AeGR96duKC2fu7U8jGqUTW4DhTjrGg0jp5LDG', 'created_at' => '2024-06-11 05:29:25', 'updated_at' => '2024-06-11 05:29:25'),
            array('id' => '2', 'name' => 'User', 'email' => 'user@gmail.com', 'age' => NULL, 'gender' => NULL, 'phone' => NULL, 'address' => NULL, 'photo' => NULL, 'email_verified_at' => '2024-06-11 05:29:25', 'password' => '$2y$10$mFz7BeSyW2fO2bmn8FGuAOwDYeZ.o9xLZ6jaD457H8zYZYpOVUmTu', 'status' => '1', 'role' => 'user', 'remember_token' => 'nWd9Yn4pl3', 'created_at' => '2024-06-11 05:29:25', 'updated_at' => '2024-06-11 05:29:25'),
            array('id' => '3', 'name' => 'Wendy Duke', 'email' => 'nonelidumu@mailinator.com', 'age' => NULL, 'gender' => NULL, 'phone' => '+1 (777) 508-7518', 'address' => 'Numquam blanditiis n', 'photo' => NULL, 'email_verified_at' => NULL, 'password' => '$2y$10$rGtkgN4ptcW7aD4Xc5opte4D21IW/lln8fCq5jcoz3bex.8XEZeiS', 'status' => '1', 'role' => 'user', 'remember_token' => NULL, 'created_at' => '2024-06-11 05:30:04', 'updated_at' => '2024-06-11 05:30:04'),
            array('id' => '4', 'name' => 'Ryan Crawford', 'email' => 'biwa@mailinator.com', 'age' => NULL, 'gender' => NULL, 'phone' => '+1 (635) 857-5864', 'address' => 'Aspernatur explicabo', 'photo' => 'upload/user/1801545619352774.jpg', 'email_verified_at' => NULL, 'password' => '$2y$10$Ry5PpfJ0WUETEIp72eAbeOjUTeTWm9iEcEMt0btyWKYewaAFxkAa6', 'status' => '1', 'role' => 'user', 'remember_token' => NULL, 'created_at' => '2024-06-11 06:36:20', 'updated_at' => '2024-06-11 06:36:27')
        );

        DB::table('users')->insert($data);
    }
}
