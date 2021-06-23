<?php

class Tv
{

    protected $istrizaine;
    private static $kanalai = [1 => 'TV3', 2 => 'LRT', 3 => 'Polonia'];

    public function __construct($ist)
    {
        $this->istrizaine = $ist;
    }

    public function rodyti($kanalas)
    {
        echo '<h1>ROOOODOOM: '.self::$kanalai[$kanalas].'</h1>'; // pakeiciam kai atsiranda static 
        // echo '<h1>ROOOODOOM: '.$this->kanalai[$kanalas].'</h1>';
    }

    public static function keistiPrograma($kanalas, $pavvadinimas)
    {
        self::$kanalai[$kanalas] = $pavvadinimas;
    }
}