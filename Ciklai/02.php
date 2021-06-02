<?php

echo '2. Uždavinio atsakymas:';
echo '<br>';

$kiek = 0;

// echo "<div style='overflow-wrap: break-word;'>";

for ($i = 0; $i < 300; $i++) { 
    $skaicius = rand(0, 300);
    if ($skaicius > 150) {
        $kiek++;
    }
    if ($skaicius > 275) {
        echo "<span style='color:red;'>$skaicius</span>". ' '; // alima i olor taga
    } else {
        echo $skaicius .' ';
    }
}
echo '<br>';
echo 'Didesnių nei (150) yra: ' .$kiek .'vnt.';

// echo '</div>';