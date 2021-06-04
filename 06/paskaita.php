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

_d($max, 'max');
_d($indexes, 'indexes');


/// 222222222hhhhhh

reset($masyvas);

_d(current($masyvas));

_d(key($masyvas));

next($masyvas);

_d(current($masyvas));

_d(key($masyvas));

reset($masyvas);


do {

    _d(current($masyvas), key($masyvas));

next($masyvas);

} while (key($masyvas)!==null);

//galima resetint