<?php

$trecias = 5;
$ketvirtas = $trecias % 4;

echo $ketvirtas;
echo '<br>';

echo $trecias++;
echo '<br>';

echo $trecias;
echo '<br>';

$sk = 1;

echo $sk++ + ++$sk;

$ketvirtas = $ketvirtas + 5;
$ketvirtas += 5;

echo '<br>';
echo $ketvirtas;
echo '<br>';

$pirmas = 'bla bla';
$antras = 'ku kū';
$trecias = $pirmas . $antras;

echo '<br>';
echo $trecias;


echo '<br>';

$pirmas = 'bla bla';
$antras = "ku $pirmas kukuuuu \n\n";

echo '<br>';

echo $antras;

echo $trecias;
echo '<br>';

$pirmas = 'antras';
$antras = 'bla bla';

echo '<br>';echo '<br><hr>';echo '<br>';

echo $$pirmas;
echo '<br>';

var_dump(22 === '22');
echo '<br>';

$drambliai = 1;

if ($drambliai) {
    echo 'Yra dramblių';
} 


