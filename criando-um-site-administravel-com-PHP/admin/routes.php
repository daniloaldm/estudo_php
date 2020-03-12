<?php

// require '../bootstrap.php';

if (resolve('/admin') || resolve('/admin/')){
    render('admin/home', 'admin');
}elseif(resolve('/admin/pages') || resolve('/admin/pages/')){
    render('admin/pages', 'admin');
}else{
    echo 'Página não encontrada';
}