<?php

require_once 'data/Product.php';

$product = new Product("apple", 10000);
echo $product->getName();
echo $product->getPrice();
echo PHP_EOL;

$product2 = new Product("watermelon", 20000);
echo $product2->getName();
echo $product2->getPrice();
echo PHP_EOL;

$dummy = new ProductDummy("orange", 5000);
$dummy->getInfo();