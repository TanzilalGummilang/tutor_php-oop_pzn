<?php

require_once 'data/Car.php';
use Data\{Avanza};

$car1 = new Avanza;

$car1 = $car1->getBrand();
echo $car1;