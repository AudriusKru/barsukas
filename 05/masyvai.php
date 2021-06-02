<?php

$masyvas = [];

// echo $masyvas;


print_r($masyvas);
echo '<br>';

array_push($masyvas, 'kate');
array_push($masyvas, 'zirafa');
$masyvas[10000000000] = 'suo';
$masyvas[''] = 'nieko';
$masyvas[''] = 'nieko2';

$masyvas2 = ['pele', 'kate' => 'tupi', 'suo'];

// $masyvas3 = array('pele', 'kate' => 'tupi', 'suo');
//  senovinis uzrasymas
$masyvas4 = array('pele', 'tupi', 'suo');

$masyvas5 = ['pele', 'tupi', 'suo'][rand(0, 2)];

print_r($masyvas5);