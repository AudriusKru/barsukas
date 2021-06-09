<?php

echo '5. Uždavinio atsakymas:<br>';

for ($i = 0; $i < 100; $i++) { 
    $masyvas[] = rand(333, 777);
}
usort($masyvas, function($a, $b) {
    return $b <=> $a;
});

print_r($masyvas);


//----------------------------------destytojo

function divisor(int $digit) : int
{
    if ($digit === 0 || $digit === 1) {
        return 1;
    }
    if ($digit === 2) {
        return 0;
    }
    $divisor = range(2, $digit - 1);
    // $div = 0;
    $div_counter = 0;
    foreach($divisor as $div) {
        if ($digit % $div === 0) {
            $div_counter++;
        }
    }
    return $div_counter;
}
// cia ketirtas
//---------------------------5----------------

$mas100 = [];

foreach(range(1, 100) as $_) {
    $mas100[] = rand(33, 77);
}

usort($mas100, function($a, $b) {
    static $cache = [];

    if (!isset($cache[$a])) {
        $cache[$a] = divisor($a);
    }
    if (!isset($cache[$b])) {
        $cache[$b] = divisor($b);
    }

    return divisor($b) <=> divisor($a);
});

_d($mas100);