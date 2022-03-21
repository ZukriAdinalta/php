<!-- IF Statement
  1. Dalam PHP If salah satu kunci yg digunakan di percabangan
  2. Percabangan artinya mengeksekusi kode progam tertentu ketika suatu kondisi terpenuhi.
  3. Hampir semua pemrogramana menggunakan if expression -->

<!-- Kode If Statement -->
<?php
$nilai = 90;
$absen = 90;

if ($nilai >= 75 && $absen >=75){
  echo "Selamat Anda Lulus" . PHP_EOL;
 
}
echo "</br>";
?>

<!-- Else Statement
  1. Blok if akan di eksekusi jika if nilai true
  2. Kadang kita ingin melakukan eksekusi program tertentu jika kondisi if bernilai false
  3. Hal ini bisa dilakukan menggunakan else statement -->

<!-- Kode Else Statement -->
<?php
$nilai = 70;
$absen = 90;

if ($nilai >= 75 && $absen >=75){
  echo "Selamat Anda Lulus" . PHP_EOL;
} else {
  echo "Anda Tidak Lulus" . PHP_EOL;
}
echo "</br>";
?>

<!-- Else if Statement
  1. kadang dlm if kita membuat beberapa kondisi
  2. kasus seperti ini kita menggunaka else if statement.
  3. else if bisa lebi dr satu.
  4.Else if bisa menggunaka "else if" atau "elseif" -->

<!-- Kode Else if Statement -->
<?php
$nilai = 90;
$absen = 90;

if ($nilai >= 80 && $absen >=80){
  echo "Nilai A" . PHP_EOL;
} else if ($nilai >= 70 && $absen >=70){
  echo " Nilai B" . PHP_EOL;
}else if ($nilai >= 60 && $absen >=60){
  echo "Nilai C" . PHP_EOL;
} else {
  echo "Nilai D" . PHP_EOL;
}
echo "</br>";
?>

<!-- Syntax Alternatif 
  1. Selain menggunakan kurung kurawal '{}', PHP juga menyediakan syntak alternatif utk menggunaka if yaitu dengan menggunakan titik dua ':'
  2. Namun kalau menggunakan ini kita harus menggunakan kata kunti endif diakhiri if statement  -->
<!-- Kode Syntax Alternatif  -->

<?php
$nilai = 90;
$absen = 20;
if ($nilai >= 80 && $absen >=80):
  echo "Nilai A" . PHP_EOL;
elseif ($nilai >= 70 && $absen >=70):
  echo " Nilai B" . PHP_EOL;
elseif ($nilai >= 60 && $absen >=60):
  echo "Nilai C" . PHP_EOL;
else:
  echo "Nilai D" . PHP_EOL;
endif;
echo "</br>";
?>