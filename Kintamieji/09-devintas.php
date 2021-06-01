<?php

// 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus apvalinkite iki sveiko skaičiaus.

$pirma_reiksme = rand(0, 100);
$antra_reiksme = rand(0, 100);
$trecia_reiksme = rand(0, 100);

echo "Pirma reikšmė: $pirma_reiksme";
echo '<br>';
echo "Antra reikšmė: $antra_reiksme";
echo '<br>';
echo "Trečia reikšmė: $trecia_reiksme";
echo '<br>';echo '<br><hr>';echo '<br>';

$vidurkis = round(($pirma_reiksme + $antra_reiksme + $trecia_reiksme) / 3);
echo "Aritmetinis vidurkis yra $vidurkis";
echo '<br>';
 
if ( 10 < $pirma_reiksme && $pirma_reiksme < 90 && 10 < $antra_reiksme && $antra_reiksme < 90 && 10 < $trecia_reiksme && $trecia_reiksme < 90) {
    $vidurkis = round(($pirma_reiksme + $antra_reiksme + $trecia_reiksme) / 3);
    echo "Antra aritmetinis vidurkis yra $vidurkis";
}

