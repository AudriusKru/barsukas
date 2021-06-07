<?php

echo '6. Uždavinio atsakymas:';
echo '<br>';


// Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).

$masyvas1 = [];
$masyvas2 = [];

foreach (range(1, 100) as $value) {
    $random = rand(100, 999);
    $masyvas1[] = $random;
    // $value = $atsitiktinis_1;
}

// print_r($masyvas1);

echo 'Pirmas masyvas:<br>';
print_r(array_unique($masyvas1));
echo '<br><hr>';

foreach (range(1, 100) as $value) {
    $random = rand(100, 999);
    $masyvas2[] = $random;
}

echo 'Antras masyvas:<br>';
print_r(array_unique($masyvas2));