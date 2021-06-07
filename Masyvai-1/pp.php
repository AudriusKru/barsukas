<?php
$array1 = array(1);
$array2 = array(1, 1 => "data");
$result = array_merge($array1, $array2);

print_r($result);