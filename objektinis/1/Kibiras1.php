<?php


// class Kibiras1
// {
//     protected $akmenuKiekis = 0;


//     public function prideti1Akmeni()
//     {
//         return $this->akmenuKiekis++;
//     }


//     public function pridetiDaugAkmenu($kiekis)
//     {
//         if ($kiekis < 0) {
//             return "ERROR: only positive number!!!";
//             
//         }
//         return $this->akmenuKiekis += $kiekis;
//     }


//     public function kiekPririnktaAkmenu()
//     {
//         return $this->akmenuKiekis;
//     }
// }


//////////////////////////// Destytojo

class Kibiras1
{

    protected $akmenuKiekis = 0;

    //////////////////////////
    protected static $visasAkmenuKiekis = 0;

    public function prideti1Akmeni()
    {
        $this->akmenuKiekis++;
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

///////////////////////////
    
    public static function kiekVisoPririnktaAkmenu() 
    {
        return self::$visasAkmenuKiekis;
    }
}
