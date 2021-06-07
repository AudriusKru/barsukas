<?php
echo "#2.A.B Uzduotis <br>";
$didesni_uz_10 = 1;
$j = 0;
$max = 0;

    foreach ($masyvas as $key => $value) {
        foreach ($value as $key1 => $val) {
            if ($val > 10) {
                $didesni_uz_10++;
            }
            if ($val > $max) {
                $max = $val;
            }
        }
    }
    echo 'Didesniu uz 10 yra: '.$didesni_uz_10 . '<br>';
    echo 'Didziausia reiksme: '. $max;

    
    echo "<br><br><br>";
    echo "#2.C Uzduotis";


    foreach ($masyvas as $key => $value) {
        $suma[$key] = 0;
        foreach ($value as $key1 => $val) {
            $suma[$key] += $val;
        }
    }

    foreach ($suma as $key => $value) {
        echo '<br>'.$key.'suma: '. '---->'. $value;
    }
    

    echo "<br><br><br>";
    echo "#2.D Uzduotis <br>";


    foreach ($masyvas as $key => $value) {
        for ($i=0; $i < 2; $i++) { 
            array_push($masyvas[$key], rand(5,25));
        }
    }

    foreach ($masyvas as $key => $value) {
        foreach ($value as $key1 => $val) {
            echo $key. '--->' .''. $key1. '---->'. $val . '<br>';
        }
    }

    echo "<br><br><br>";
    echo "#2.E Uzduotis <br>";

    foreach ($masyvas as $key => $value) {
        $suma[$key] = 0;
        foreach ($value as $key1 => $val) {
            $suma[$key] += $val;
        }
    }
    foreach ($suma as $key => $value) {
        echo '<br>'.$key.'suma: '. '---->'. $value;
    }

    echo "<br><br><br>";
    echo "#3 Uzduotis <br>";


    function generate_string($input, $strength) {
        $input_length = strlen($input);
        $random_string = '';
        for($i = 0; $i < $strength; $i++) {
            $random_character = $input[mt_rand(0, $input_length - 1)];
            $random_string .= $random_character;
        }
    
        return $random_string;
    }
    $permitted_chars = 'abcdefghijklmnopqrstuvwxyz';
    for ($i=0; $i < 10; $i++) { 
        $randomas = rand(2,20);
        for ($j=0; $j < $randomas; $j++) { 
            $array[$i][$j] = generate_string(strtoupper($permitted_chars), 1);
            sort($array[$i]);
        }
    }
    
    foreach ($array as $key => $value) {
        foreach ($value as $key1 => $val) {
            echo $key. '--->' .''. $key1. '---->'. $val . '<br>';
        }
    }