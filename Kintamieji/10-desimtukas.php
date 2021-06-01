<?php

// 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.

echo '10. Uždavinio atsakymas:';
echo '<br>';

$valandos = rand(0, 23);
$minutes = rand(0, 59);
$sekundes = rand(0, 59);
echo '<br>';
$papildomas_laikas = rand(0, 300);


echo "Dabar yra $valandos:$minutes:$sekundes val.";