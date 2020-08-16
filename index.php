<?php require_once 'connection.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список дел</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/ajax.js"></script>
</head>
<body>
<div class="container">
    <div id="message"></div>
    <h1>Список дел</h1>
    <form  method="post" id="form" action="add.php">
        <input type="text" name="task" id="task" placeholder="Нужно сделать..." class="form-control">
        <input type="submit" name="sendTask" class="btn btn-success">
    </form>

    <ul class="mt-2" id="content">
        <?php
            include 'update.php';
        ?>
    </ul>

</div>
</body>
</html>