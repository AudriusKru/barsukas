echo '<div class=\'rombas\'>';

$len = 21;

for($x = 0; $x < $len; $x++){

    echo '<br>';

    for($y = 0; $y < $len; $y++){

        if(($x + $y >= 10 && $x - $y <= 10) && 

           ($x + 10 >= $y) && 

           ($x + $y <= 30)){

               echo '<span style="color: rgb(',rand(0, 255),', ',rand(0, 255),', ',rand(0, 255),');">*</span>';

        }else { echo "<span style=\"opacity: 0\">_</span>"; }

    }

}

echo '</div>';