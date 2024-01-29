<?php

namespace App\view;

use App\model\user;

$x = new user;

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <a href="view/insert.php">Adicionar usuário</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">
                    Id
                </th>
                <th scope="col">
                    Name
                </th>
                <th scope="col">
                    Age
                </th>
                <th scope="col">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($x->select() as $row) : ?>
                <tr>
                    <td><?= $row["Id"]; ?></td>
                    <td><?= $row["Name"]; ?></td>
                    <td><?= $row["Age"]; ?></td>
                    <td> <a href="../index.php?action=delete&id=<?= $row["Id"]; ?>">Delete</a> /
                        <a href="../index.php?action=update&id=<?= $row["Id"]; ?>&name=<?= $row["Name"]; ?>&age=<?= $row["Age"]; ?>">Update</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>