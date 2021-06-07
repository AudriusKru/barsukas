<?php

echo '9. Uždavinio atsakymas:';
echo '<br>';

// Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų antrojo masyvo.

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

$change = array_combine($masyvas1,$masyvas2);

print_r($change);






















// indeksas-pirmo masyvo reiksmes, reiksme-antro masyvo reiksmes
