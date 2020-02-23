<?php 

session_start();

$_SESSION['usuario'] = [
    'name' => 'Danilo',
    'idade' => 23,
    'ativo' -> true
];

// unset($_SESSION['usuario']);

$_SESSION['ultimo-acesso'] = '12-12-2012';
