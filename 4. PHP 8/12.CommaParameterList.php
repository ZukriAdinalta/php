<?php
/*
  1. Ini adalah salah satu fitur sederhana, tapi bermanfaat
  2. Di PHP 8, kita sekarang bisa menambahkan karakter koma di akhir parameter list, seperti ketika memanggil function, membuat array dan lain-lain
  3. https://wiki.php.net/rfc/trailing_comma_in_parameter_list 
  4. https://wiki.php.net/rfc/trailing_comma_in_closure_use_list 
 */
//Kode : Comma di Argument 

function sayHello(string $first, string $last): void
{

}
SayHello(
  "Zukri",
  "Adinalta",
);

//Kode : Comma di Array 
$array = [
  "first" => "Zukri",
  "Last" => "Adinalta",
];