<?php
/* Stringable Interface
  1. Di PHP 8, sekarang diperkenalkan interface baru bernama Stringable
  2. Jika kita melakukan override magic function __toString, maka secara otomatis class kita akan implement interface Stringable
  3. Kita tidak perlu melakukannya secara manual, ini sudah dilakukan secara otomatis oleh PHP 8
  4. https://wiki.php.net/rfc/stringable 
 */
//Kode : Function Argument Stringable
function sayHello(Stringable $stringable)
{
  echo "Hello {$stringable->__toString()}" . PHP_EOL;
}

//Kode : Override toString Function
class Person
{
  public function __toString(): string
  {
    return "Person";
  }
}

SayHello(new Person());