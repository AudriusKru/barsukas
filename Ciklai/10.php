<?php

echo '10. Uždavinio atsakymas:';
echo '<br>';

$nail_length = 8.5;
// 5 nails with small strikes:
$strikes = 0;
for ($i = 0; $i < 5; $i++) {
    $progress = 0;
    while ($progress < $nail_length) {
        $small_strike = rand(5, 20);
        $progress += $small_strike;
        $strikes++;
    }
}
echo "Fully hammering 5 nails with small strikes took $strikes strikes. <br>";
// 5 nails with small strikes:
$strikes = 0;
for ($i = 0; $i < 5; $i++) {
    $progress = 0;
    while ($progress < $nail_length) { 
        $big_strike = rand(20, 30);
        if (rand(0, 1) == 1) {
            $progress += $small_strike;
        }
        $strikes++;
    }
}

echo "Fully hammering 5 nails with big strikes took $strikes strikes. <br>";