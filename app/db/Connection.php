<?php

namespace App\db;

use PDOException;

class Connection
{

    private $conn;


    function __construct()
    {
        try {
            $this->conn = new \PDO("mysql:host=localhost;dbname=teste;", "root", "senha1234");
            
        } catch (PDOException $e) {
            echo  $e;
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
