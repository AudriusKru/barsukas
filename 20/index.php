<?php
namespace Zoo;
//short code
use Zoo\Animal;
use Australia\Animal as AnimalA;
use Belgium\Animal as B;

require __DIR__.'/australai/Animal.php';
require __DIR__.'/belgai/Animal.php';
require __DIR__.'/Animal.php';

//php siulo funkcija sp_autoload();




echo Animal::$hello;
// new Animal;
echo '<br>';
echo AnimalA::$go;
// new AnimalA;
echo '<br>';
echo Animal::$go;
// new B;


