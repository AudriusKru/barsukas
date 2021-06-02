$rombo_plotis = 1;

$dideja = true;



echo "<div style='text-align:center; letter-spacing: 11px;>'";



for($i = 0; $i < 21; $i++){



for($o = 0; $o < $rombo_plotis; $o++){

echo "<span style='color:rgb(" . rand(0,255) .", ". rand(0,255) .", " . rand(0,255) .");'>*</span>";

}



if($rombo_plotis === 11){

$dideja = false;

}



if($dideja){

$rombo_plotis++;

} else {

$rombo_plotis--;

}

echo '<br>';

}



echo '</div>';