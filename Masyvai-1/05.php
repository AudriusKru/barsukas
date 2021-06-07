<?php

echo '5. Uždavinio atsakymas:';
echo '<br>';


// Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių kombinacijų gavote.

$raides = ['A', 'B', 'C', 'D'];

$array1 = array_fill(0, 200, 0);

foreach ($array1 as $key => &$value) {
    $value = $raides[rand(0, count($raides)-1)];
}
unset($value);

$array2 = array_fill(0, 200, 0);

foreach ($array2 as $key => &$value) {
    $value = $raides[rand(0, count($raides)-1)];
}
unset($value);

$array3 = array_fill(0, 200, 0);

foreach ($array3 as $key => &$value) {
    $value = $raides[rand(0, count($raides)-1)];
}
unset($value);

$didelis_masyvas = [];

foreach($array1 as $key => $value) {
    $didelis_masyvas[] = $value . $array2[$key] . $array3[$key];
}

print_r($didelis_masyvas);
echo '<br><hr>';

$non_value = [];
$valueCount = array_count_values($didelis_masyvas);

foreach($valueCount as $key => $value) {
    if($value === 1) {
        $non_value[] = $key;
    }
}

echo 'Nesikartojančios reikšmės:' .'<br>';
print_r($non_value);
echo '<br><hr>';
echo 'Unikalios kombinacijos:' .'<br>';
print_r(array_keys($valueCount));
echo '<br>';