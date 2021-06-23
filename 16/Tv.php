<?php

class Tv
{

    protected $istrizaine;
    public static $kanalai = [1 => 'TV3', 2 => 'LRT', 3 => 'Polonia'];


    public function __construct($ist)
    {
        $this->istrizaine = $ist;
    }

    public function rodyti($kanalas)
    {
        echo '<h1>ROOOODOOM: '.self::$kanalai[$kanalas].'</h1>';
    }

    public static function keistiPrograma($kanalas, $pavadinimas)
    {
        self::$kanalai[$kanalas] = $pavadinimas;
    }

}
