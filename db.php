<?php

$serverName = "localhost";
$userName = "root";
$password = "root";
$dataBase = "to_do";

try {
    $pdo = new PDO ("mysql:host=$serverName; dbname=$dataBase", $userName, $password);
}
catch (PDOException $e) {
    echo "Соединение не установлено, ошибка: ".$e -> getMessage();
}