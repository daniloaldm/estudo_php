<?php

/* 
O ideal é que no ambiente local ou homologação o DEBUG seja 
true, porém em produção deve ser false, evitando exibir qual
erro está ocorrendo. 
*/

define('DEBUG', true);
define('DB_SERVER', '172.17.0.1');
define('DB_USER', 'root');
define('DB_PASSWD', 'root');
define('DB_NAME', 'pp_criando_site_com_php');
