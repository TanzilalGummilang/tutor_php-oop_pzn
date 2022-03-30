<?php

class Programmer
{
  public string $name;
  
  public function __construct(string $name)
  {
    $this->name = $name;
  }
}

class BackendProgrammer extends Programmer{}
class FrontendProgrammer extends Programmer{}


class Company
{
  public Programmer $programmer;
}

function sayHelloProgrammer(Programmer $programmer)
{
  if($programmer instanceof BackendProgrammer){
    echo "hello backend programmer $programmer->name".PHP_EOL;
  }elseif($programmer instanceof FrontendProgrammer){
    echo "hello frontend programmer $programmer->name".PHP_EOL;
  }elseif($programmer instanceof Programmer){
    echo "hello programmer $programmer->name".PHP_EOL;
  }
}