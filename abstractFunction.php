<?php

require_once 'data/Animal.php';
use Data\{Animal, Cat, Dog};

$cat = new Cat();
$cat->name = "tom";
$cat->run();

$dog = new Dog();
$dog->name = "spike";
$dog->run();