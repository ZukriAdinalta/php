<?php
/*Overloading
  1. Overloading adalah kemampuan secara dinamis membuat properties atau function
  2. Ini mirip meta programming di bahasa pemrograman lain seperti Ruby
  3. Namun ini berbeda dengan function overloading di bahasa pemrograman lain seperti Java
  4. Overloading ini erat kaitannya dengan magic function yang sebelumnya sudah kita bahas
 */

 /* Properties Overloading
  1. Saat kita mengakses properties, maka secara otomatis properties akan diakses
  2. Namun jika ternyata properties tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadikan itu error
  3. PHP akan melakukan fallback ke magic function
  4. Dengan demikian kita bisa membuat properties secara dinamis dengan memanfaatkan magic function tersebut
  5. Ada beberapa magic function yang bisa kita gunakan untuk properties overloading
 */

 /*Magic Function untuk Properties Overloading
  1. __set($name, $value) : void => Dieksekusi ketika mengubah properties yang tidak tersedia
  2. __get($name) : mixed => Dieksekusi ketika mengakses properties yang tidak tersedia
  3. __isset ($name ) : bool => Dieksekusi ketika mengecek isset() atau empty() properties yang tidak tersedia
  4. __unset($name) : void => Dieksekusi ketika menggunakan unset() properties yang tidak tersedia
 */

 require_once "Data/26.Overloading.php";
 $zero = new Zero();
 $zero->firstName = "Zukri";
 $zero->lastName = "Adinalta";

 echo "First Name : $zero->firstName" . PHP_EOL;
 echo "Last Name : $zero->lastName" . PHP_EOL;

 /*Function Overloading
  1. Saat kita mengakses function, maka secara otomatis function akan diakses
  2. Namun jika ternyata function tersebut tidak tersedia di objectnya, maka PHP tidak secara otomatis menjadikan itu error
  3. PHP akan melakukan fallback ke magic function
  4. Dengan demikian kita bisa membuat function secara dinamis dengan memanfaatkan magic function tersebut
  5. Ada beberapa magic function yang bisa kita gunakan untuk function overloading
 */

 /*Magic Function untuk Function Overloading
  1. __call ( $name , $arguments ) : mixed => Dieksekusi ketika memanggil function yang tidak tersedia
  2. static __callStatic ( $name , $arguments ) : mixed => Dieksekusi ketika memanggil static function yang tidak tersedia
 */

 $zero->sayHello("Zukri", "Adinalta");
 Zero::sayHello("Zukri", "Adinalta");