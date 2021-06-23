<?php

class Tv
{

    protected $istrizaine;
    public $kanalai = [1 => 'TV3', 2 => 'LRT', 3 => 'Polonia'];


    public function __construct($ist)
    {
        $this->istrizaine = $ist;
    }

    public function rodyti($kanalas)
    {
        echo '<h1>ROOOODOOM: '.$this->kanalai[$kanalas].'</h1>';
    }
}
