<?php


class Kibiras3
{
    protected $akmenuKiekis = 0;

    protected static $visasAkmenuKiekis = 0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis;
        self::$visasAkmenuKiekis++;
    }
    public function pridetiDaugAkmenu($kiekis)
    {
        if (!is_integer($kiekis)) {
            return;
        }
        $this->akmenuKiekis += $kiekis;
        self::$visasAkmenuKiekis += $kiekis;
    }

    public function kiekPririnktaAkmenu() 
    {
        return $this->akmenuKiekis;
    }

}

class KibirasNePo1 extends Kibiras3
{

    public function Prideti1Akmeni()
    {
        $this->akmenuKiekis+=rand(2, 5);
    }

}