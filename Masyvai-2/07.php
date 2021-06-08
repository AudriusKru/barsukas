<?php

echo '7. Uždavinio atsakymas:';
echo '<br>';


$masyvas = range(0, 30);

foreach ($masyvas as $xxx => $value_xxx) {
    $masyvas[$xxx] = ['user_id' => rand(1, 1000000), 'place_in_row' => rand(0, 100)];
}

// print_r($masyvas);

echo
usort($masyvas, function($a, $b) {
    return $a['user_id'] <=> $b['user_id'];
});

// print_r($masyvas);
echo '<br><hr>';


usort($masyvas, function($a, $b) {
    return $b['place_in_row'] <=> $a['place_in_row'];
});

// print_r($masyvas);


//-------------------------------------------------------------------------------------

// function randomString()
// {
//     $letters = '';
//     for ($i = 0; $i < rand(5, 15); $i++) {
//         if ($i == 0) {
//             $letters .= chr(rand(65, 90));
//         } else {
//             $letters .= chr(rand(97, 122));
//         }
//     }
//     return $letters;
// }
// foreach ($arr as $key => $value) {
//     $arr[$key][] = 'Name => ' . randomString();
//     $arr[$key][] = 'Surname => ' . randomString();
// }
// _d($arr, '7')