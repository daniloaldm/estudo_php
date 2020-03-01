<?php

if (resolve('/admin')){
    echo "Administração";
}elseif(resolve('/admin/pages')){
    echo 'Páginas da administração';
}else{
    echo 'Página não encontrada';
}