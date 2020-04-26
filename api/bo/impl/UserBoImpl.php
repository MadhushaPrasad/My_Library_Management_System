<?php
require_once __DIR__ . '/../UserBO.php';
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../repo/impl/UserRepoImpl.php";
require_once __DIR__ . "/../../model/User.php";

class UserBoImpl implements UserBO
{

    public function addUser(User $user)
    {
        $userRepo = new UserRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $userRepo->setConnection($connection);
        $newUser = new User($user->getUserName(), $user->getUserEmail(), $user->getUserPassword());
        $addUser = $userRepo->addUser($newUser);
        if ($addUser){
            return true;
        }else{
            return $connection->error;
        }
    }

    public function updateUser(User $user)
    {
        // TODO: Implement updateUser() method.
    }

    public function searchUser($userEmail)
    {
        // TODO: Implement searchUser() method.
    }

    public function deleteUser($userEmail, $userPassword)
    {
        // TODO: Implement deleteUser() method.
    }
}