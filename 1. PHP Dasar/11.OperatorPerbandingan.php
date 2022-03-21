<!-- Operator Perbadingan
  1. Operator Perbandingan digunakan membandingkan dua buah value.
  2. Hasil dr operator perbandingan adalah boolean, true perbandingan benar dan false perbandingan salah -->

<!-- Operasi Operator Perbandingan
  1. $a == $b => 'sama dengan' => true jika $a sma dengan $b setelah melakukan konversi tipe data.
  2. $a === $b => 'Identik' => true jika $a sama dengan $b memiliki tipe data yang sama.
  3. $a != $b => 'tdk sama dengan' => true jika $a tdk sama dengan $b setelah melakukan konversi tipe data.
  4. $a <> $b => 'tdk sama dengan' => true jika $a tdk sama dengan $b setelah melakukan konversi tipe data.
  5. $a !== $b => 'tdk identik' => true jika $a tdk sama dengan $b atau tdk sama tipe data.
  6. $a < $b => 'Kurang dari' => true jika $a kurang dari $b.
  7. $a <= $b => 'Kurang dari atau sama dengan' => true jika $a Kurang dari atau sama dengan $b. 
  8. $a > $b => 'lebih dari' => true jika $a lebih dari $b.
  9. $a => $b => 'lebih dari atau sama dengan' => true jika $a lebih dari atau sama dengan $b.  -->


<!-- Kode Operator Perbandingan -->
<?php
var_dump("10" == 10);
var_dump("10" === 10);
var_dump("10" !== 10);

var_dump(10 > 9);
var_dump(10 >= 10);

?>