<?php

// // /*
// // Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// // */

// // $vardas = 'Audrius';
// // $pavarde = 'Audriusevicius';
// // $gimimo_metai = 55;
// // $dabartiniai_metai = 2005;

// // $sakinys = $vardas;
// // echo $sakinys;


// $drambliai = rand(0.00, 4.00);
// $begemotai = rand(0.00, 4.00);
// echo "Drambliai: $drambliai - Begemotai: $begemotai";
// echo '<br>';
// echo '<br>';

// if ($drambliai != 0 && $begemotai != 0) {
//     if ($drambliai > $begemotai) {
//         $dramblysDidesnis = round($drambliai / $begemotai, 2);
//         echo "Dramblių daugiau $dramblysDidesnis karto";

//         }
//     elseif ($begemotai > $drambliai) {
//         $begemotasDidesnis = round($begemotai / $drambliai, 2);
//         echo "Begemotų daugiau $begemotasDidesnis karto";

//         }

//     else echo ' Nėra daugiau ';
// }
// else echo ' Nulis ';


echo '9) <br>';

$kint1 = rand(0,100);
$kint2 = rand(0,100);
$kint3 = rand(0,100);

echo $kint1. ', ' .$kint2. ', ' .$kint3.'<br>'; 

echo 'Avg = '.round(($kint1 + $kint2 + $kint3) / 3 ). '<br>';

if (10 < $kint1 && $kint1 < 90 && 10 < $kint2 && $kint2 < 90 && 10 < $kint3 && $kint3 < 90) {
    echo 'Avg2 = '.round(($kint1 + $kint2 + $kint3) / 3 ). '<br>';
}


echo '<br> ========== <br>';