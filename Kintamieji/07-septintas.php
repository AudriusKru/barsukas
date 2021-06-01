<?php

// 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 turi būti žali, 0 - raudonas, didesni už 0 mėlyni. 

echo '7. Uždavinio atsakymas:';
echo '<br>';

$pirmas_skaicius = rand(-10, 10);
$antras_skaicius = rand(-10, 10);
$trecias_skaicius = rand(-10, 10);

echo "Atsitiktiniams skaičiams priskirti spalvas: jei skaičius < 0 (žalia), jei skaičius = 0 (raudona), jei skaičius > 0 (mėlyna).";
echo '<br>';
echo "Pirmas skaičius: $pirmas_skaicius";
echo '<br>';
echo "Antras skaičius: $antras_skaicius";
echo '<br>';
echo "Trečias skaičius: $trecias_skaicius";
echo '<br>';echo '<br><hr>';echo '<br>';


if ($pirmas_skaicius < 0) {
    echo "<font color='green'>Iškritęs pirmas skaičius yra: $pirmas_skaicius jam priskirta spala yra žalia.</font>";
    echo '<br>';
} elseif ($pirmas_skaicius == 0) {
    echo "<font color='red'>Iškritęs pirmas skaičius yra: $pirmas_skaicius jam priskirta spala yra raudona.</font>";
    echo '<br>';
} else {
    echo "<font color='blue'>Iškritęs pirmas skaičius yra: $pirmas_skaicius jam priskirta spala yra mėlyna.</font>";
    echo '<br>';
}

if ($antras_skaicius < 0) {
    echo "<font color='green'>Iškritęs antras skaičius yra: $antras_skaicius jam priskirta spala yra žalia.</font>";
    echo '<br>';
} elseif ($antras_skaicius == 0) {
    echo "<font color='red'>Iškritęs antras skaičius yra: $antras_skaicius jam priskirta spala yra raudona.</font>";
    echo '<br>';
} else {
    echo "<font color='blue'>Iškritęs antras skaičius yra: $antras_skaicius jam priskirta spala yra mėlyna.</font>";
    echo '<br>';
}

if ($trecias_skaicius < 0) {
    echo "<font color='green'>Iškritęs trečias skaičius yra: $trecias_skaicius jam priskirta spala yra žalia.</font>";
    echo '<br>';
} elseif ($trecias_skaicius == 0) {
    echo "<font color='red'>Iškritęs trečias skaičius yra: $trecias_skaicius jam priskirta spala yra raudona.</font>";
    echo '<br>';
} else {
    echo "<font color='blue'>Iškritęs trečias skaičius yra: $trecias_skaicius jam priskirta spala yra mėlyna.</font>";
    echo '<br>';
}

