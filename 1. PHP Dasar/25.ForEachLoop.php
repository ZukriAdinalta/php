<!-- For Each Loop
  1. kadang kita biasa mengakses data array menggubakan perulangan
  2. mengakses data array menggunakan perulangan sangat bertele-tele kita harus membuat counter, lalu mengakses array menggunakan counter yang kita buat.
  3. namun untungnya di php terdpt perulangan for each digunakan utk mengakses seleuruh data array otomatis.
-->
<!-- Kode tanpa for each -->
<?php
$names = ["Zukri", "Adinalta"];
for ($i =0; $i < count($names); $i++){
  echo "<p> Hello $i $names[$i] </p>";
}
?>

<!-- Kode For Each -->
<?php
$names = ["Zukri", "Adinalta"];
foreach($names as $name){
  echo " <p> Hello $name </p>";
}
?>

<!-- Kode for each dengan key -->
<?php
$person = [
  "firstName" => "Zukri",
  "lastName" => "Adinalta"
];
foreach ($person as $key => $value){
  echo "<p>$key : $value</p>";
}

?>