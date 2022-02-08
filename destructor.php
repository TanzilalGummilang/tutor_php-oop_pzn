<?php 
require_once 'data/Person.php';

$person = new Person("anj", "bangsad city");
$person02 = new Person("anjING", "bangsadZZ city");
// var_dump($person);
echo $person->name.PHP_EOL;
echo $person02->name.PHP_EOL;

$person->sayHello(null);
$person->sayHello("sia");
echo PHP_EOL;

echo "program selesai".PHP_EOL;

