<?php
require_once __DIR__ . '/../UserRepo.php';
require_once __DIR__ . '/../../model/User.php';
require_once __DIR__ . '/../../db/DBConnection.php';


class UserRepoImpl implements UserRepo
{
    private $connection;

    /**
     * UserRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
    }


    public function addUser(User $user)
    {
        $response = $this->connection->query("INSERT INTO user(userName,email,password) VALUES
                                    ('{$user->getUserName()}','{$user->getUserEmail()}','{$user->getUserPassword()}')");
        if ($response > 0 && $this->connection->affected_rows > 0) {
            return true;
        } else {
            return false;
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

    public function setConnection(mysqli $conne)
    {
        $this->connection = $conne;
    }
}