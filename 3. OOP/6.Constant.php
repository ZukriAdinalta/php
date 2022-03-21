<?php
/* Constant
  1. Properties di class bisa diubah, mirip seperti variable
  2. Di class juga kita membuat constant, data yang tidak bisa diubah
  3. Di materi PHP Dasar, kita belajar untuk membuat constant itu perlu menggunakan function define()
  4. Namun sejak PHP 7.4, kita bisa menggunakan kata kunci const untuk membuat constant, mirip seperti variable, namun tidak menggunakan karakter $
 */
require_once "Data/Constant.php";

define("Aplikasi", "Belajar PHP OOP"); // constant versi 7.3
const APP_VERSION = "1.0.0"; // constant versi 7.4 

echo Aplikasi . PHP_EOL;
echo APP_VERSION . PHP_EOL ;
echo Person::AUTHOR . PHP_EOL ;
echo Person::USERNAME . PHP_EOL;