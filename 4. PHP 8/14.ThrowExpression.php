<?php
/* Throw Expression
  1. Throw adalah sebuah statement
  2. Hal ini menyebabkan kadang kita kesulitan menggunakan throw di beberapa tempat yang membutuhkan expression, seperti ternary operator misalnya
  3. Di PHP 8, sekarang throw adalah sebuah expression, artinya dia memiliki nilai, dan sekarang kita bisa gunakan di tempat-tempat yang memang membutuhkan expression, seperti ternary operator
  4. https://wiki.php.net/rfc/throw_expression 
 */

//Kode : Throw Expression
$name = "Zukri";
$result = $name == "Zukri" ? "Sukses" : throw new Exception("UPS");

function validate(?string $name)
{
  $result = $name ?? throw new Exception("Tidak Boleh Null");
  echo "Hello $result". PHP_EOL;
}

Validate("zukri");
Validate(null);