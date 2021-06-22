<?php


require __DIR__ . '/Kibiras1.php';

$Kibiras1 = new Kibiras1;
echo 'Pirmas užduotis:';
echo '<br><hr>';

echo "pridetiAkmeni() atsakymas: ";
echo $Kibiras1->prideti1Akmeni();
echo '<br><hr>'; 

echo "pridetiDaugAkmenu($$ kiekis) atsakymas: ";
echo $Kibiras1->prideti1Akmeni();
echo '<br><hr>'; 

echo "kiekPririnktaAkmenu() atsakymas: ";
echo $Kibiras1->kiekPririnktaAkmenu();
echo '<br><hr>'; 
