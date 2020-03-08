<?php 

$conn = new mysqli('172.17.0.1', 'root', 'root', 'php_mysql_iniciando');
if($conn->connect_errno){
    die('Falhou em conectar: (' . $conn->connect_errno . ') ' . $conn->connect_error);
}

return $conn;