<?php


require __DIR__ . '/Pinigine.php';

$Pinigine = new Pinigine;

echo "Antra užduotis:<br><hr>";

// echo 'Metaliniai pinigai: ' .$Pinigine->ideti(rand(-2,2));
// echo '<br><hr>'; 
// echo 'Popieriniai pinigai: ' .$Pinigine->ideti(rand(-10,10));
// echo '<br><hr>'; 

// echo "Suma: ";
// echo $Pinigine->skaiciuoti();
// echo '<br><hr>'; 



//////////////////////////// Destytojo

$Pinigine->skaiciuoti();

$Pinigine->ideti(5);
$Pinigine->ideti(0.33);

$Pinigine->skaiciuoti();
