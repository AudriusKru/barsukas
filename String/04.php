<?php


echo '4. Uždavinio atsakymas:';
echo '<br>';

$vardas = 'Johnny';
$pavarde = 'Depp';

echo "Vardas: $vardas";
echo '<br>';
echo "Pavardė: $pavarde";
echo '<br>';

$trys_raides = substr($vardas,-3) . substr($pavarde,-3);
echo $trys_raides;