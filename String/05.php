<?php


echo '5. Uždavinio atsakymas:';
echo '<br>';

$sakinys = 'An American in Paris';
$raides_a = array('a', 'A');

$be_a_raidziu = str_replace($raides_a, '*', $sakinys);

echo $be_a_raidziu;