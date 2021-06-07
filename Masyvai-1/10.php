<?php

echo '10. Uždavinio atsakymas:';
echo '<br>';

// Sugeneruokite 10 skaičių masyvą pagal taisyklę:
//  Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. 
//  Trečias, pirmo ir antro suma. 
//  Ketvirtas- antro ir trečio suma. 
//  Penktas trečio ir ketvirto suma ir t.t.

$randomPlus = [];
$j = 3;
$k = 2;
$l = 1;

for ($i = 0; $i <= 10 ; $i++) {
    if ($i == $j) {
        $randomPlus[$i] = $randomPlus[$k] + $randomPlus[$l];
        $j++;
        $k++;
        $l++;
    } else{
        $randomPlus[$i] = rand(5, 25);
    }
}
foreach ($randomPlus as $key => $value) {
echo "[$key] = $value <br>";
}
