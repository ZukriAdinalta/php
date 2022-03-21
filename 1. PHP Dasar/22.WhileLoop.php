<!-- While Loop
  1. while loop perulangan lebih sederhana dari pada for loop
  2. di while loop, terdpt kondisi perulanagan, tanpa ada init dan post statement -->

<!-- Kode While Loop -->
<?php
  $counter = 1;
  while ($counter <= 10){
    echo "<p?> Perulangan Ke - $counter </p>";
$counter++;
}
?>
<!-- Kode Syntax Alternatif -->
<?php
  $counter = 10;
  while ($counter >= 1):
    echo "<p?> Perulangan Ke - $counter </p>";
$counter--;
endwhile;
?>