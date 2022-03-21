<?php
class Person2
{
  var string $name;
  var ?string $address = null;
  var string $country = "Indonesia" ;


  public function __construct(string $name, ?string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }

function __destruct()
{
  echo "Object Person $this->name is destroyed " . PHP_EOL;
}
}
 