<?php
/* Allow ::class on Objects
  1. Di PHP 7, untuk mendapatkan nama class sebuah object, kita perlu menggunakan NamaClass::class atau get_class($object)
  2. Di PHP 8, sekarang kita bisa langsung mengambil nama class dari $object::class secara langsung
  3. https://wiki.php.net/rfc/class_name_literal_on_object 
 */
// Kode : Allow ::class on Objects
class login
{

}

$login = new login();

var_dump($login::class); // php8
var_dump(get_class($login)); // yg lama (php 7)
var_dump(login::class); // php 7