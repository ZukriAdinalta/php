<?php

class Person
{
  var string $name;
  var string $address;
  var string $country ;


function sayHello(?string $name)
{
  if (is_null($name)){
    echo "Hi, My Name is {$this->name} " . PHP_EOL;
  }else{
    echo "Hello $name, My Name is {$this->name} "  . PHP_EOL;
  }
  
}

function Alamat(?string $address)
{
  if (is_null($address)){
    echo "Alamat saya adalah {$this->address}" . PHP_EOL;
  } else{ 
    echo "Alamat kamu $address, alamat saya {$this->address} " . PHP_EOL;
  }
}

}
?>