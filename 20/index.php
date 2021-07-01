<?php
namespace Zoo;

require __DIR__.'/Animal.php';
require __DIR__.'/belgai/Animal.php';
require __DIR__.'/australai/Animal.php';

new Animal;

new Australia\Animal;

new Belgium\Animal;