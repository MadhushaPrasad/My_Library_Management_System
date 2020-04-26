<?php
require_once __DIR__ . "/../../db/DBConnection.php";
require_once __DIR__ . "/../../repo/impl/LoginRepoImpl.php";
require_once __DIR__ . "/../LoginBO.php";

class LoginBoImpl implements LoginBO
{

    public function checkUser($email, $password)
    {
        $loginRepo = new LoginRepoImpl();
        $connection = (new DBConnection())->getConnection();
        $loginRepo->setConnection($connection);
        $checkLogin = $loginRepo->checkUser($email,$password);
        if ($checkLogin){
            return true;
        }else{
            return $connection->error;
        }

    }

}