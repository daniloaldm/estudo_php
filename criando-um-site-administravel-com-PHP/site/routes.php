<?php

if (resolve('/')){
    echo "Home";
}elseif(resolve('/contato')){
    echo 'Página de contato';
}else{
    echo 'Página não encontrada';
}