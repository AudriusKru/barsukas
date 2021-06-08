<?php


usort($masyvas, function($a, $b) {
    $asum = 0;
    if(is_array($a)) {
        foreach($a as $value) {
            $asum += $value;
        }
        $a = $asum;
    }
    $bsum = 0; 
    if(is_array($b)) {
        foreach($b as $value) {
            $bsum += $value;
        }
        $b = $bsum;
    }
    return $a <=> $b;
}
);