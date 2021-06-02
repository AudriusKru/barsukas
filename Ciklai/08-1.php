echo "<div style='width: 300px; height: 300px; text-align: center; display: inline-block;'>";



for ($i=1; $i < 12 ; $i++) {

    $times = 0;

    while ($times < $i) {

        echo "<span style='margin: 0; color: rgb(" . rand(0,255) . "," . rand(0,255) . "," . rand(0,255) . "); font-size: 30px; line-heigh: 3px; height: 30px'> * </span>";

        $times++;

    }

    $times = 0;

    echo '<br>';

}

for ($i=10; $i > 0 ; $i--) { 

    $times = 0;

    while ($times < $i) {

        echo "<span style='margin: 0; color: rgb(" . rand(0,255) . "," . rand(0,255) . "," . rand(0,255) . "); font-size: 30px; line-heigh: 3px; height: 30px'> * </span>";

        $times++;

    }

    $times = 0;

    echo '<br>';

}



echo '</div>'