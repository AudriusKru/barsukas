<?php


foreach ($masyvas as $index => $value) {
    if ($value > 10) {
        echo "pirmas elementas, kurio reikšmė didesnė už 10: [$index] => $value";
        break;
    }
}