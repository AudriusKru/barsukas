<?php

echo '7. Uždavinio atsakymas:';
echo '<br>';


$masyvas = range(0, 30);

foreach ($masyvas as $xxx => $value_xxx) {
    $masyvas[$xxx] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
}

// print_r($masyvas);

echo
usort($masyvas, function($a, $b) {
    return $a['user_id'] <=> $b['user_id'];
});

// print_r($masyvas);
echo '<br><hr>';


usort($masyvas, function($a, $b) {
    return $b['place_in_row'] <=> $a['place_in_row'];
});

// print_r($masyvas);


//-------------------------------------------------------------------------------------

