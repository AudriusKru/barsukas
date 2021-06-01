<?php

// 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą atspausdintų. 

echo '4. Uždavinio atsakymas:';
echo '<br>';

$a = rand(1, 10);
$b = rand(1, 10);
$c = rand(1, 10);

echo "Pirmas kintamasis: $a";
echo '<br>';
echo "Antras kintamasis: $b";
echo '<br>';
echo "Trečias kintamasis: $c";
echo '<br>';

if (($a + $b) > $c && ($b + $c) > $a && ($c + $a) > $b) {
    echo 'Gauname trikampį!!!';
} else {
    echo 'Nesigavo!!!!!!!!';
}