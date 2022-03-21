<?php
// Pewarisan atau Inheritance
class Programmer
{
  public string $name;

  public function __construct(string $name)
  {
    $this->name = $name;
  }

}

class BackendProgrammer extends Programmer{
  
}

class FontendProgrammer extends Programmer{
  
}

// Polymorphism

class Company{
  public Programmer $programmer;
}

function sayHello(Programmer $programmer){
  echo "Hello $programmer->name" . PHP_EOL;
}