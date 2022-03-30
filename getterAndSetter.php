<?php

require_once 'data/Category.php';

$category1 = new Category();
$category1->setName("");
$category1->setExpensive(true);

echo "name : " . $category1->getName() . PHP_EOL;
echo "expensive : " . $category1->isExpensive() .PHP_EOL;