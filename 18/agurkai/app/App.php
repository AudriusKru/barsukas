<?php

class App {

    public static start()
    {
        ob_start();
        $output = self::router();
        ob_end_clean();
        echo $output;
    }


    private static function router()
    {
    
        $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri);

        _d($uri);


    // ROUTER

if ($uri[0] == 'testas' && isset($uri[1])) {
    return (new AgurkaiController)->agurkuTest($uri[1]);
}
if ($uri[0] === '' && count($uri) === 1) {
    return (new AgurkaiController)->index();
}
    http_response_code(404);
    
}