<?php

// 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija nuo 5 iki 3000.

echo '8. Uždavinio atsakymas:';
echo '<br>';

$zvakes = rand(5, 3000);

echo "Vienos žvakės kaina 1 EUR.";
echo '<br>';
echo "Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida";
echo '<br>';
echo "Perkant daugiau kaip už 2000 EUR taikoma 4 % nuolaida";
echo '<br>';echo '<br><hr>';echo '<br>';

echo "Perkamų žvakių kiekis: $zvakes";
echo '<br>';echo '<br><hr>';echo '<br>';

if ($zvakes < 1000) {
    echo "Perkamų žvakių kiekis yra $zvakes ir už jas mokama po 1eur.";
} elseif ($zvakes > 1000 && $zvakes < 2000) {
    $nuolaida = $zvakes * 0.03;
    $kaina_zvakiu = $zvakes - $nuolaida;
    $vnt_kaina = $kaina_zvakiu / $zvakes;
    echo "Perkamų žvakių kiekis yra $zvakes ir už jas mokama: $kaina_zvakiu eur., tai yra $vnt_kaina eur. už 1vnt.";
} else {
    $nuolaida = $zvakes * 0.04;
    $kaina_zvakiu = $zvakes - $nuolaida;
    $vnt_kaina = $kaina_zvakiu / $zvakes;
    echo "Perkamų žvakių kiekis yra $zvakes ir už jas mokama: $kaina_zvakiu eur., tai yra $vnt_kaina eur. už 1vnt.";
}