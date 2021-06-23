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
        if (isset(self::$kanalai[$kanalas])) {
            self::$kanalai[$kanalas] = $pavvadinimas;
        }
    }

    public static function pridetiPrograma($kanalas, $pavvadinimas)
    {
        if (!isset(self::$kanalai[$kanalas])) {
            if (is_integer($kanalas)) {
                if ($kanalas > 0 && $kanalas <=500) {
                    self::$kanalai[$kanalas] = $pavvadinimas;
                }   
            }
        }    
    }
}