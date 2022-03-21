<?php
/* Magic Function
  1. Magic function adalah function-function yang sudah ditentukan kegunaannya di PHP
  2. Kita tidak bisa membuat function tersebut, kecuali memang sudah ditentukan kegunaannya
  3. Sebelumnya kita sudah membahas beberapa magic function, seperti __construct() sebagai constructor, __destruct() sebagai destructor, dan __clone() sebagai object cloning
  4. Masih banyak magic function lainnya, kita bisa melihatnya di link berikut : 
  https://www.php.net/manual/en/language.oop5.magic.php 
 */
require_once "Data/25.MagicFunction.php";
$student = new Student();
$student->id = "1";
$student->name = "Zukri";
$student->value = 100;

/*__toString() Function
  1. __toString() function merupakan salah satu magic function yang digunakan sebagai representasi string sebuah object
  2. Jika misal kita ingin membuat string dari object kita, kita bisa membuat function __toString()
 */

$string = (string) $student;
echo $string . PHP_EOL;


/* __invoke() Function
  1. __invoke() merupakan function yang dieksekusi ketika object yang kita buat dianggap sebagai function
  2. Misal ketika kita membuat object $student, lalu kita melakukan $student(), maka secara otomatis function __invoke() yang akan dieksekusi
*/
$student(1, "Zukri", true, "Adinalta");



/*__debugInfo() Function
  1. Sebelumnya kita sering melakukan debug variable menggunakan function var_dump()
  2. Function var_dump() sebenarnya memanggil function __debugInfo() 
  3. Jika kita ingin mengubah isi dari debug info, kita bisa membuat function __debugInfo()
*/
var_dump($student);