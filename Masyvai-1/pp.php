
<?php

echo "<br>";
echo "1-as uzdavinys";
echo "<br>";
echo "<br>";

$masyvas = array_fill(0, 30, 0);

foreach ($masyvas as $key => &$value) {
    $value = rand(5, 25);
}
unset($value);

print_r($masyvas);

echo "<br>";
echo "2-as uzdavinys";
echo "<br>";
echo "<br>";

echo 'A DALIS'; 
echo "<br>";
echo "<br>";

$count = 0;
foreach ($masyvas as $indexas => $skaicius) {
    if ($skaicius >10) {
        $count++;
    }
}

echo 'Skaiciu, didesniu uz 10 yra: ' . $count;

echo "<br>";
echo "<br>";
echo 'B DALIS'; 
echo "<br>";
echo "<br>";

$maxValue = $masyvas[0];
$maxValueIndex = 0;
foreach ($masyvas as $indexas => $skaicius) {
    if ($skaicius >  $maxValue) {
        $maxValue = $skaicius;
        $maxValueIndex = $indexas;
    }
}

echo 'Max reiksme: ' . ' ' . $maxValue;
echo "<br>";
echo "<br>";
echo 'Max reiksmes indeksas: ' . ' ' . $maxValueIndex;

echo "<br>";
echo "<br>";
echo 'C DALIS'; 
echo "<br>";
echo "<br>";

$lyginiuIndeksuReiksmiuSuma = 0;
foreach ($masyvas as $indexas => $skaicius) {
    if ($indexas % 2 === 0) {
        $lyginiuIndeksuReiksmiuSuma .= $skaicius;
    }
}
echo 'Lyginiu indeksu reiksmiu suma yra:    ' . $lyginiuIndeksuReiksmiuSuma;