<?php
/* Constructor Overriding
  1. Karena constructor sama seperti function, maka constructor-pun bisa kita deklarasikan ulang di class Child nya
  2. Sebenarnya di PHP, kita bisa meng-override function dengan arguments yang berbeda, namun sangat tidak disarankan
  3. Jika kita melakukan override function dengan arguments berbeda, maka PHP akan menampilkan WARNING
  4. Namun berbeda dengan constructor overriding, kita boleh meng-override dengan mengubah arguments nya, namun direkomendasikan untuk memanggil parent constructor
 */
require_once "Data/13.ConstructorOverriding.php";

$manager = new Manager();
$manager->name = "Zukri";
echo "Name :  {$manager->name}" . PHP_EOL;
echo "title :  {$manager->title}" . PHP_EOL;

$vp = new VicePresident();
$vp->name = "Eko";
echo "Name :  {$vp->name}" . PHP_EOL;
echo "title :  {$vp->title}" . PHP_EOL;