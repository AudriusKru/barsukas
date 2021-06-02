<?php

echo '1. Uždavinio atsakymas:';
echo '<br>';

$n= 50;

for ($i = 1; $i <= 400 ; $i++) { 
    echo '*';
    if ($i == $n) {
        echo '<br>';
        $n+=50;
    }
}



