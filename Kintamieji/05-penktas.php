<?php

// 5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. (sprendimui masyvo nenaudoti).

echo '5. Uždavinio atsakymas:';
echo '<br>';

$a = rand(0, 2);
$b = rand(0, 2);
$c = rand(0, 2);
$d = rand(0, 2);

echo "Pirmas skaičius: $a";
echo '<br>';
echo "Antras skaičius: $b";
echo '<br>';
echo "Trečias skaičius: $c";
echo '<br>';
echo "Ketvirtas skaičius: $d";

echo '<br>';echo '<br><hr>';echo '<br>';

$nulis = 0;
$vienas = 0;
$du = 0;

if ($a == 0) {
    $nulis++;
} elseif ($a == 1) {
    $vienas++;
} else {
    $du++;
}

if ($b == 0) {
    $nulis++;
} elseif ($b == 1) {
    $vienas++;
} else {
    $du++;
}

if ($c == 0) {
    $nulis++;
} elseif ($c == 1) {
    $vienas++;
} else {
    $du++;
}

if ($d == 0) {
    $nulis++;
} elseif ($d == 1) {
    $vienas++;
} else {
    $du++;
}

echo "Skaičius 0 iškrito: $nulis k.";
echo '<br>';
echo "Skaičius 1 iškrito: $vienas k.";
echo '<br>';
echo "Skaičius 2 iškrito: $du k.";
echo '<br>';

