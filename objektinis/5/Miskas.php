<?php

class Miskas
{
    protected $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    protected function papasakok()
    {
        echo '<br>';
        return "Aš gyvenu miške pavadintame $this->name , o kur tu?";
    }

}