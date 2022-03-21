<?php
/* Namespace
  1. Saat kita membuat aplikasi, bisa dipastikan kita akan banyak sekali membuat class
  2. Jika class terlalu banyak, kadang akan menyulitkan kita untuk mencari atau mengklasifikasikan jenis-jenis class
  3. PHP memiliki fitur namespace, dimana kita bisa menyimpan class-class kita di dalam namespace
  4. Namespace bisa nested, dan jika kita ingin mengakses class yang terdapat di namespace, kita perlu menyebutkan nama namespace nya
  5. Namespace bagus ketika kita punya beberapa class yang sama, dengan menggunakan namespace nama class sama tidak akan menjadikan error di PHP
*/
// Tanpa NameSpace
/* 
class Conflict{
}
class Conflict{
}*/

/* Membuat Namespace
  1. Untuk membuat namespace, kita bisa menggunakan kata kunci namespace
  2. Jika kita ingin membuat sub namespace, kita cukup gunakan karakter \ setelah namespace sebelumnya
 */
require_once "Data/8.Namespace.php";
// Membuat object dari namespace
$namespace = new \Data\One\Conflict();
$namespace = new Data\two\Conflict(); // boleh di awal gunakan \ atau tdk

/* Function dan Constant di Namespace
  1. Selain class, kita juga menggunakan function dan constant di namespace
  2. Dan jika kita ingin menggunakan function atau constant tersebut, kita bisa menggunakannya dengan diawali dengan nama namespace nya
 */

 echo Helper\APPLICATION . PHP_EOL; //menggunakan const
 echo Helper\helpme() . PHP_EOL; // menggubakan function

/* Global Namespace
  1. Secara default saat kita membuat kode di PHP sebenarnya itu disimpan di global namespace
  2. Global namespace adalah namespace yang tidak memiliki nama namespace
*/
// Kode Namespace
/*
 namespace {
  require_once "Data/8.Namespace.php";

  $namespace = new \Data\One\Conflict();
  $namespace = new Data\two\Conflict();

  echo Helper\APPLICATION . PHP_EOL; 
  echo Helper\helpme() . PHP_EOL;
} */