<?php
require_once __DIR__ . "/../bo/impl/UserBoImpl.php";
require_once __DIR__ . "/../model/User.php";

$method = $_SERVER['REQUEST_METHOD'];
$userBo = new UserBoImpl();

switch ($method) {
    case "GET":
        break;
    case "POST":
        $action = $_GET['action'];
        switch ($action) {
            case "addUser":
                $userName = $_POST['userName'];
                $userEmail = $_POST['email'];
                $userPassword = $_POST['password'];
                $newUser = new User($userName, $userEmail, $userPassword);
                $user = $userBo->addUser($newUser);
                echo $user;
                break;
        }

}

