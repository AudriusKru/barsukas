<?php


echo '2. Uždavinio atsakymas:';
echo '<br>';

$vardas = 'Johnny';
$pavarde = 'Depp';

echo "Vardas: $vardas";
echo '<br>';
echo "Pavardė: $pavarde";
echo '<br>';

$big_Name = strtoupper($vardas);
$big_surname = strtoupper($pavarde);

$small_Name = strtolower($vardas);
$small_Surname = strtolower($pavarde);

echo "Vardas didžiosiomis: $big_Name";
echo '<br>';
echo "Pavardė didžiosiomis: $big_surname";
echo '<br>';
echo "Vardas mažosiomis: $small_Name";
echo '<br>';
echo "Pavardė mažosiomis: $small_Surname";
