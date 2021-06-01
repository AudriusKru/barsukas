<?php


echo '6. Uždavinio atsakymas:';
echo '<br>';

$sakinys = 'An American in Paris';

$a_kiekis = substr_count(strtolower($sakinys), 'a');
echo 'Viso didžiųjų ir mažųjų raidžių (A, a) yra: ' .$a_kiekis;