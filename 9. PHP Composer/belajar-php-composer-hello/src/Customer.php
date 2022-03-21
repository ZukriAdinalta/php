<?php

namespace Kuma\BelajarPhpComposerHello;

class Customer
{
  public function __construct(private string $name)
  {
    
  }

  public function sayHello(string $name)
  {
    echo "Hello $name, My name Is $this->name";
  }
}