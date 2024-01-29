<?php
namespace App\view;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Users</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Action</th>
                
            </tr>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['nome']; ?></td>
                    <td>Delete/Edit</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
