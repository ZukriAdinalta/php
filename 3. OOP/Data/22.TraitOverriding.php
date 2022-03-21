<?php
namespace Data\Traits;

// Trait Class
trait SayGoodBye
{
  function goodBye(?string $name) : void
  {
    if (is_null($name)){
      echo "Good Bye" . PHP_EOL;
    } else {
      echo "Good Bye $name" . PHP_EOL;
    }
  }
}

trait SayHello
{
  function Hello(?string $name) : void
  {
    if (is_null($name)){
      echo "Hello" . PHP_EOL;
    } else {
      echo "Hello $name" . PHP_EOL;
    }
  }
}

// Trait Properties
trait HasName{
  public string $name;
}

// Kode Trait Abstract Function
trait CanRun
{
  public abstract function run(): void;
}

class ParentPerson
{
   // Trait Overriding

  public function goodBye(?string $name): void
  {
    echo "Good bye in Person" . PHP_EOL;
  } 

  public function Hello(?string $name): void
  {
    echo "Hello in Person" . PHP_EOL;
  }
}


class Person extends ParentPerson
{
  use SayGoodBye, SayHello, HasName, CanRun{
    // Trait Visibility Override => bisa di override
    // goodBye as private;
    // Hello as private;
  }

  public function run(): void 
  {
    echo "Person $this->name is Running" . PHP_EOL;
  }

   // Trait Overriding

  /* 
  public function goodBye(?string $name): void
  {
    echo "Good bye in Person" . PHP_EOL;
  } 

  public function Hello(?string $name): void
  {
    echo "Hello in Person" . PHP_EOL;
  } */

}