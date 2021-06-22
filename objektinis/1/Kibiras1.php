<?php


class Kibiras1
{
    protected $akmenuKiekis = 10;


    public function prideti1Akmeni()
    {
        return $this->akmenuKiekis++;
    }


    public function pridetiDaugAkmenu($kiekis)
    {
        if ($kiekis < 0) {
            return "ERROR: only positie number!!!";
        }
        return $this->akmenuKiekis += $kiekis;
    }


    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }
}
