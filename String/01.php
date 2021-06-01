<?php


echo '1. Uždavinio atsakymas:';
echo '<br>';

$vardas = 'Johnny';
$pavarde = 'Depp';

$vardasLength = strlen($vardas);
$pavardeLength = strlen($pavarde);

if ($vardasLength < $pavardeLength) {
    echo "Vardas $vardas yra trumpesnis nei pavardė $pavarde.";
} else {
    echo "Pavardė $pavarde yra trumpesnė nei vardas $vardas.";
}
