<?php

class AgurkaiController {


    public function agurkuTest($say)
    {
        return App::view('test', ['$whatToSay' => $say]);
    }

    public function index()
    {
        return App::view('home');
    }


}