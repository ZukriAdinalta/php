<?php

class Person
{
  var string $name;
  var string $address;
  var string $country ;


function sayHello(string $name)
{
  echo "Hello $name" . PHP_EOL;
}

function Alamat(?string $address)
{
  echo "Alamat Kamu $address" . PHP_EOL;
}
}
?>