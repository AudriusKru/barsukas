<?php

echo '2. Uždavinio atsakymas:';
echo '<br>';

function antras_uzd($h_tagas, $tago_nr) {
    return "<h$tago_nr>$h_tagas</h$tago_nr>";
}

$tekstukas = 'Laba diena!';
$tago_dydis = rand(1, 6);

echo antras_uzd($tekstukas, $tago_dydis);