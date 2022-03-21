<!-- Break and Continue
  1. pada switch, kita sebuah mengenal kata kunci break, yaitu utk menghentikan case dalam switch.
  2. sm dgn perulangan, break digunakan utk menghetikan seluruh perulangan.
  3. Namun berbeda dgn continue, continue digunakan utk menghetikan perulangan saat ini. lalu melanjutkan ke perulangan selanjutnya. -->
<!-- Kode Break -->
<?php
$counter = 1;
while(true){
  echo " <p> Perulangan ke- $counter </p>" . PHP_EOL;
  $counter++;

  if ($counter > 10){
    //ketika counter lebih dari 10 break
    break;
  }
} 
?>

<!-- Kode Continue -->
<?php
for($counter=1; $counter <= 10; $counter++){
  if ($counter % 2 == 0){
    // jika sisa bagi 2 sama dengan 0 
    continue;
  }
  echo "<p> Perulangan Ke- $counter </p>";
}
?>