<?php

class Kibiras2 {

    protected $akmenuKiekis = 0;

    private static $akmenuKiekisVisuoseKibiruose = 0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
        self::$akmenuKiekisVisuoseKibiruose++;
    }

    public function pridetiAkmenu($kiekis)
    {
        if (!is_integer($kiekis)) {
            return;
        }
        $this->akmenuKiekis += $kiekis;
        self::$akmenuKiekisVisuoseKibiruose += $kiekis;
    }
    public static function kiekVisoPririnktaAkmenu() 
    {
        return self::$akmenuKiekisVisuoseKibiruose;
    }

}