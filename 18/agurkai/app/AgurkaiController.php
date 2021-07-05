<?php

//namespace

namespace Bank;
use App\DB\DataBase;

class AgurkaiController {


    public function agurkuTest($wahatToSay)
    {
        $labas = 'Hello, little One';
        return App::view('test', compact('wahatToSay', 'labas'));
    }

    public function index()
    {
        return App::view('home');
    }

    public function create()
    {
        return App::view('create_box');
    }

    public function save()
    {
        $box = ['id' => rand(10000000, 99999999), 'amount' => 0]; // be garantiju unikalumui;
        DataBase::getJson()->create($box);
        App::redirect();
    }
}