<!-- Is Function
  1. PHP Memiiki banyak sekali function dengan prefix is_
  2. function ini rata-rata digunakan utk mengecek data dari sebuah data
  3. https://www.php.net/manual/en/ref.var.php -->
<!-- Contoh Is FUnction
  1. " is_string() " => apakah tipe data string
  2. " is_bool() " => apakah tipe data boolean
  3. " is_int() " => apakah tipe data  integer
  4. " is_float() " => apakah tipe data floating point
  5. " is_array() " => apakah tipe data array
  6. " is_callable " => apakah tipe data callable  -->

<!-- Kode Is Function -->
<?php
$data = "Zukri";

var_dump(is_string($data));
var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_callable($data));
var_dump(is_null($data));
?>