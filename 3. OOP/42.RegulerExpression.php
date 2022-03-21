<?php
/* Regular Expression
  1. PHP mendukung regular expression yang kompatibel dengan bahasa pemrograman Perl
  2. Regular expression merupakan fitur yang digunakan untuk melakukan pencarian di string menggunakan pola tertentu
  3. Materi ini sebenarnya materi yang sangat panjang, sehingga disini kita akan bahas sedikit pengenalannya
  4. Untuk pembuatan pattern di regular expression, detailnya bisa dibaca disini : https://www.php.net/manual/en/pcre.pattern.php 
 */

 /* Function Regular Expression => https://www.php.net/manual/en/ref.pcre.php 
  1. preg_match ($pattern ,$subject) dan  preg_match_all ($pattern ,$subject) => Digunakan untuk mencari match pattern
  2. preg_replace ( $pattern , $replacement, $subject) => Digunakan untuk mereplace semua pattern dengan replacement
  3. preg_split ( $pattern , $subject) => Digunakan untuk memotong dengan pattern menjadi array
  */
// Kode : Regular Expression Match
$matches = [];
$result = (bool)preg_match_all("/zukri|adi|ta|eko/i", "Zukri Adinalta", $matches); // i = walaupun huruf kapital atau tidak tetap terbaca

var_dump($result);
var_dump($matches);

//Kode : Regular Expression Replace
$result = preg_replace("/anjing|bangsat/i", "***", "dasar lu anjing bangsat!");
var_dump($result);

// Kode : Regular Expression Split
$result = preg_split("/[\s,-]/", "Zukri Adinalta,kuma-bbj"); // [\s,-] /s artinya spasi dan -  
var_dump($result);