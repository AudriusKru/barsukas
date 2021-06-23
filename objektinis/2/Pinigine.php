<?php


class Pinigine
{
    private $popieriniaiPinigai;
    private $metaliniaiPinigai;

    public function ideti($kiekis)
    {
        if ($kiekis < 0) {
            return "ERROR: bandyta atimti pinigus.";
        } elseif ($kiekis <= 2) {
            return $this->metaliniaiPinigai += $kiekis;
        } else {
            return $this->popieriniaiPinigai += $kiekis;
        }
    }
    public function skaiciuoti()
    {
        echo $this->metaliniaiPinigai + $this->popieriniaiPinigai;
    }
}



//////////////////////////// Destytojo