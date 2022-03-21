<?php
//SelfKeyword
/* Properties vs Constant
  1. Saat kita membuat object, properties yang terdapat di class akan secara otomatis dibuat per object, oleh karena itu untuk mengakses properties, kita perlu menggunakan object, atau jika dari dalam object tersebut sendiri, kita perlu menggunakan kata kunci this
  2. Sedangkan berbeda dengan constant, constant di class tidak akan dibuat per object. Constant itu hidupnya di class, bukan di object, oleh karena itu untuk mengaksesnya kita perlu menggunakan NamaClass::NAMA_CONSTANT
  3. Secara sederhana, properties akan dibuat satu per instance class (object), sedangkan constant dibuat satu per class
*/

/* self Keyword
  1. Jika di dalam class (misal di function) kita ingin mengakses constant, kita perlu mengakses menggunakan NamaClass::NAMA_CONSTANT
  2. Namun jika di dalam class yang sama, kita bisa menggunakan kata kunci self untuk mempermudah
 */

 require_once "Data/4.SelfKeyword.php";

$orang = new Person();
$orang->info();

 