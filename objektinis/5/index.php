<?php


include __DIR__ . '/Miskas.php';
include __DIR__ . '/Zveris.php';


$Zveris = new Zveris('Barsukas');

echo 'Sakinys: ';
echo '<br>';
echo $Zveris->papasakok('Barsukas');
echo '<br>';