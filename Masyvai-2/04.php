<?php

echo '5. Uždavinio atsakymas:';
echo '<br>';

$masyvas = array_fill(0, 30, 0);

foreach ($masyvas as $xxx => $value_xxx) {
    $masyvas[$xxx] = ['user_i' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
}

_d($masyvas);