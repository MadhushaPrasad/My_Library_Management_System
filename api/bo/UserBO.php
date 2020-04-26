<?php
require_once __DIR__ . '/../model/User.php';

interface UserBO
{
    public function addUser(User $user);

    public function updateUser(User $user);

    public function searchUser($userEmail);

    public function deleteUser($userEmail, $userPassword);
}