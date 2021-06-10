<?php

$masyvas = [];
    foreach(range(1, 3) as $_) {
        $masyvas [] = rand(1, 33);
    }
    while (isPrime($masyvas[(count($masyvas) - 1)]) > 0 || 
           isPrime($masyvas[(count($masyvas) - 2)]) > 0 || 
           isPrime($masyvas[(count($masyvas) - 3)]) > 0) {
        $masyvas[] = rand(1, 33);
    }

    _d($masyvas, '9 uzduotis')



//-------------------- 
oreach (range(1, 3) as $key => $value) {

    $masyvas[] = rand(1, 33);

}



$run = 1;

$from = 0;

while ($run == 1) {
    $prime = true;
    $row = 0;

    for ($i = $from; $i < count($masyvas); $i++) {
        if (modulus($masyvas[$i]) == 0 && $masyvas[$i] != 1) {
            $row++;
        } else {
            $prime = false;
        }
    }
    if ($prime == false) {
        $from++;
        $masyvas[] = rand(1, 33);
    }
    if ($row == 3) {
        $run = 0;
    }
}

_d($masyvas, '9');

//---------------------------

function galeNebutuPirminiu(&$m){
    for($i = count($m) - 1; $i > count($m) - 4; $i--){
    if(dalikliai($m[$i]) != 0){
    $m[] = rand(1, 33);
    galeNebutuPirminiu($m);
    }
    }
    return $m;
    }

//------------------------

do {
    $last3Prime = true;
    for ($i = count($masyvas4) - 1; $i >= count($masyvas4) - 3; $i--) {
        if (test($masyvas4[$i]) !== 0) {
            $last3Prime = false;
            $masyvas4[] = rand(1, 33);
        }
    }
} while (!$last3Prime);

_dc($masyvas4);

//--------------------

do {
    $last3Prime = true;
    for ($i = count($masyvas4) - 1; $i >= count($masyvas4) - 3; $i--) {
        if (test($masyvas4[$i]) !== 0) {
            $last3Prime = false;
            $masyvas4[] = rand(1, 33);
        }
    }
} while (!$last3Prime);

_dc($masyvas4);