<?php

// Programuotojas Petras

require __DIR__ . '/Bebras.php';

$bebras1 = new Bebras('blue');
$bebras2 = new Bebras;
$bebras3 = $bebras1;

// echo 'pradzia';
echo '<pre>';
// var_dump($bebras1);
// echo '<br>';
// var_dump($bebras2);
// echo '<br>';
// var_dump($bebras3);
// echo '<br>';

$bebras2->name = 'Bobikas';

// echo $bebras1->randomNumber(1000);


// echo $bebras1->getAge();

// $bebras2->setAge(8);
// $bebras2->color =20;


// $bebras2->addYear();
// $bebras2->addYear();

$bebras1->sayHello();
$bebras2->sayHello();

// echo 'pabaiga';
