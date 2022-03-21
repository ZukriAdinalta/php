<!-- Ternary Operator
  1. Kadang kita butuh melakukan pengecekan menggunakan if statement, jika benar kita ingin memberi nilai terhadap variable dgn nilai x dan jika salah bernilai Y.
  2. Penggunakan if statement pada kasus ini bisa mempersingkat menggunakan ternary operator.
  3. ternary opertor menggunakan kata kunci ? dan :-->

<!-- Kode bukan Tenanry Operator -->
<?php
$gender = "Pria";
$hi = null;
if ($gender == "Pria"){
  $hi = "Hai Bro!";
}else {
  $hi = "Hi Nona!";
}

echo $hi . PHP_EOL;
echo "</br>";
?>

<!-- Kode Tenanry Operator -->
<?php
$gender = "Wanita";
$hi = $gender == "Pria" ? "Hai Bro!" : "Hi Nona!";

echo $hi . PHP_EOL;
?>