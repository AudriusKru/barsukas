<?php

// 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

echo '2. Uždavinio atsakymas:';
echo '<br>';

$pirmas_kintamasis = rand(0, 4);
$antras_kintamasis = rand(0, 4);

echo "Pirma reikšmė: $pirmas_kintamasis";
echo '<br>';
echo "Antra reikšmė: $antras_kintamasis";
echo '<br>';

if ($pirmas_kintamasis != 0 && $antras_kintamasis != 0) {
    if ($pirmas_kintamasis > $antras_kintamasis){
        $pirma_reiksmes_round = round($pirmas_kintamasis / $antras_kintamasis, 2);
        echo "Pirmą reikšmę padalinę iš antros, gauname: $pirma_reiksmes_round";
    } elseif ($pirmas_kintamasis < $antras_kintamasis) {
        $antra_reiksmes_round = round($antras_kintamasis / $pirmas_kintamasis, 2);
        echo "Antrą reikšmę padalinę iš pirmos, gauname: $antra_reiksmes_round";
    } elseif ($pirmas_kintamasis == $antras_kintamasis) {
        echo 'Skaičiai lygūs';
    } else {
        echo 'Kažkas ne taip';
    }
}
else echo 'ERROR: Cannot be zero.';


// $pirma_reiksme = $pirmas_kintamasis / $antras_kintamasis;
// $pirma_reiksmes_number_format = number_format($pirma_reiksme, 2, '.', '');

// $antra_reiksme =  $antras_kintamasis / $pirmas_kintamasis;
// $antra_reiksmes_number_format = number_format($antra_reiksme, 2, '.', '');


// if ($pirmas_kintamasis > $antras_kintamasis) {
//     if ($antras_kintamasis === 0) {
//         echo 'Netinkamas rezultatas';
//     }
//     echo "Pirmą reikšmę padalinę iš antros, gauname: $pirma_reiksmes_number_format";
// } elseif ($pirmas_kintamasis < $antras_kintamasis) {
//     if ($pirmas_kintamasis === 0) {
//         echo 'Netinkamas rezultatas';
//     }
//     echo "Antrą reikšmę padalinę iš pirmos, gauname: $antra_reiksmes_number_format";
// } elseif ($pirmas_kintamasis === $antras_kintamasis) {
//     echo 'Skaičiai lygūs';
// } else {
//     echo 'Kažkas ne taip';
// }