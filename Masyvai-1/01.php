<?php

echo '1. Uždavinio atsakymas:';
echo '<br>';


// salyga:
// Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.



// $elemetai = 30;

// for ($i = 0; $i < $elemetai; $i++) { 
//     $masyvas[] = rand(5, 25);
// }

$elemetai = 30;
$masyvas = array_fill(0, $elemetai, ' ');
foreach ($masyvas as $index => &$random) {
    $random = rand(5, 25);
}
unset($random);

echo '<br>';echo '<br><hr>';echo '<br>';

echo '2.A Uždavinio atsakymas:';
echo '<br>';

$kiek = 0;

foreach ($masyvas as $index => $random) {
    if ($random > 10) {
        $kiek++;
    }
}
echo "reiksmiu didesniu nei 10 yra: $kiek" '<br>' .'<br><hr>';

echo '2.B Uždavinio atsakymas:';
echo '<br>';


$masyvo = max($masyvas);
$indekso =array_search(max($masyvas),$masyvas);
echo 'Max reiksmes: masyvo - ' .$masyvo .', indekso - ' .$indekso .'<br>' .'<br><hr>';


echo '2.C Uždavinio atsakymas:';
echo '<br>';

echo '2.D Uždavinio atsakymas:';
echo '<br>';

echo '2.E Uždavinio atsakymas:';
echo '<br>';

echo '2.F Uždavinio atsakymas:';
echo '<br>';

echo '2.G Uždavinio atsakymas:';
echo '<br>';

echo '2.H Uždavinio atsakymas:';
echo '<br>';

echo '2.I Uždavinio atsakymas:';
echo '<br>';

echo '3. Uždavinio atsakymas:';
echo '<br>';

echo '4. Uždavinio atsakymas:';
echo '<br>';



