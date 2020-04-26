<?php


class DBConnection
{
    private $host = 'localhost';
    private $userName = "root";
    private $password = "";
    private $database = "LMS";
    private $port = "3306";

    private $connection;

    /**
     * DBConnection constructor.
     */
    public function __construct()
    {
        $this->connection = new Mysqli($this->host, $this->userName, $this->password, $this->database, $this->port);
    }


    public function getConnection()
    {
        return $this->connection;
    }
}