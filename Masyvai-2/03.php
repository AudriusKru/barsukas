<?php

// 3.	Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur su raidėm).

$abc = range('A', 'Z');

foreach (range(1, 10) as $keyBig => $_) {
    foreach (range(1, rand(2, 20)) as $keySmall => $_) {
$masyvas[$keyBig][$keySmall] = $abc[rand(0, 25)];
}
}

// _d(range('A', 'Z'));

usort($masyvas, function($a,$b){

$ak = (int)in_array('K', $a);
$bk = (int)in_array('K', $b);

if ($ak + $bk == 1) {
    return $bk <=> $ak;
}

return count($a) <=> count($b);

});

_d($masyvas);