<?php

// 6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3>

echo '6. Uždavinio atsakymas:';
echo '<br>';

$busimas_skaicius = rand(1, 6);

// echo "<h1>$busimas_skaicius<h1>";
echo "<h$busimas_skaicius>Atsitiktinis skaičius (h$busimas_skaicius) dydžio, interale nuo 1 iki 6 yra: $busimas_skaicius.</h$busimas_skaicius>";
