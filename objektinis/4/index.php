<?php


include __DIR__ . '/Kibiras3.php';
include __DIR__ . '/KibirasNePo1.php';


$KibirasNePo1 = new KibirasNePo1;

echo 'pirmas + :';
$KibirasNePo1->prideti1Akmeni();

echo $KibirasNePo1->kiekPririnktaAkmenu();
echo '<br>';
echo 'antras + :';
$KibirasNePo1->prideti1Akmeni();

echo $KibirasNePo1->kiekPririnktaAkmenu();

