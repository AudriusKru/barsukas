<?php


// require __DIR__ . '/Kibiras1.php';

// $Kibiras1 = new Kibiras1;
// echo 'Pirmas užduotis:';
// echo '<br><hr>';

// echo "kiekPririnktaAkmenu() atsakymas: ";
// echo $Kibiras1->kiekPririnktaAkmenu() . '<br><hr>';

// echo "pridetiAkmeni() atsakymas: ";
// $Kibiras1->prideti1Akmeni();
// echo $Kibiras1->kiekPririnktaAkmenu() . '<br><hr>';

// echo "pridetiDaugAkmenu() atsakymas: ";
// $Kibiras1->pridetiDaugAkmenu(100);
// echo $Kibiras1->kiekPririnktaAkmenu() . '<br><hr>';


//////////////////////////// Destytojo

require __DIR__ . '/Kibiras1.php';

$kibirasA = new Kibiras1;
$kibirasB = new Kibiras1;

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');

$kibirasA->prideti1Akmeni();
$kibirasA->prideti1Akmeni();
$kibirasB->prideti1Akmeni();
$kibirasA->pridetiDaugAkmenu(10);
$kibirasB->pridetiDaugAkmenu(5);

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');



