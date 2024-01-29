<?php

namespace App\db;

class connection
{

    private $conn;


    function __construct()
    {
        try {
            $envpath = realpath(dirname(__FILE__). "/../../env.ini");
            $env = parse_ini_file($envpath);

            $this->conn = new \PDO("mysql:host={$env["DB_HOST"]};dbname={$env["DB_NAME"]}", $env["DB_USER"], $env["DB_PASSWORD"]);
        } catch (\PDOException $e) {

            echo "erro" . $e;
        }
    }

    function prepare($sql)
    {
        return $this->conn->prepare($sql);
    }

    function query($sql)
    {
        return $this->conn->query($sql);
    }
}
