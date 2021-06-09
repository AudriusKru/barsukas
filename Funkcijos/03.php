<?php

echo '3. Uždavinio atsakymas:';
echo '<br>';

$stringas = md5(time());

// echo $stringas;

function funkcija($tekstas) {
    return "<h1>$tekstas</h1>";
}

$result = preg_replace('/\d/', '', $stringas);

echo funkcija($result);

//----------------------------------destytojo

function h1($text)
{
    return "<h1>$text</h1>";
}

$genText =md5(time());


$out = preg_replace_callback('/\d+/', function($match){
    _d($match);
    return '';
}, $genText);