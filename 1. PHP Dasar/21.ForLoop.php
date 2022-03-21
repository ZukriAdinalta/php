<!-- For Loop
for adalah salah satu yg digunakan utk melakukan perulangan, blok kode yg terdapat di dm for akan selalu dilindungi selama kondisi for terpenuhi. -->

<!-- Sintak Perulangan For
 'for(init statement; kondisi; post statement) {'
    // blok perulangan 
  '};'
  penjelasan: 
  1. Init statement => akan dieksekusi hanya sekali diawal sebelum perulangan.
  2. kondisi => dilakukan pengecekan dlm setiap perulangan, jika true pelurangan akan dilakukan jika false perulangan dihentikan.
  3. post statement => akan di eksekusi setiap diakhir perulangan.
  4. Init statement dan post statement => tdk wajib diisi, jika kondisi tidak disi maka diagap benilai true
 -->

<!-- Kode - perulangan tanpa henti -->
<?php
/* for (;;) {
   echo "Hello For Loop" . PHP_EOL;
} */
?>

<!-- Kondisi -->
<?php
$counter = 1;
for(; $counter <= 5; ){
  echo "<p>Perulangan Ke - $counter  </p>"  . PHP_EOL;
  $counter++;
}
?>

<!-- Init statement -->
<?php
for($counter = 1; $counter <= 5; ){
  echo "<p> Perulangan Ke - $counter  </p>"  . PHP_EOL;
  $counter++;
}
?>

<!-- Post statement -->
<?php
for($counter = 1; $counter <= 5;  $counter++){
  echo "<p> Perulangan Ke - $counter  </p>"  . PHP_EOL;
 
}
?>
<!-- Syntak Alternatif -->
<?php
for($counter = 5; $counter >= 1;  $counter--):
  echo "<p> Perulangan Ke - $counter  </p>"  . PHP_EOL;
endfor;
?>