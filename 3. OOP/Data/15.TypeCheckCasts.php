<?php
// Pewarisan atau Inheritance

use BackendProgrammer as GlobalBackendProgrammer;
use FontendProgrammer as GlobalFontendProgrammer;

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

// Check dan Casts
function sayHello(Programmer $programmer)
{
  if ($programmer instanceof BackendProgrammer){
    echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
  } else if ($programmer instanceof FontendProgrammer){
    echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
  } else if ($programmer instanceof Programmer){
    echo "Hello Programmer $programmer->name" . PHP_EOL;
  }
}