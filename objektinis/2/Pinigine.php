<?php


// class Pinigine
// {
//     private $popieriniaiPinigai;
//     private $metaliniaiPinigai;

//     public function ideti($kiekis)
//     {
//         if ($kiekis < 0) {
//             return "ERROR: bandyta atimti pinigus.";
//         } elseif ($kiekis <= 2) {
//             return $this->metaliniaiPinigai += $kiekis;
//         } else {
//             return $this->popieriniaiPinigai += $kiekis;
//         }
//     }
//     public function skaiciuoti()
//     {
//         echo $this->metaliniaiPinigai + $this->popieriniaiPinigai;
//     }
// }



//////////////////////////// Destytojo


class Pinigine
{
    private $popieriniaiPinigai = 0;
    private $metaliniaiPinigai = 0;

    public function ideti(float $kiekis)
    {
        if ($kiekis < 2) {
            $this->metaliniaiPinigai += $kiekis;
        }
        else {
            $this->popieriniaiPinigai += $kiekis;
        }
    }
    public function skaiciuoti() 
    {
        echo $this->metaliniaiPinigai + $this->popieriniaiPinigai;
        echo '<br><hr>'; 
    }
}
