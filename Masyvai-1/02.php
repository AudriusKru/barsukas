<?php

// Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;

echo '2.A Uždavinio atsakymas:';
echo '<br>';
//// Naudodamiesi 2 uždavinio masyvu:
// //Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;

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
//Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
$max_reiksme = $masyvas[0];
$max_indeksas = 0;
foreach ($masyvas as $indexas => $sk) {
    if ($sk >  $max_reiksme) {
        $max_reiksme = $sk;
        $max_indeksas = $indexas;
    }
}
echo "Max reiksmes: masyvo - $max_reiksme, indekso - $max_indeksas.";
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

echo "Visų porinių (lyginių) indeksų reikšmių suma: $lyginiai_indexsai.";
echo '<br><hr>';

echo '2.D Uždavinio atsakymas:';
echo '<br>';

// Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;

$naujas_masyvas = [];

foreach ($masyvas as $index => $sk) {
    $naujas_masyvas [] = ($sk - $index);
}

echo 'Naujo masyvo reikšmes minus tos reikšmės indeksas:';
echo '<br>';
print_r($naujas_masyvas);
echo '<br><hr>';

echo '2.E Uždavinio atsakymas:';
echo '<br>';
// Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;

$masyvas = array_pad($masyvas, 40, 0);

foreach($masyvas as $n_index => $value) {
    if ($n_index > 29) {
        $masyvas[$n_index] = rand(5, 25);
    }
}

print_r($masyvas);
echo '<br><hr>';

echo '2.F Uždavinio atsakymas:';
echo '<br>';
// Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;

// poriniai
$poriniai_masyvas = [];
$neporiniai_masyvas = [];

foreach ($masyvas as $pradzia  => $sk) {
    if ($pradzia % 2 === 0) {
        $poriniai_masyvas[] += $sk;
    } else {
        $neporiniai_masyvas[] += $sk;
    }
}
echo 'Poriniai skaičiai:';
echo '<br>';
print_r($poriniai_masyvas);
echo '<br>';
echo 'Neporiniai skaičiai:';
echo '<br>';
print_r($neporiniai_masyvas);
echo '<br><hr>';

echo '2.G Uždavinio atsakymas:';
echo '<br>';

// Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;

foreach ($neporiniai_masyvas as $pradzia => &$sk) {
    if ($pradzia % 2 === 0) {
        if ($sk > 15) {
            $sk = 0;
        }
    }
}
unset($sk);
print_r($neporiniai_masyvas);
echo '<br><hr>';

echo '2.H Uždavinio atsakymas:';
echo '<br>';
// Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;

foreach($masyvas as $pradzia => $sk) {
    
}

echo '2.I Uždavinio atsakymas:';
echo '<br>';
// Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;