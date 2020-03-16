<?php

// require '../bootstrap.php';

if (resolve('/admin') || resolve('/admin/')){
    render('admin/home', 'admin');
}elseif(resolve('/admin/pages') || resolve('/admin/pages/')){
    render('admin/pages', 'admin');
}else{
    http_response_code(404); 
    $path = $_SERVER['PATH_INFO'] ?? '/';
    var_dump($path);
    echo 'Página não encontrada';
}