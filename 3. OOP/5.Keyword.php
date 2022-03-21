<?php
/*Keyword
  1. Saat kita membuat kode di dalam function di dalam class, kita bisa menggunakan kata kunci this untuk mengakses object saat ini
  2. Misal kadang kita butuh mengakses properties atau function lain di class yang sama
 */

require_once "Data/Keyword.php";

$person = new Person();
$person->name = "Zukri";
$person->sayHello("Eko");

$person2 = new Person();
$person2->name = "Budi";
$person2->sayHello(null);

$person3 = new Person();
$person3->address = "Padang";
$person3->Alamat(null);


?>