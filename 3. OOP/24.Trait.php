<?php
/* Trait
  1. Selain class dan interface, di PHP terdapat feature lain bernama trait
  2. Trait mirip dengan abstract class, kita bisa membuat konkrit function atau abstract function
  3. Yang membedakan adalah, di trait bisa kita tambahkan ke dalam class lebih dari satu trait
  4. Trait mirip seperti ekstension, dimana kita bisa menambahkan konkrit function ke dalam class dengan trait
  5. Secara sederhana trait adalah digunakan untuk menyimpan function-function yang bisa digunakan ulang di beberapa class
  6. Untuk menggunakan trait di class, kita bisa menggunakan kata kunci use
*/

require_once "Data/21.Trait.php";

use Data\Traits\{Person, SayGoodBye, SayHello};

$person = new Person();
$person->goodBye("Eko");
$person->Hello("Zukri");

/*Trait Properties
1. Berbeda dengan interface, di trait, kita bisa menambahkan properties
2. Dengan menambahkan properties, secara otomatis class tersebut akan memiliki properties yang ada di trait
 */

 $person->name ="Budi";
 echo "Hai, $person->name" . PHP_EOL;