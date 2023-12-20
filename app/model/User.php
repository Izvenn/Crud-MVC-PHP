<?php

namespace App\model;



use App\db\Connection;

class User
{

    private $connection;

    function __construct()
    {
        $this->connection = new Connection;
    }

    function getUser()
    {
        $sql = "SELECT * from users;";
        return $this->connection->query($sql)->fetchAll();
    }

    function setUser($name)
    {
        $sql = "INSERT into users(nome) values(:name)";

        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":name", $name);
        return  $stmt->execute();
    }

    function deleteUser($id)
    {
        $sql = "DELETE from users where id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id", $id);
        return  $stmt->execute();
    }

    function putUser($id)
    {
        $sql = "SELECT * FROM users where id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }
}
