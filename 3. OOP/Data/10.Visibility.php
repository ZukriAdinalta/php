<?php

class product{


  protected string $name;
  protected int $price;

//kode private
  public function __construct(string $name, int $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName(): string
  {
    return $this->name;
  }

  public function getPrice(): int
  {
   return $this->price;
  }
}

//kode protected 
class productDummy extends product
{
  public function info()
  {
    echo "Name : $this->name " . PHP_EOL;
    echo "Name : $this->price " . PHP_EOL;
  }
}