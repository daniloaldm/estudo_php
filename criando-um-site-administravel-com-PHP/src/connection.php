<?php 

$conn = new mysqli('172.17.0.1', 'root', 'root', 'pp_criando_site_com_php');
if($conn->connect_errno){
    die('Falhou em conectar: (' . $conn->connect_errno . ') ' . $conn->connect_error);
}else{
    echo "Conectado!!";
}

return $conn;