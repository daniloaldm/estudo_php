<?php 

$conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWD, DB_NAME);
if($conn->connect_errno){
    die('Falhou em conectar: (' . $conn->connect_errno . ') ' . $conn->connect_error);
}else{
    echo "<h6>Conectado!!</h6>";
}

return $conn;