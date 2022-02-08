<?php 
require_once 'data/Person.php';

define('LAMA', 'const cara lama');
const BARU = 'const cara baru';

echo LAMA.PHP_EOL;
echo BARU.PHP_EOL;

echo Person::AUTHOR;


?>