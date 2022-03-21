<!-- Null Coalescing Operator
  1. Sebeumnya kita tahu bahwa data kosong dipresentasikan dengan data NULL di PHP.
  2. mengecek apkah sebuah data ada atau tidak dan juga apakah data tersebut isinya null atau tdk.
  3. biasanya utk melakukan itu kita menggunakan pengecekan if statement dengan ' function isset($variable) '
  4. namun php ada coalescing operator menggunakan tanda ?? -->

<!-- Kode tanpa Null Coalescing Operator -->
<?php
$data = [
  // "action" => "apa"
];
if (isset ($data["action"])){
  $action = $data["action"];
} else {
  $action = 'nothing';
}

echo $action . PHP_EOL;
echo "</br>"
?>

<!-- Kode  Null Coalescing Operator -->
<?php
$data = [
  // "action" => "apa"
];
$action = $data["action"] ?? "nothing";
echo $action;
?>