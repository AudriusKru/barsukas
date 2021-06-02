<?php

echo '7. Uždavinio atsakymas:';
echo '<br>';

$petras = 0;
$kazys = 0;

while ($petras < 222 || $kazys < 222) {
    $petras = rand(10, 20);
    $kazys = rand(5, 25);
}
if ($petras > $kazys) {
    echo "Laimėjo Petras surikęs: $petras";
} elseif ($petras < $kazys) {
    echo "Laimėjo Kazys surikęs: $kazys";
} else {
    echo 'abiem xana';
}


// $winner = 222;
// $leader = 0;
// $petras = 0;
// $kazys = 0;

// do {
//     $petras += rand(10,20);
//     if($petras > $leader) {
//         $leader = $petras;
//     }
//     $kazys += rand(5,25);
//     if($kazys > $leader) {
//         $leader = $kazys;
//     }
//     echo "Petro taskai: $petras, Kazio taskai: $kazys. Partija laimejo: " . ($petras > $kazys ? 'Petras.' : ($petras == $kazys ? 'Lygiosios.' : 'Kazys.'));
//     echo '<br>';
// } while ($leader < $winner)
