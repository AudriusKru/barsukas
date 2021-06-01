<?php

// 1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus (nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
// "Aš esu Vardenis Pavardenis. Man yra XX metai(ų)".

echo '1. Uždavinio atsakymas:';
echo '<br>';

$vardas = 'Audrius ';
$pavarde = 'Audriusevicius';

$vardenis_pavardenis = $vardas . $pavarde;
// echo $vardenis_pavardenis; 

$gimimo_metai = 1975;
$dabartiniai_metai = 2008;

$dabartinis_amzius = $dabartiniai_metai - $gimimo_metai;
// echo $dabartinis_amzius;

$sakinys = "Aš esu $vardenis_pavardenis. Man yra $dabartinis_amzius metai(ų)";

echo $sakinys;
echo '<br>';