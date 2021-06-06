<?php

echo "5-as uzdavinys";
echo "<br>";
echo "<br>";

$raides = ['A', 'B', 'C', 'D'];
$raidziuMasyvas1 = array_fill(0, 200, 0);

foreach ($raidziuMasyvas1 as $key => &$value) {
    $value = $raides[rand(0, count($raides)-1)];
}
unset($value);

$raidziuMasyvas2 = array_fill(0, 200, 0);

foreach ($raidziuMasyvas2 as $key => &$value) {
    $value = $raides[rand(0, count($raides)-1)];
}
unset($value);

$raidziuMasyvas3 = array_fill(0, 200, 0);

foreach ($raidziuMasyvas3 as $key => &$value) {
    $value = $raides[rand(0, count($raides)-1)];
}
unset($value);

$didelisMasyvas = [];

foreach ($raidziuMasyvas1 as $key => $value) {
    $didelisMasyvas[] = $value . $raidziuMasyvas2[$key] . $raidziuMasyvas3[$key];
}

print_r($didelisMasyvas);

