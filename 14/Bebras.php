<?php

// Programuotoja Zita

class Bebras
{

    // savybes

    public $name = 'Sarikas';
    protected $color = 'brown';
    private $age = 24;

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
}
