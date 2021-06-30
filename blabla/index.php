<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voveres ir Zuikiai</title>
</head>

<body>
    <h1>Voveres ir Zuikiai</h1>
    <h2>
        <a href="?nerodyti=vovere&puslapis=1">Voveres 1</a>
        <a href="?nerodyti=vovere&puslapis=2">Voveres 2</a>

        <a href="?nerodyti=zuikis&puslapis=1">Zuikius 1</a>
        <a href="?nerodyti=zuikis&puslapis=2">Zuikius 2</a>
    </h2>
    <?php

    _d($_GET);

    if ($_GET['nerodyti'] == 'vovere') {
        echo 'rodom voveres ', 'Puslapis: ' .$_GET['puslapis'];
    } elseif ($_GET['nerodyti'] == 'zuikis') {
        echo 'rodom zuikius ', 'Puslapis: ' .$_GET['puslapis'];;
    }

    ?>

</body>

</html>