<?php

$host = '127.0.0.1';
$db   = 'f22';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);



// seeder
$trees = [
    [ 'Beržas', rand(0, 1500) / 100, 1 ],
    [ 'Eglė', rand(0, 1500) / 100, 1 ],
    [ 'Pušis', rand(0, 1500) / 100, 1 ],
    [ 'Kedras', rand(0, 1500) / 100, 1 ],
    [ 'Palmė', rand(0, 1500) / 100, 1 ],
    [ 'Agrastas', rand(0, 1500) / 100, 1 ],
    [ 'Šermukšnis', rand(0, 1500) / 100, 1 ],
    [ 'Kaštonas', rand(0, 1500) / 100, 1 ]
];
$n = rand(0, count($trees) - 1);

$sql = "INSERT INTO trees (`name`, height, `type`) 
        VALUES ( '".$trees[$n][0]."', ".$trees[$n][1].", ".$trees[$n][2].")
        ";

$pdo->query($sql);



