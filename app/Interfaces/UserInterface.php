<?php

namespace App\Interfaces;

interface UserInterface
{
    public function createUser(array $userDetails,$role);

    public function updateUser($id, array $data);

    public function deleteUser($id);
}
