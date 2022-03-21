<?php
/* Constructor
  1. Saat kita membuat Object, maka kita seperti memanggil sebuah function, karena kita menggunakan kurung ()
  2. Di dalam class PHP, kita bisa membuat constructor, constructor adalah function  yang akan dipanggil saat pertama kali Object dibuat.
  3. Mirip seperti di function, kita bisa memberi parameter pada constructor
  4. Nama constructor di PHP haruslah __construct()
 */

 require_once "Data/5.Constructor.php";

 $person = new Orang("Zukri", "Padang");
 $person->country = "Indonesia";
// var_dump($person);
echo "Name :  {$person->name}" . PHP_EOL;
echo "Addres :  {$person->address}" . PHP_EOL;
echo "Country :  {$person->country}" . PHP_EOL . PHP_EOL;

$person2 = new Orang("Eko", null);

// var_dump($person2);
echo "Name :  {$person2->name}" . PHP_EOL;
echo "Addres :  {$person2->address}" . PHP_EOL;
echo "Country :  {$person2->country}" . PHP_EOL . PHP_EOL;