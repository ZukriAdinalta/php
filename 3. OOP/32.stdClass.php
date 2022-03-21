<?php
/* stdClass
  1. stdClass adalah class kosong bawaan dari PHP
  2. stdClass biasanya digunakan ketika kita melakukan konversi dari tipe lain menjadi tipe object
  3. stdClass sangat berguna ketika misal kita ingin melakukan konversi dari tipe data array ke object secara otomatis
 */

$array = 
[
  "firstName" => "Zukri",
  "lastName" => "Adinalta"
];
// kalau manggil array seperti ini $array["firstName"];
// object seharus seperti ini $array->firstName;
$object = (object)$array;

var_dump($object);

echo "Firstname : $object->firstName" . PHP_EOL;
echo "Firstname : $object->lastName" . PHP_EOL;

//menjadi kan seperti array lagi

$arrayLagi = (array) $object;
var_dump($arrayLagi);

require_once "Data/5.Constructor.php";

$person = new Orang("Zukri", "Padang");
var_dump($person);

//menjadi object jd array
$arrayPerson = (array) $person;
var_dump($arrayPerson);