<!-- Arrow Function 
  1. Arrow function di perkenalkan pada PHP 7.4 sebagai alternative anoymous function yg lebih sederhana pembuatan
  2. secara garis besar, sebenarnya arrow function dan anonymous funtion adalah 2 hal yang sama.
  3. Arrow function variable diluar clouser bisa digunakan, tidak seperti anonymous harus menggunakan kata kunci use.
  4. pembuatan arrow funtion tdk menggunakan kata kunci function melainkan fn
  5. Arrow function di khusus pembuatan function sederhana -->

<!-- Kode Arrow Function  -->
<?php
$firstName = "Zukri";
$lastName = "Adinalta";

// anonymousFunction 
$anonymousFunction = function () use ($firstName, $lastName){
  return "<p> Helo $firstName $lastName </p>";
};

// arrowfunction
// $arrowFunction = fn() => "<p> Hello $firstName $lastName </p>";

echo $anonymousFunction();
?>