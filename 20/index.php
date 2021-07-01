<?php

namespace Zoo;
//short code
use Zoo\Animal;
use Australia\Animal as AnimalA;
use Belgium\Animal as B;

//php siulo funkcija sp_autoload();

spl_autoload_register(function ($class) {

    echo "<h3>1. Nerandu klasės: $class.</h3>";
    echo '<br>';
});


spl_autoload_register(function ($class) {

    echo "2. Nerandu klasės: $class.";
    echo '<br>';
    require __DIR__ . '/australai/Animal.php';
});

spl_autoload_register(function ($class) {

    echo "<h3>3. Nerandu klasės: $class.</h3>";
    echo '<br>';
});


// 
require __DIR__ . '/belgai/Animal.php';
require __DIR__ . '/Animal.php';


echo Animal::$hello;
// new Animal;
echo '<br>';
echo AnimalA::$go;
// new AnimalA;
echo '<br>';
echo Animal::$go;
// new B;
