<?php

class Product
{
  protected string $name;
  protected int $price;

  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName(): string
  {
    return $this->name.PHP_EOL;
  }

  public function getPrice(): int
  {
    return $this->price.PHP_EOL;
  }
}

class ProductDummy extends Product
{
  public function getInfo(): void
  {
    echo "nama \t: ".$this->name.PHP_EOL;
    echo "harga \t: ".$this->price.PHP_EOL;
  }
}