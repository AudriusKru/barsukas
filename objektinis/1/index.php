<?php


require __DIR__ . '/Kibiras1.php';

$Kibiras1 = new Kibiras1;
echo 'Pirmas užduotis:';
echo '<br><hr>';

echo "kiekPririnktaAkmenu() atsakymas: ";
echo $Kibiras1->kiekPririnktaAkmenu() . '<br><hr>';

echo "pridetiAkmeni() atsakymas: ";
$Kibiras1->prideti1Akmeni();
echo $Kibiras1->kiekPririnktaAkmenu() . '<br><hr>';

echo "pridetiDaugAkmenu() atsakymas: ";
$Kibiras1->pridetiDaugAkmenu(100);
echo $Kibiras1->kiekPririnktaAkmenu() . '<br><hr>';


//////////////////////////// Destytojo
