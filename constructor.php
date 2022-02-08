<?php 
require_once 'data/Person.php';

$person = new Person("anj", "bangsad city");
// var_dump($person);
echo $person->name.PHP_EOL;

$person->sayHello(null);
$person->sayHello("sia");



?>