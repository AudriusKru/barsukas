<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voveres ir Zuikiai</title>
</head>

<body>
<h1>Voveres ir Zuikiai</h1>
<h2>
<a href="http://localhost/barsukas/10/">Namai</a>
<a href="?rodyti=vovere&puslapis=1">Voveres 1</a>
<a href="?rodyti=vovere&puslapis=2">Voveres 2</a>
<a href="?rodyti=zuikis&puslapis=1">Zuikis 1</a>
<a href="?rodyti=zuikis&puslapis=2">Zuikis 2</a>
</h2>
<?php

_d($_GET);

if (isset($_GET['rodyti'] === 'vovere')) {
    if($_GET['rodyti'] === 'vovere') {
    echo 'Rodom voveres ', 'Puslapis: '. ($_GET['puslapis'] ?? 1);
    }
    elseif($_GET['rodyti'] === 'zuikis') {
    echo 'Rodom zuikis ', 'Puslapis: '. ($_GET['puslapis'] ?? 1);
    }
    else {
    echo 'Tokio neturim';
    }
}
else {
    echo 'sveiki atyke i musu puslapi';
}

?>    

</body>
</html>




