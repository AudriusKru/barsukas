<?php

$masyvas = [];

//masyas kuriamas su fopreah

foreach (range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}

_d($masyvas, 'mano masyvas');

//2---------------------------2

$max = 5;
$indexes = [];

foreach($masyvas as $key => $val) {

    if ($val > $max) {
        $max = $val;
        $indexes = [];
    }
    if ($val === $max) {
        $indexes[] = $key;
    }
}

_d($maxs, 'max');
_d($indexes, 'indexes');