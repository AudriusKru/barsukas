<?php

echo '3. Uždavinio atsakymas:';
echo '<br>';

$daliklis = 77;
$random_sk = rand(3000, 4000);

$stringai = '';

for ($i = $daliklis; $i < $random_sk; $i++) { 
    if ($i%$daliklis === 0) {
        if(strlen($stringai) === 0) {
            $stringai .= $i;
        } else {
            $stringai .= ', ' . $i;
        }
    }
}

echo $stringai;