<?php

echo '5. Uždavinio atsakymas:';
echo '<br>';

$masyvas = range(0, 30);

foreach ($masyvas as $xxx => $value_xxx) {
    $masyvas[$xxx] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
}

print_r($masyvas);