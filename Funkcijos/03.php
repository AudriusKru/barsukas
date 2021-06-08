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