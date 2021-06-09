<?php

function generate($r)
{
    static $i = 1;
    if ($i <= $r) {
        $z = rand(10, 20);
        foreach (range(1, $z) as $key => $_) {
            if ($key == ($z - 1) && $i == $r) {
                $arr[] = 0;
            } elseif ($key == ($z - 1) && $i != $r) {
                $i++;
                $arr[] = generate($r);
            } else {
                $arr[] = rand(0, 10);
            }
        }
        return $arr;
    }
}

//------------------------

function   doArray ( $limit ) {      if  (-... by Irmantas Joksas

    Irmantas Joksas11:17 AM
    function doArray($limit) {
    
        if (--$limit < 0) {
    
            return 0;
    
        }
    
        $masyvas = [];
    
        $random = rand(10, 20);
    
            foreach(range(1, $random) as $key => $value) {
    
                if($random - 1 == $key) {
    
                    $masyvas[] = doArray($limit);
    
                } else {
    
                    $masyvas [] = rand(0, 10);
    
                }
    
            }
    
        return $masyvas;
    
    }
    
    
    
    _dc(doArray(rand(10, 30)), '7 uzduotis')