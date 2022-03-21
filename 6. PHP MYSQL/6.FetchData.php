<?php
/* Fetch Data
  1. Sebelumnya saat kita melakukan query, kita biasanya menggunakan perulangan foreach untuk melakukan iterasi terhadap object PDOStatement
  2. Permasalahannya, foreach akan melakukan seluruh perulangan di hasil result. Bagaimana jika kita hanya ingin mengambil data pertama saja misal? Maka kita harus membuat counter secara manual
  3. Untungnya PDOStatemen memiliki sebuah function bernama fetch(), fetch() digunakan untuk menarik satu data dari hasil query, ketika kita memanggil function fetch() lagi, maka otomatis akan menarik data selanjutnya, jika panggil fetch() lagi, maka akan mengambil data ketiga, dan seterusnya
  4. Jika function fetch() mengembalikan nilai false, artinya sudah tidak ada data lagi yang bisa diambil dari hasil query
  5. Jika kita ingin mengambil seluruh data sekaligus, kita bisa menggunakan fetchAll()
 */
require_once __DIR__ . "/2.ExecuteSQL/2.ExecuteSQL.php";
$connection = getConnection();

$username = "zukri";
$password = "rahasia";

// Kode : Function fetch()
$sql = "select * from admin where username = ? AND password = ?";
$Statement = $connection->prepare($sql);
$Statement->execute([$username, $password]);

if ($row = $Statement->fetch()){
  echo "Sukses Login: " . $row["username"] . PHP_EOL;
}else {
  echo "Gagal Login" . PHP_EOL;
}

// Kode : Function fetchAll() -> menarik semua hasil query dan menjadikan array

$sql2 = "select * from customers";
$result = $connection->query($sql2);
$customers = $result->fetchAll();

var_dump($customers);