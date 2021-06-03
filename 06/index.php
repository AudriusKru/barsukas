<?php

$masyvas = [];

//masyas kuriamas su fopreah

foreach(range(1, 30) as $_) {
    $masyvas[] = rand(5, 25);
}

_d($masyvas);