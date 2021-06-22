<?php

// Programuotoja Zita

class Bebras
{

    // savybes

    public $name = 'Sarikas';
    protected $color;
    private $age;

    //----------------------------------------

    // metodai

    public function __A__($bla) 
    {
        echo "<h2 style=\"color:red;\">As esu kazkoks dalykas.</h2>";
    }

    public function __construct($color = 'black')
    {
        $this->color = $color;
        $this->age = rand(1, 10);
        echo "<h2>Construct !<h2>";
    }

    public function __destruct()
    {
        echo "<h2>Destruct !<h2>";
    }

    public function sayHello()
    {
        echo "<h2>Hello, $this->name!</h2
        <h4>Color: $this->color</h4>
        <h4>Age: $this->age</h4>";
    }

    public function addYear()
    {
        $this->age++;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function __set($prop, $value)
    {

        // _d("kintamasis age yra lygus: $prop");
        // die;

        if ($prop == 'age') {
            if (!is_integer($value)) {
                echo 'Petrai, tu pats asilas, tik skaiciai turi buti!';
                // exception
                return;
            }
            if ($value > 25) {
                echo 'Petrai, tu pats asilas, tiek bebrai negyena!';
                // exception
                return;
            }
            $this->age = $value;
        }
        echo 'Petrai, tu pats asilas. Tu to daryti negali';
        // $this->$prop = $value;
    }

    public function __get($prop)
    {
        // if (!in_array($prop, ['age', 'color'])) {
        //     return null;
        // }

        if ($prop == 'color') {
            return null;
        }

        if ($prop == 'rand') {
            return $this->randomNumber();
        }

        // echo "<h3>Magic GET with $prop</h3>";
        return $this->$prop;
    }

    public function __call($name, $arguments)
    {
        //return $this->randoNumber(1000);
        return $this->{$name}(...$arguments);
    }

    private function randomNumber($time)
    {
        return rand(10, 99) * $time;
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
