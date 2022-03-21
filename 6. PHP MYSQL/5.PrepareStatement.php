<?php
require_once __DIR__ . "/2.ExecuteSQL/2.ExecuteSQL.php";
$connection = getConnection();
/* Prepare Statement
  1. Cara yang lebih aman untuk membuat SQL dengan input parameter dari user sebenarnya menggunakan function prepare()
  2. Function prepare() akan menghasilkan object PDOStatement, dimana kita bisa melakukan binding parameter ke perintah SQL yang kita buat
  3. Ini lebih aman dibandingkan menggunakan function quote() secara manual, karena rawan lupa
  4. Namun jika menggunakan function prepare(), pembuatan string SQL nya agak sedikit berbeda. Ketika kita ingin menambahkan parameter, kita harus menggunakan :namaparameter
*/

$username = "zukri";
$password = "rahasia";

//Kode : Membuat Prepare Statement
/*
$sql = "select * from admin where username = :username AND password = :password";
$PrepareStatement = $connection->prepare($sql);
*/
/* Binding Parameter
  1. Setelah menentukan dimana kira-kira parameter akan digunakan di kode SQL
  2. Kita wajib melakukan binding parameter dengan input dari user
  3. Secara otomatis, semua input dari user akan di quote() oleh prepare statement, jadi kita tidak perlu melakukannya lagi secara manual
  4. Hal ini membuat penggunaan prepare statement lebih aman dibandingkan manual melakukan quote()
*/
/*
// Kode : Binding Parameter
$PrepareStatement->bindParam("username", $username); // "username" :namaparameter -> :username
$PrepareStatement->bindParam("password", $password);
$PrepareStatement->execute();


$success = false;
$find_user = null;

foreach($PrepareStatement as $row){
  //sukses
  $success = true;
  $find_user = $row["username"];
}

if ($success){
  echo "Login Sukses : " . $find_user . PHP_EOL;
}else{
  echo "Login Gagal " . PHP_EOL;
}
*/

/* Binding Parameter dengan Index
  1. Selain menggunakan kata kunci :namaparameter
  2. Untuk melakukan binding parameter, kita juga bisa menggunakan index (angka)
  3. Kita cukup mengganti :namaparameter dengan ? (tanda tanya)
  4. Lalu gunakan nomor index, saat melakukan bindingParam(index, value)
*/

// Kode : Binding Parameter dengan Index
$sql = "select * from admin where username = ? AND password = ?";
$PrepareStatement = $connection->prepare($sql);

/*
$PrepareStatement->bindParam(1, $username); // 1, parameter pertama -> username = ?
$PrepareStatement->bindParam(2, $password); // 2, parameter kedua -> password = ?
$PrepareStatement->execute();  
*/

// Kode : Binding Parameter ketika Execute
// lebih singkat dari sebelum kedua Binding Parameter diatas.
$PrepareStatement->execute([$username, $password]);

$success = false;
$find_user = null;

foreach($PrepareStatement as $row){
  //sukses
  $success = true;
  $find_user = $row["username"];
}

if ($success){
  echo "Login Sukses : " . $find_user . PHP_EOL;
}else{
  echo "Login Gagal " . PHP_EOL;
}



// selain bisa menggunakan query build prepare statemenet juga bisa stement biasa seperti insert
// kode insert menggunakan prepare statemenet
/*
$username = "zukri";
$password = "rahasia";

$sql2 = "insert into admin(username, password) values (:username, :password)";
$Statement = $connection->prepare($sql2);
$Statement->bindParam("username", $username); // "username" :namaparameter -> :username
$Statement->bindParam("password", $password);
$Statement->execute();
*/
$connection = null;