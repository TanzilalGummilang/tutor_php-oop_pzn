<?php
require_once 'data/Manager.php';

$manager = new Manager("bud");
// $manager->name = "budi";
$manager->sayHello("joko");

$vp = new VicePresident();
$vp->name = "eko";
$vp->sayHello("joko");