<?php


namespace App\model;

use App\db\connection;

class user
{


    private $conn;

    function __construct()
    {
        $this->conn = new connection;
    }


    function select()
    {
        $sql = "SELECT * FROM user";
        return $stmt = $this->conn->query($sql)->fetchAll();
    }

    function insert($name, $age)
    {
        $sql = "INSERT INTO user(Name,Age) values(:name,:age);";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":age", $age);
        $stmt->execute();
    }

    function update($name, $age, $id)
    {
        $sql = "UPDATE user set Name = :name, Age = :age where Id = :id;";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":age", $age);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }


    function delete($id)
    {
        $sql = "DELETE from user where Id = :id;";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }
}
