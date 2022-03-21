<!-- Goto Operator
  1. Salah satu fitur yang sebenarnya jarang sekali  digunakan di PHP karena jika terlalu banyaak menggunakan goto operator maka kode aplikasi akan mudah binggung membaca kode nya.
  2. goto adalah fitur yang bisa loncat ke kode program sesuai keinginan kita.
  3. Agar bisa loncat ke kode program, kita harus membuat labell dgn menggunakan nama label lalu diakhiri : '(colon)'  -->

<!-- Kode Goto Operator -->
<?php
goto a;
echo "<p>Hello Wold</p>";

a:
echo "<p>Hello A</p>";
?>

<!-- Kode Goto Di LOOP -->
<?php
$counter = 1;
while (true){
  echo "<p> While loop $counter  </p> ";
  $counter++;
  if($counter > 10){
    goto end;
  }
}

end:
echo "<p>End Loop</p>";
?>