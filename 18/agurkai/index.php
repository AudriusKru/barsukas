<?php

define('ENTER', true);
require __DIR__ . '/bootstrap.php';
//CONTROLLER REQUIREINT AGURKU CONTROLE
require DIR.'app/AgurkaiController.php';


// _d($_SERVER['REQUEST_URI']);

$uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
$uri = explode('/', $uri);

_d($uri);

//ROUTER

if ($uri[0] == 'testas' && isset($uri[1])) {
    (new AgurkaiController)->agurkuTest($uri[1]);
}
elseif (!$uri[0] == '' && count($uri)) {
    (new AgurkaiController)->index();
}

else {
    http_response_code(404);
    echo '<h1>404 PAGE NOT FOUND</h1>';
}