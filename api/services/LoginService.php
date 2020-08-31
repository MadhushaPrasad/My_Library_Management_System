<?php
require_once __DIR__ . "/../bo/impl/LoginBoImpl.php";

//checking the method type
$method = $_SERVER['REQUEST_METHOD'];
$loginBO = new LoginBoImpl();

switch ($method) {
    case "POST" :
        $action = $_POST['action'];
        switch ($action) {
            case 'checkUser':
                $userEmail = $_GET["email"];
                $userPassword = $_GET["password"];
                $res = $loginBO->checkUser($userEmail, $userPassword);
                echo $res;
                break;


        }
        break;
    case "POST":
        break;
    default:
        echo "Sorry Your System Error..!";
}