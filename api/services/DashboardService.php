<?php


//checking the method type
$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case "GET" :
        $action = $_GET['action'];
        switch ($action) {
            case 'getAllBrrowed':
                echo "Done";
                break;


        }
        break;
    case "POST":
        break;
    default:
        echo "Sorry Your System Error..!";
}