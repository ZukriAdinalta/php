<?php
class Manager {
  var string $name;
// tdk mengengbalikan value menggunana : void
  function sayHello(string $name) : void
  
  {
    echo "Hi $name, My name is Manager $this->name" . PHP_EOL;
  }
}

class VicePresident extends Manager{

  function sayHello(string $name) : void
  
  {
    echo "Hi $name, My name is VP $this->name" . PHP_EOL;
  }
  
}