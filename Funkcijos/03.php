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

function h1 (string|array $text) : string
{
    if (is_array($text)) {
        $text = $text[0];
    }
    return "<h1 style=\"display:inline;\">$text</h1>";
}

$genText =md5(time());
$out = preg_replace_callback('/\d+/', 'h1', $genText);

echo $out;