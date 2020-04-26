<?php


interface LoginRepo
{
    public function setConnection(mysqli $conne);
    public function checkUser($email, $password);
}