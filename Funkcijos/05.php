<?php

echo '5. Uždavinio atsakymas:';
echo '<br>';


for ($i = 0; $i < 100; $i++) { 
    $masyvas[] = rand(33, 77);
}
usort($masyvas, function($a, $b) {
    return $b <=> $a;
});

print_r($masyvas);