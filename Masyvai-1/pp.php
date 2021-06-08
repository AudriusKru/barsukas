<?php

$masyvas3 = array_fill(0, 30, '');
foreach ($masyvas3 as $ii => $value_ii) {
    $masyvas3[$ii] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
}
_d($masyvas3, '5-5');