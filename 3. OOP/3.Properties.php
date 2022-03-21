<?php
/* Properties
  1.Fields / Properties / Attributes adalah data yang bisa kita sisipkan di dalam Object
  2.Namun sebelum kita bisa memasukkan data di fields, kita harus mendeklarasikan data apa aja yang dimiliki object tersebut di dalam deklarasi class-nya
  3. Membuat field sama seperti membuat variable, namun ditempatkan di block class, namun diawali dengan kata kunci var
 */

/* 
class Person{
  var $name; // Properties
  var $address; // Properties
  var $country; // Properties
} */

/* Manipulasi Properties
  1. Fields yang ada di object, bisa kita manipulasi. 
  2. Untuk memanipulasi data field, sama seperti cara pada variable
  3. Untuk mengakses field, kita butuh kata kunci -> setelah nama object dan diikuti nama fields nya
 */

require_once "Data/Properties.php";

$person = new Person();
$person->name = "Zukri";
$person->address = "Padang";
$person->country = "Indonesia";

var_dump($person);

echo "Name :  {$person->name}" . PHP_EOL;
echo "Addres :  {$person->address}" . PHP_EOL;
echo "Country :  {$person->country}" . PHP_EOL . PHP_EOL;

$person2 = new Person();
$person2->name = "Eko";
$person2->address = "Lombok";
$person2->country = "Indonesia";


echo "Name :  {$person2->name}" . PHP_EOL;
echo "Addres :  {$person2->address}" . PHP_EOL;
echo "Country :  {$person2->country}" . PHP_EOL . PHP_EOL;

/* Properties Type Declaration
  1. Sama seperti di function, di properties pun, kita bisa membuat type declaration
  2. Ini membuat PHP otomatis mengecek tipe data yang sesuai dengan type declaration yang telah ditentukan
  3.Jika kita mencoba mengubah properties dengan type yang berbeda, maka otomatis akan error
  4. Ingat, bahwa PHP memiliki fitur type juggling, yang secara otomatis bisa mengkonversi ke tipe data lain
  5. Untuk menambahkan type declaration, kita bisa tambahkan setelah kata kunci var di properties
 */

// Kode Properties Type Declaration 
/* 
class Person{
  var string $name; // Properties Type Declaration
  var string $address; // Properties Type Declaration
  var string $country; // Properties Type Declaration
} */

/* Default Properties Value
  1. Sama seperti variable, di properties juga kita bisa langsung mengisi value nya
  2. Ini mirip seperti default value, jadi jika tidak diubah di object, maka properties akan memiliki value tersebut
 */

// Kode Default Properties Value
/* 
class Person{
  var string $name; 
  var string $address; 
  var string $country = "Indonesia" ; 
} */

$person3 = new Person();
$person3->name = "Budi";
$person3->address = "Bandung";

echo "Name :  {$person3->name}" . PHP_EOL;
echo "Addres :  {$person3->address}" . PHP_EOL;
echo "Country :  {$person3->country}" . PHP_EOL . PHP_EOL;

/* Nullable Properties
  1. Saat kita menambah type declaration di properties atau di function argument, maka secara otomatis kita tidak bisa mengirim data null ke dalam properties atau function argument tersebut
  2. Di PHP 7.4 dikenalkan nullable type, jadi kita bisa mengirim data null ke properties atau function arguments
  3. Caranya sebelum type declaration nya, kita bisa tambahkan tanda ?
 */

 /*
 class Person
{
  var string $name;
  var ?string $address = null;
  var string $country = "Indonesia" ;
}
  */
  $person3 = new Person();
  $person3->name = "Adi";
  $person3->address = null;
  
  echo "Name :  {$person3->name}" . PHP_EOL;
  echo "Addres :  {$person3->address}" . PHP_EOL;
  echo "Country :  {$person3->country}" . PHP_EOL;