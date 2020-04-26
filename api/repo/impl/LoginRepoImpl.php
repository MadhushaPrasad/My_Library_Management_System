<?php
require_once __DIR__ . "/../../repo/LoginRepo.php";
require_once __DIR__ . "/../../db/DBConnection.php";

class LoginRepoImpl implements LoginRepo
{

    private $connection;

    /**
     * LoginRepoImpl constructor.
     */
    public function __construct()
    {
        $this->connection = (new DBConnection())->getConnection();
    }


    public function checkUser($email, $password)
    {
       $res = $this->connection->query("SELECT email,password FROM user WHERE email = '{$email}' && password = '{$password}'");
        return $res->fetch_assoc();
    }

    public function setConnection(mysqli $conne)
    {
        $this->connection = $conne;
    }
}