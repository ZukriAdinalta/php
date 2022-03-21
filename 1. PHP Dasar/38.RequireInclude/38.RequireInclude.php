<!-- Require dan Include
  1. saat membuat aplikasi, ada baiknya tidak membuat dalam satu file
  2. lebih baik dipisah agar file tdk menumpuk dlm satu file 
  3. PHP memiliki function require dan include yg bisa digunaka dalam mengambil file php lainya.
  4. pada require file yg diambil tidak ad maka terjadi error.
  5. padaa include file yang dimbil tdk ada maka memberi peringatan dan program tetap lanjut. -->

<!-- Kode Include -->
<?php

  include "MyFunction.php";

  echo sayHello("Zukri", "Adinalta")
?>

<!-- Kode require -->
<?php

  // require "MyFunction.php";

  // echo sayHello("Zukri", "Adinalta")
?>

<!-- Posisi Require dan Include
  1. Kode program PHP akan dibaca dr atas ke bawah, oleh karena itu pastikan posisi require dan include sesuai dgn yg kita ingin kan
  2. misal jika sampai kita salah menepatkan posisi require dan include bisa jd kita malah mengambil function yg belum ada -->

<!-- kode Posisi include salah -->
<?php
  // echo sayHello("Zukri", "Adinalta")
  // include "MyFunction.php";
?>

<!-- require_once dn include_once 
  1. function require dan include akan selalu mengambil file yg kita ingin kan
  2. jika kita beberapa kali menggunakan require dan include file yg sama maka file tersebut akan berkali-kali kita ambil
  3. Hal ini  bermasalah jika misal dlm file yg kita ambil terdpt definisi function sehingga jika di ambil berkali-kali akan menyebabkan error redeclare function.
  4. untungnya di PHP terdpt function require_once dan include_once, function ini bisa mendeteksi jika kita sebelumnya pernah mengambil file yang sama maka tdk akan diaimbil lg. 
-->

<!-- Kode require_once dn include_once -->
<?php
  include_once "MyFunction.php";
  include_once "MyFunction.php";
  echo sayHello("Zukri", "Adinalta")
?>