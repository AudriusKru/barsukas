<?php


require __DIR__ . '/Pinigine.php';

$Pinigine = new Pinigine;

echo "Antra užduotis:<br><hr>";

echo 'Metaliniai pinigai: ' .$Pinigine->ideti(rand(0, 2));
echo '<br><hr>'; 
echo 'Popieriniai pinigai: ' .$Pinigine->ideti(rand(2.5, 10));
echo '<br><hr>'; 

echo "Suma: ";
echo $Pinigine->skaiciuoti();
echo '<br><hr>'; 
