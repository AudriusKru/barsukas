<?php

echo '1. Uždavinio atsakymas:';
echo '<br>';


// salyga:
// Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.



// $elemetai = 30;

// for ($i = 0; $i < $elemetai; $i++) { 
//     $masyvas[] = rand(5, 25);
// }

$elemetai = 30;
$masyvas = array_fill(0, $elemetai, ' ');
foreach ($masyvas as $index => &$random) {
    $random = rand(5, 25);
}
unset($random);

echo '<br>';echo '<br><hr>';echo '<br>';
