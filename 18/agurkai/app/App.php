<?php

namespace Bank;

class App {

    public static function start()
    {
        ob_start();
        self::router();
        ob_end_flush();
    }

    public static function view($file, $data = [])
    {
        extract($data);
        require DIR.'views/'.$file.'.php';
    }

    public static function redirect($path = '') 
    {
        header('Location: ' .URL. $path);
        die;
    }

    private static function router()
    {
        $uri = str_replace(INSTALL_DIR, '', $_SERVER['REQUEST_URI']);
        $uri = explode('/', $uri);

        if ('create-box' == $uri[0]) {
            if ('GET' == $_SERVER['REQUEST_METHOD']) {
                return (new AgurkaiController)->create();
            }
            else {
                return (new AgurkaiController)->save();
            }
        }

        if ($uri[0] == 'testas' && isset($uri[1])) {
            return (new AgurkaiController)->agurkuTest($uri[1]);
        }
        if ($uri[0] === '' && count($uri) === 1) {
            return (new AgurkaiController)->index();
        }

        self::view('404');
        http_response_code(404);

    }
}