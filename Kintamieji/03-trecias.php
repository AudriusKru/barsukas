<?php

// 3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį vidurinę reikšmę.

echo '3. Uždavinio atsakymas:';
echo '<br>';

$pirmas_kintamasis = rand(0, 25);
$antras_kintamasis = rand(0, 25);
$trecias_kintamasis = rand(0, 25);

echo "Pirmas kintamasis: $pirmas_kintamasis";
echo '<br>';
echo "Antras kintamasis: $antras_kintamasis";
echo '<br>';
echo "Trečias kintamasis: $trecias_kintamasis";
echo '<br>';

if ($pirmas_kintamasis > $antras_kintamasis && $pirmas_kintamasis < $trecias_kintamasis) {
    if ($pirmas_kintamasis < $antras_kintamasis && $pirmas_kintamasis > $trecias_kintamasis) {
        echo "Vidurinę reikšmę turi pirmasis kintamasis ir ji yra: $pirmas_kintamasis";
    }
    echo "Vidurinę reikšmę turi pirmasis kintamasis ir ji yra: $pirmas_kintamasis";
} elseif ($antras_kintamasis > $pirmas_kintamasis && $antras_kintamasis < $trecias_kintamasis) {
    if ($antras_kintamasis < $pirmas_kintamasis && $antras_kintamasis > $trecias_kintamasis) {
        echo "Vidurinę reikšmę turi antrasis kintamasis ir ji yra: $antras_kintamasis";
    }
    echo "Vidurinę reikšmę turi antrasis kintamasis ir ji yra: $antras_kintamasis";
} elseif ($trecias_kintamasis > $pirmas_kintamasis && $trecias_kintamasis < $antras_kintamasis) {
    if ($trecias_kintamasis < $pirmas_kintamasis && $trecias_kintamasis > $antras_kintamasis) {
        echo "Vidurinę reikšmę turi trečias kintamasis ir ji yra: $trecias_kintamasis";
    }
    echo "Vidurinę reikšmę turi trečias kintamasis ir ji yra: $trecias_kintamasis";
} else {
    echo 'Kažkas ne taip arba kažkurie skaičiai vienodi';
}