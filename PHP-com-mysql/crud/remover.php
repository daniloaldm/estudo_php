<?php 

$conn = require ('connection.php');
$id = $_GET['id'] ?? null;

$stmt = $conn->prepare('DELETE FROM users where id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$path = basename(__DIR__).'/../';
header('location: '. $path);