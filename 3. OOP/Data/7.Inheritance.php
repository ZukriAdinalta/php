<?php
class Manager {
  var string $name;
// tdk mengengbalikan value menggunana : void
  function sayHello(string $name) : void
  
  {
    echo "Hi $name, My name is $this->name" . PHP_EOL;
  }
}

class VicePresident extends Manager{
  
}

class Manager2 extends Manager{
  
}