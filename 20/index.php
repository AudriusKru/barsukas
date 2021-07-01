<?php

namespace Zoo;
//short code
use Zoo\Animal;
use Australia\Animal as AnimalA;
use Belgium\Animal as B;

require __DIR__ .'/vendor/autoload.php';


// php siulo funkcija sp_autoload();
//prefix yra ta namespace dalis kuri neatitinka folderio strukturos  mes turime (zoo animal bet musu folderio zoo nera tai mes sakome kad sori bet pas mus toks dalykas kaip zoo folderi neegzituoja)
//base_dir yra egzistuojantis folderis kurio nera namespace 
// principas kaip kodas iesko klase jei nori klases Zoo\Animal zoo folderis clase animal

// spl_autoload_register(function ($class) {
//     $prefix = 'Zoo\\';
//     $base_dir = __DIR__ . '/';
//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }

//     $relative_class = substr($class, $len);
//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//     if (file_exists($file)) {
//         require $file;
//     }
// });

// spl_autoload_register(function ($class) {
//     $prefix = 'Australia\\';
//     $base_dir = __DIR__ . '/australai/';
//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }

//     $relative_class = substr($class, $len);
//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//     if (file_exists($file)) {
//         require $file;
//     }
// });
// spl_autoload_register(function ($class) {
//     $prefix = 'Belgium\\';
//     $base_dir = __DIR__ . '/belgai/';
//     $len = strlen($prefix);
//     if (strncmp($prefix, $class, $len) !== 0) {
//         return;
//     }

//     $relative_class = substr($class, $len);
//     $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
//     if (file_exists($file)) {
//         require $file;
//     }
// });


// require __DIR__ . '/australai/Animal.php';
// require __DIR__ . '/belgai/Animal.php';
// require __DIR__ . '/Animal.php';


echo Animal::sayUUID();
// new Animal;
echo '<br>';
echo AnimalA::$go;
echo '<br>';
echo Animal::$go;
echo '<br>';
echo B::$go;
