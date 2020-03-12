<?php

if (resolve('/')){
    render ('site/home', 'site');
}elseif(resolve('/contato') || resolve('/contato/')){
    render ('site/contato', 'site');
}else{
    echo 'Página não encontrada';
}