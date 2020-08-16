<?php
require_once 'connection.php';

$task = new Task();
$task -> deleteTask($_GET['id'],$pdo);