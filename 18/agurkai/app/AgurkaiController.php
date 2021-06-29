<?php

class AgurkaiController {


    public function agurkuTest($whatToSay)
    {
        return App::view('test', compact('whatToSay'));
    }

    public function index()
    {
        return App::view('home');
    }


}