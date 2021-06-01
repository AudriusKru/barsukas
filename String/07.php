<?php


echo '7. Uždavinio atsakymas:';
echo '<br>';

$paris = 'An American in Paris';
$tiffany = "Breakfast at Tiffany's";
$odyssey = '2001: A Space Odyssey';
$life = "It's a Wondurful Life";


function balses($balse) {
    // $raides = array('a', 'e', 'i', 'o', 'u', 'y');
    // $balse = str_replace($raides, '', strtolower($balse));
    $balse = preg_replace('/[aeiouy]/', '', strtolower($balse));
    return $balse;
}

echo '1.' .'<br>';
echo $paris  .'<br>';
echo balses($paris) .'<br>';
echo '2.' .'<br>';
echo $tiffany  .'<br>';
echo balses($tiffany) .'<br>';
echo '3.' .'<br>';
echo $odyssey  .'<br>';
echo balses($odyssey) .'<br>';
echo '4.' .'<br>';
echo $life  .'<br>';
echo balses($life) .'<br>';

