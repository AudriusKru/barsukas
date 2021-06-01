<?php

echo '8. Uždavinio atsakymas:';
echo '<br>';


$kodas = 'Star Wazrs: Episode '. str_repeat(' ',rand(0,5)). rand(1,9) . '- A New Hope';

echo $kodas . '<br> ';
echo 'Epizodo nr: ' . preg_replace('/[^0-9]/', '', $kodas);

echo '<br>';