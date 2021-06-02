<?php

echo '11. Uždavinio atsakymas:';
echo '<br>';

$array = [];
while(count($array) <= 50){
$sk = rand(1,200);
if(count($array) == 0){
array_push($array, $sk);
} else {
foreach($array as $i){
if($sk === $i){
continue 2;
}
}
array_push($array, $sk);
}
}
echo implode(" ",$array);
echo '<br>';
echo '<br>';
$new_array = [];
for($i = 0; $i < count($array); $i++){
$sk = $array[$i];
$dalikliai = 0;
for($o = 2; $o < $sk; $o++){
if($sk % $o === 0){
$dalikliai++;
}
}
if($dalikliai === 0){
array_push($new_array, $sk);
}
}
sort($new_array);
echo implode(" ",$new_array);