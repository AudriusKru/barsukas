<?php

// Programuotoja Zita

class Bebras
{

    // savybes

    public $name = 'Sarikas';
    protected $color = 'brown';
    private $age = 14;

    //----------------------------------------

    // metodai

    public function sayHello()
    {
        echo "<h2>Hello, $this->name!</h2
        <h4>Age: $this->age!</h4>";
    }

    public function addYear()
    {
        $this->age++;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function __get($prop)
    {
        // echo "<h3>Magic GET with $prop</h3>";
        return $this->$prop;
    }

    public function setAge($age)
    {
        // seteris reikalingas tam kad petras galetu irasyti kazkoki paramentra duomenis... tarp public ir seterio mes galim kontraliuoti tai ka iraso petras
        if (!is_integer($age)) {
            echo 'Petrai, tu pats asilas, tik skaiciai turi buti!';
            // exception
            return;
        }
        if ($age > 25) {
            echo 'Petrai, tu pats asilas, tiek bebrai negyena!';
            // exception
            return;
        }
        $this->age = $age;
    }
}
