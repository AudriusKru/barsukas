<?php

echo '8. Uždavinio atsakymas:';
echo '<br>';

// Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.
$masyvas1 = [];
$masyvas2 = [];

foreach (range(1, 100) as $value) {
    $random = rand(100, 999);
    $masyvas1[] = $random;
    // $value = $atsitiktinis_1;
}

// print_r($masyvas1);

// echo 'Pirmas masyvas:<br>';
// print_r(array_unique($masyvas1));
// echo '<br><hr>';

foreach (range(1, 100) as $value) {
    $random = rand(100, 999);
    $masyvas2[] = $random;
}

// echo 'Antras masyvas:<br>';
// print_r(array_unique($masyvas2));

$kartojasi = array_intersect($masyvas1,$masyvas2);

echo 'Elementai pasikartojatys 6 uždavinio masyvuose:<br>';
print_r($kartojasi);