<?php


require __DIR__ . '/Pinigine.php';

$pinigine = new Pinigine;

echo "Aštunta užduotis:<br><hr>";


$pinigine->skaiciuoti();

$pinigine->ideti(5);
$pinigine->ideti(0.33);
$pinigine->ideti(5);
$pinigine->ideti(0.33);
$pinigine->ideti(5);
$pinigine->ideti(0.33);
$pinigine->ideti(5);
$pinigine->ideti(0.33);

$pinigine->skaiciuoti();


$pinigine->monetos();

$pinigine->banknotai();

echo '<pre>';
var_dump($pinigine);
