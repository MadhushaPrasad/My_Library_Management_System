<?php
require_once __DIR__ . "/../model/User.php";

interface UserRepo
{
    public function addUser(User $user);

    public function updateUser(User $user);

    public function searchUser($userEmail);

    public function deleteUser($userEmail, $userPassword);

    public function setConnection(mysqli $conne);
}