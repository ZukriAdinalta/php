<?php
class Orang
{

  var string $name;
  var ?string $address = null;
  var string $country = "Indonesia" ;


  public function __construct(string $name, ?string $address)
  {
    $this->name = $name;
    $this->address = $address;
  }
}