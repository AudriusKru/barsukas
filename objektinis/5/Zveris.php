<?php

class Zveris extends Miskas
{


    protected function papasakok()
    {
        echo "Aš esu žvėris vardu $this->name.";
        $miskas = new Miskas('Prienų šilas');
        return $miskas->papasakok();
    }

    public function __call($name, $argument)
    {   
        return $this->{$name}();
    }


}