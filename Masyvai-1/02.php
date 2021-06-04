<?php

//// Naudodamiesi 2 uždavinio masyvu:
// //Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
// //Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
// Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
// Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
// Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
// Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;



echo '2.A Uždavinio atsakymas:';
echo '<br>';

$elemetai = 30;
$masyvas = array_fill(0, $elemetai, ' ');
foreach ($masyvas as $index => &$random) {
    $random = rand(5, 25);
}
unset($random);

$kiek = 0;
foreach ($masyvas as $index => $random) {
    if ($random > 10) {
        $kiek++;
    }
}
echo "reiksmiu didesniu nei 10 yra: $kiek";
echo '<br><hr>';

echo '2.B Uždavinio atsakymas:';
echo '<br>';
$masyvo = max($masyvas);
$indekso =array_search(max($masyvas),$masyvas);
echo "Max reiksmes: masyvo - $masyvo, indekso - $indekso .";
echo '<br><hr>';

echo '2.C Uždavinio atsakymas:';
echo '<br>';
// Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;

$lyginiai_indexsai = 0;
foreach ($masyvas as $index  => $sk) {
    if ($index % 2 === 0) {
        $lyginiai_indexsai += $sk;
    }
}

echo "$lyginiai_indexsai";
echo '<br><hr>';

echo '2.D Uždavinio atsakymas:';
echo '<br>';

echo '2.E Uždavinio atsakymas:';
echo '<br>';

echo '2.F Uždavinio atsakymas:';
echo '<br>';

echo '2.G Uždavinio atsakymas:';
echo '<br>';

echo '2.H Uždavinio atsakymas:';
echo '<br>';

echo '2.I Uždavinio atsakymas:';
echo '<br>';