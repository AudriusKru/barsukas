<?php


echo '3. Uždavinio atsakymas:';
echo '<br>';
echo '<br><hr>';


// sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.

$raides = ['A', 'B', 'C', 'D'];

$array = array_fill(0, 200, 0);

$a = 0;
$b = 0;
$c = 0;
$d = 0;


foreach ($array as $key => &$value) {
    $value = $raides[rand(0, count($raides)-1)];
    if ($value === 'A') {
        $a++;
    } elseif ($value === 'B') {
        $b++;
    } elseif ($value === 'C') {
        $c++;
    } else {
        $d++;
    }
}
unset($value);

// print_r($array);

echo "A iškrito: $a k.";
echo '<br>';
echo "B iškrito: $b k.";
echo '<br>';
echo "C iškrito: $c k.";
echo '<br>';
echo "D iškrito: $d k.";