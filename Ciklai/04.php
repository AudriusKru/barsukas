<?php

echo '4. Uždavinio atsakymas:';
echo '<br>';

$randomSkaicius = rand(3000, 4000);
$stringas = '';
echo "aibe yra nuo 1 iki $randomSkaicius";
echo "<br>";
echo "<br>";

for ($i=1; $i < $randomSkaicius; $i++) { 
    if ($i % 77 === 0) {
        if (strlen($stringas) === 0) {
            $stringas . = $i;
        } else {$stringas .= ', ' . $i ;}
    }
}
echo $stringas;