<?php 
require_once 'data/Person.php';

$person = new Person();
$person->name = "zexs";
$person->sayHello("Tanzilal");

$person->info();
