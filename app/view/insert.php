<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="form-group">
        <form action="../index.php?action=insertUser" method="post">
            <label for="name">Nome</label>
            <input class="form-control" type="text" id="name" name="name">

            <label for="age">Idade</label>
            <input class="form-control" type="number" id="age" name="age">

            <br>
            <input class="btn btn-primary" type="submit" value="Enviar">
        </form>
    </div>
</body>

</html>