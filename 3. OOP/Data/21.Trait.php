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

class Person
{
  use SayGoodBye, SayHello, HasName;
}