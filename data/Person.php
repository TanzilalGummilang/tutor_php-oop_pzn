<?php 
class Person
{
  const AUTHOR = "Tanzilal Gummilang";

  var ?string $name = null;
  var ?string $address = null;
  var string $country = "indonesia";

  function __construct(string $name, string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

  function __destruct()
  {
    echo "object person $this->name is destroyed".PHP_EOL;
  }

  function sayHello(?string $name) 
  {
    if(is_null($name)) {
    echo "hi, my name is $this->name".PHP_EOL;
    } else {
    echo "hello $name, my name is $this->name".PHP_EOL;
    }
  }

  function info()
  {
    echo "author \t: ". self::AUTHOR.PHP_EOL;
  }

  

}
?>