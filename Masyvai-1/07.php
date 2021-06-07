<?php

echo '7. Uždavinio atsakymas:';
echo '<br>';

// Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.


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

$skirtingi = array_diff($masyvas1,$masyvas2);

echo "Reikšmės kurios yra tik pirmame masyve:<br>";
print_r($skirtingi);