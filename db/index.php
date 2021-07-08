<?php

$host = '127.0.0.1';
$db   = 'f22';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,           // kaip masyvas
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);



// seeder
$trees = [
    [ 'Beržas', rand(0, 1500) / 100, 1 ],
    [ 'Eglė', rand(0, 1500) / 100, 2 ],
    [ 'Pušis', rand(0, 1500) / 100, 2 ],
    [ 'Kedras', rand(0, 1500) / 100, 2 ],
    [ 'Palmė', rand(0, 1500) / 100, 3 ],
    [ 'Agrastas', rand(0, 1500) / 100, 2 ],
    [ 'Šermukšnis', rand(0, 1500) / 100, 1 ],
    [ 'Kaštonas', rand(0, 1500) / 100, 1 ]
];
$n = rand(0, count($trees) - 1);

$sql = "INSERT INTO trees (`name`, height, `type`) 
        VALUES ( '".$trees[$n][0]."', ".$trees[$n][1].", ".$trees[$n][2].")
        ";

$pdo->query($sql);


//skaitymas 


$sql = "SELECT id, `name`, height, `type`
        FROM trees
        WHERE `type` <> 2 AND height > 10
        ORDER BY `name`
       ";

$stmt = $pdo->query($sql);              // DB steitmentas

       while ($row = $stmt->fetch())    // duok man viena eilute
       {
           echo $row['id'] . ' '.$row['name'].' '.$row['height'].' '.$row['type'].'<br>';
       }


// redagaimas

$sql = "UPDATE trees
        SET height = 5.55
        WHERE id = 22
        ";

$pdo->query($sql);


// trynimas


$sql =  "DELETE FROM trees
         WHERE id = 24
        ";

$pdo->query($sql);