<?php

echo '1. Uždavinio atsakymas:';
echo '<br>';

$n= 50;

// echo "<div style='overflow-wrap: break-word;'>";
for ($i = 1; $i <= 400 ; $i++) { 
   
    echo "<span style='color:red;'>*</span>";
    if ($i == $n) {
        echo '<br>';
        $n+=50;
    }
}
// echo '</div>';

// echo "1 b užduotis - išskaidyti 400 po 50 <br>";

// $interv = 50;

// for ($i =1 ; $i <= 400 / $interv ; $i++) {
//   for ($k = 1 ; $k <= $interv ; $k++)
//   {
//       echo '*';
//   }
// echo "<br>";
// }