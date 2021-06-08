<?php

echo '1. Uždavinio atsakymas:';
echo '<br>';

function h1Tagas($tekstas) {
    return "<h1>$tekstas</h1>";
}

$tekstukas = 'Laba diena!';

echo h1Tagas($tekstukas);