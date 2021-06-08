<?php

$masyvas = [];
foreach (range(1, 10) as $key1 => $_) {
    $sk = rand(0, 5);
    if ($sk == 0) {
        $masyvas[$key1] = rand(0, 10);
    } else {
        foreach (range(1, $sk) as $key2 => $_) {
            $masyvas[$key1][] = rand(0, 10); 
        }
    }
}

_d($masyvas);