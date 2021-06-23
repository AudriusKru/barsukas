<?php


class Kibiras1
{
    protected $akmenuKiekis = 0;


    public function prideti1Akmeni()
    {
        return $this->akmenuKiekis++;
    }


    public function pridetiDaugAkmenu($kiekis)
    {
        if ($kiekis < 0) {
            print "ERROR: only positie number!!!";
            return;
        }
        return $this->akmenuKiekis += $kiekis;
    }


    public function kiekPririnktaAkmenu()
    {
        return $this->akmenuKiekis;
    }
}
