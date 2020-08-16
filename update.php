<?php
require_once 'connection.php';

$task = new Task();
$task -> updateTask($pdo);