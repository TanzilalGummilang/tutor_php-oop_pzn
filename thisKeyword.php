<?php 
require_once 'data/Person.php';

$person = new Person();
$person->name = "ahah";
$person->sayHello("hehe");

$person02 = new Person();
$person02->name = "ihih";
$person02->sayHello(null);

?>