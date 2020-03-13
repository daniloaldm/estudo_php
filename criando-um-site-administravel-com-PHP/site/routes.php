<?php

if (resolve('/') || resolve('/site/') || resolve('/site')){
    render ('site/home', 'site');
}elseif(resolve('/contato') || resolve('/contato/') || resolve('/site/contato') || resolve('/site/contato/')){
    render ('site/contato', 'site');
}else{
    $path = $_SERVER['PATH_INFO'] ?? '/';
    var_dump($path);
    echo 'Página não encontrada';
}