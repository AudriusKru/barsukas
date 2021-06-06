<?php

echo "<br>";
echo "<br>";
echo "3-ias uzdavinys";
echo "<br>";
echo "<br>";

$raides = ['A', 'B', 'C', 'D'];
$raidziuMasyvas = array_fill(0, 200, 0);
$a = 0;
$b = 0;
$c = 0;
$d = 0;

foreach ($raidziuMasyvas as $key => &$value) {
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

print_r($raidziuMasyvas);
echo "<br>";
echo "<br>";
echo "A pasikartojo $a kartus, B - $b, C - $c, D - $d.";

