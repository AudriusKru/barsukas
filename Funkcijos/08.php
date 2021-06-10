<?php

function masyvuSuma($m){
    static $sum = 0;
    foreach($m as $value){
    if(!is_array($value)){
    $sum += $value;
    } else {
    masyvuSuma($value);
    }
}
    return $sum;
}

//-----------------------

unction calc($masyvas) {
    $sum = 0;
    foreach($masyvas as $key => $value) {
        if(is_array($value)) {
            cal($value);
        } else {
            $sum += $value;
        }
    }
    return $sum;
} 

_d(calc($masyvas), '8 uzduotis');