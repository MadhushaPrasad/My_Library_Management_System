<?php


interface LoginBO
{
    public function checkUser($email, $password);
}