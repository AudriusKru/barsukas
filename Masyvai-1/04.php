<?php

echo '4. Uždavinio atsakymas:';
echo '<br>';

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


asort($array);

print_r($array);


// Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.