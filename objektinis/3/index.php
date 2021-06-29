<?php


require __DIR__ . '/Kibiras2.php';

$Kibiras2 = new Kibiras2;
echo 'Trečia užduotis:';
echo '<br><hr>';

$kibiras1 = new Kibiras2;
$kibiras2 = new Kibiras2;
$kibiras3 = new Kibiras2;

$kibiras1->prideti1Akmeni();
$kibiras2->prideti1Akmeni();

echo $Kibiras1::kiekVisoPririnktaAkmenu()


// _d($kibirasA->kiekPririnktaAkmenu(), 'A');
// _d($kibirasB->kiekPririnktaAkmenu(), 'B');
// _d(Kibiras2::kiekVisoPririnktaAkmenu(), 'VISO');
$kibiras2->kiekPririnktaAkmenu();

// $KibirasA->Kibiras2::getKibiras(5);

// var_dump($KibirasA);