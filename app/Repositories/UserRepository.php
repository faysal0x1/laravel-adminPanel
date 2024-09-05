<?php

namespace App\Repositories;

use App\Interfaces\UserInterface;
use App\Models\User;

class UserRepository implements UserInterface
{

    public function createUser(array $userDetails, $role)
    {
        $data = [
            'name' => $userDetails['name'],
            'gender' => $userDetails['gender'],
            'age' => $userDetails['age'],
            'email' => $userDetails['email'],
            'phone' => $userDetails['phone'],
            'address' => $userDetails['address'],
            'password' => bcrypt('password'),
            'status' => 1,
            'role' => $role,
        ];
        return User::create($data);
    }

    public
    function updateUser($id, array $data)
    {
        $userDetails = [
            'name' => $data['name'],
            'gender' => $data['gender'],
            'age' => $data['age'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
        ];
        return User::whereId($id)->update($userDetails);
    }

    public
    function deleteUser($id)
    {
        return User::destroy($id);
    }
}
