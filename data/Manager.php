<?php

class Manager
{
  var string $name;
  var string $title;

  public function __construct(string $name = "", string $title = "Manager")
  {
    $this->name = $name;
    $this->title = $title;
  }

  function sayHello(string $name): void
  {
    echo "hi $name, my name is $this->name as a $this->title".PHP_EOL;
  }
}

class VicePresident extends Manager
{
  public function __construct(string $name = "")
  {
    // tidak wajib, tapi direkomendasikan
    parent::__construct($name, "VP");
  }

  function sayHello(string $name): void
  {
    echo "hi $name, my name is $this->name as a $this->title".PHP_EOL;
  }
}