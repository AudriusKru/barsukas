<?php


class Pinigine 
{
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function ideti($kiekis) 
    {
        if ($kiekis < 0) {
            return "ERROR";
        }

        if ($kiekis <= 2) {
            return $this->metaliniaiPinigai += $kiekis;
        }
        else 
        {
            return $this->popieriniaiPinigai +=$kiekis;
        }
    }
    public function skaiciuoti() 
    {
        return $this->metaliniaiPinigai + $this->popieriniaiPinigai;
    }
}