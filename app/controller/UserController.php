<?php


namespace App\controller;

use App\model\user;


class userController
{

    private $model;


    function __construct()
    {
        $this->model = new user;
    }

    function mainPage()
    {
        $this->model->select();
        include __DIR__ . "/../view/main.php";
    }

    function insertUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = isset($_POST["name"]) ? $_POST["name"] : "";
            $age = isset($_POST["age"]) ? $_POST["age"] : "";
            $this->model->insert($name, $age);
            header("Location: ../index.php");
            exit;
        }
    }

    function updateUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = isset($_POST["name"]) ? $_POST["name"] : "";
            $age = isset($_POST["age"]) ? $_POST["age"] : "";
            $id = isset($_GET["id"]) ? $_GET["id"] : "";
            $this->model->update($name, $age, $id);
            header("Location: ../index.php");
            exit;
        }
    }

    function deleteUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = isset($_GET["id"]) ? $_GET["id"] : "";
            $this->model->delete($id);
            header("Location: ../index.php");
            exit;
        }
    }
}




