<?php
/* Consistent Type Error
  1. Saat kita membuat function, dan ketika kita mengirim argument dengan tipe data yang salah, maka akan berakibat terjadi TypeError
  2. Sayangnya di PHP banyak function bawaan yang tidak mengembalikan TypeError, malah memberi warning
  3. Agar konsisten, sekarang di PHP 8, banyak function bawaan yang akan error TypeError jika kita salah mengirim tipe data
  4. https://wiki.php.net/rfc/consistent_type_errors 
 */

//Kode : Consistent Type Error
// strlen([]);