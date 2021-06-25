<?php


require __DIR__ . '/Kibiras2.php';

$Kibiras2 = new Kibiras2;
echo 'Trečia užduotis:';
echo '<br><hr>';

$kibirasA = new Kibiras2;
$kibirasB = new Kibiras2;
$kibirasC = new Kibiras2;

_d($kibirasA->kiekPririnktaAkmenu(), 'A');
_d($kibirasB->kiekPririnktaAkmenu(), 'B');
_d(Kibiras1::kiekVisoPririnktaAkmenu(), 'VISO');

// $kibirasA->prideti1Akmeni();
// $kibirasB->prideti1Akmeni();
// $kibirasC->prideti1Akmeni();
// $kibirasA->pridetiDaugAkmenu(10);
// $kibirasB->pridetiDaugAkmenu(5);

// _d($kibirasA->kiekPririnktaAkmenu(), 'A');
// _d($kibirasB->kiekPririnktaAkmenu(), 'B');
// _d(Kibiras2::kiekVisoPririnktaAkmenu(), 'VISO');

// $KibirasA->Kibiras2::getKibiras(5);

// var_dump($KibirasA);