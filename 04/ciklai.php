<?php

// kai reikia prasukt
$sk = rand(0, 10);
while ($sk < 9) {
   echo $sk . '<br>';
   $sk = rand(0, 10);
}
echo '<br>';echo '<br><hr>';echo '<br>';
// echo $sk;

// kai reikia prasukt bent karta
do {
    $sk = rand(0, 10);
echo $sk . '<br>';
} while ($sk < 9);

echo '<br>';echo '<br><hr>';echo '<br>';

// kai reikia prasukt kiek reikia kartu
for ($x = 1; $x <= 5; $x++) {
    echo 'Numeris: '.$x.' <br>';
}

echo '<br>';echo '<br><hr>';echo '<br>';

for ($i = 1;$i <= 15;$i++){
    if (rand(0, 10)< 4){
        continue;
    }
    echo $i;
    echo '<br>';
  }
  echo 'Ciklo pabaiga';