<?php 
require_once 'data/Person.php';

$person = new Person();
$person->name = "Tanzilal";
$person->address = "Rancaekek";
$person->country = "Indonesia";

var_dump($person);

echo "Name\t: ".$person->name.PHP_EOL;
echo "Address\t: ".$person->address.PHP_EOL;
echo "Country\t: ".$person->country.PHP_EOL;
echo PHP_EOL;

$person02 = new Person();
$person02->name;
$person02->address;
$person02->country;

var_dump($person02);