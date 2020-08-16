<?php
require_once 'connection.php';

$task = new Task();
$task -> addTask($_POST['task'], $pdo);