<?php

echo '6. Uždavinio atsakymas:';
echo '<br>';

function numberis($number) {
    $count = 0;
    for ($i = 2; $i < $number ; $i++) { 
        if ($number % $i === 0) {
            $count++;
        } 
        if ($count === 0){
            return 'Dalyba negalima.';
        }
    }       
     return "Skaičius: $number dalijasi iš $count sveikų skaičių.";
}

$skaicius = rand(2, 1500);

echo numberis($skaicius);