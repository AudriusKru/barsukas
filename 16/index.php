<?php

require __DIR__ . '/Tv.php';


$TV1 = new Tv(32);
$TV2 = new Tv(108);
$TV3 = new Tv(46);

// $TV1->kanalai[1] = 'LRT2';

$TV1::$kanalai[1] = 'LRT2';

$TV1->rodyti(1);
$TV2->rodyti(1);
$TV3->rodyti(1);