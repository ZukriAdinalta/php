<!-- Function
  1. Function adalah blok kode program yg akan berjalan saat di panggil
  2. sebelumnya kita telah menggunakan function 'isset()', 'count()' dan lainnya.
  3. untuk membuat function di PHP kita menggunakan kata kunci Function, lalu diikiuti dengan nama function, kurung '()' dan diakhiri deengan blok.
  4. kita bisa manggil function dgn menggunakan nama function lalu diikuti kurung '()'
  5. di bahasa programanan lain function disebut juga dengan method. -->

<!-- Kode Function -->
<?php
function sayHello(){
  echo "<p>Hello Function</p>";
}

sayHello();
sayHello();
?>

<!-- Lokasi Function
  1. tdk seperti pemprograman lain yg harus ada lokasi dimana membuat function.
  2. Di PHP bebas membuat function dimanapun, bisa didalam if statement di dlm function dan sebagainya.
  3. Perlu diingat kode function yg belum dieksekusi oleh PHP, maka function tersebut tdk akan digunakan. -->

<!-- Kode Lokasi Function -->
<?php

$buat = true; // jadi false maka jd error karena function tdk di buat karena if false.
if ($buat){
  function hi()
  {
    echo "Hai";
  }
}

hi();
?>