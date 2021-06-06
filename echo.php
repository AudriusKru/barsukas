<?php

$colors = ['red', 'green', 'blue', 'yellow'];
$masyas = ['lalala'];
foreach ($colors as $index => $value) {
// echo 'Reikšmė: '  $value . '<br>';
echo "<br>--------------<br>";
$masyas += $colors;
print_r($masyas);
echo "<br>";

}
print_r ($colors);