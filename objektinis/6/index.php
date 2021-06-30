<?php


include __DIR__ . '/Stikline.php';


$Stikline = new Stikline;

echo 'pirmas ipilimas 200:';
$Stikline->ipilti(200);
echo $Stikline->ipilti();
echo '<br>';

echo 'antras ipilimas 150:';
$Stikline->ipilti(150);
echo $Stikline->ipilti();
echo '<br>';

echo 'trecias ipilimas 100:';
$Stikline->ipilti(100);
echo $Stikline->ipilti();
echo '<br>';
