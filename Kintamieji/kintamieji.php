<?php

// 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

echo '1. Uždavinio atsakymas:';
echo '<br>';

$vardas = 'Audrius ';
$pavarde = 'Audriusevicius';

$vardenis_pavardenis = $vardas . $pavarde;
// echo $vardenis_pavardenis; 

$gimimo_metai = 1975;
$dabartiniai_metai = 2008;

$dabartinis_amzius = $dabartiniai_metai - $gimimo_metai;
// echo $dabartinis_amzius;

$sakinys = "Aš esu $vardenis_pavardenis. Man yra $dabartinis_amzius metai(ų)";

echo $sakinys;
echo '<br>';

// 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės. Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.

echo '2. Uždavinio atsakymas:';
echo '<br>';

$pirmas_kintamasis = rand(0, 4);
$antras_kintamasis = rand(0, 4);

echo "Pirma reikšmė: $pirmas_kintamasis";
echo '<br>';
echo "Antra reikšmė: $antras_kintamasis";
echo '<br>';





if ($pirmas_kintamasis > $antras_kintamasis) {
    if ($antras_kintamasis <= 0) {
        echo 'Netinkamas rezultatas';
    }
    $pirma_reiksme = $pirmas_kintamasis / $antras_kintamasis;
    $pirma_reiksmes_number_format = number_format($pirma_reiksme, 2, '.', '');
    echo "Pirmą reikšmę padalinę iš antros, gauname: $pirma_reiksmes_number_format";
} elseif ($pirmas_kintamasis < $antras_kintamasis) {
    if ($pirmas_kintamasis <= 0) {
        echo 'Netinkamas rezultatas';
    }
    $antra_reiksme =  $antras_kintamasis / $pirmas_kintamasis;
    $antra_reiksmes_number_format = number_format($antra_reiksme, 2, '.', '');
    echo "Antrą reikšmę padalinę iš pirmos, gauname: $antra_reiksmes_number_format";
} elseif ($pirmas_kintamasis === $antras_kintamasis) {
    echo 'Skaičiai lygūs';
} else {
    echo 'Kažkas ne to';
}