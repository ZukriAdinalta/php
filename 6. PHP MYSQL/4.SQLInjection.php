<?php
require_once __DIR__ . "/2.ExecuteSQL/2.ExecuteSQL.php";
$connection = getConnection();
/* SQL dengan Parameter
  1. Saat membuat aplikasi, kita tidak mungkin akan melakukan hardcode perintah SQL di kode PHP kita
  2. Biasanya kita akan menerima input data dari user, lalu membuat perintah SQL dari input user, dan mengirimnya menggunakan perintah SQL
*/

/* //Kode : Membuat SQL dari Input User manual
$username = "admin'; #"; // Kode : Contoh SQL Injection
$password = "admin";

$sql = "select * from admin where username = '$username' AND password = '$password'"; 
echo "$sql" . PHP_EOL ;
*/

//Kode : Menggunakan Function Quote
$username = $connection->quote("admin'; #"); //quote -> mengecek kode kode yg tidak lazim
$password = $connection->quote("admin");
$sql = "select * from admin where username = $username AND password = $password"; 
echo "$sql" . PHP_EOL ;

/* SQL Injector
  1. SQL Injection adalah sebuah teknik yang menyalahgunakan sebuah celah keamanan yang terjadi dalam lapisan basis data sebuah aplikasi.
  2. Biasa, SQL Injection dilakukan dengan mengirim input dari user dengan perintah yang salah, sehingga menyebabkan hasil SQL yang kita buat menjadi tidak valid
  3. SQL Injection sangat berbahaya, jika sampai kita salah membuat SQL, bisa jadi data kita tidak aman
*/
//Kode : Contoh Query dengan Parameter
$statement = $connection->query($sql);

$success = false;
$find_user = null;

foreach($statement as $row){
  //sukses
  $success = true;
  $find_user = $row["username"];
}

if ($success){
  echo "Login Sukses : " . $find_user . PHP_EOL;
}else{
  echo "Login Gagal " . PHP_EOL;
}
/* Solusinya?  Menggunakan Function Quote
  1. Jangan membuat query SQL secara manual dengan menggabungkan String secara bulat-bulat
  2. Function query() dan execute() tidak bisa menangani celah SQL Injection, jadi kita harus menanganinya secara manual
  3. Direkomendasikan menggunakan function query() dan execute() jika memang kita tidak butuh parameter dari input user ketika membuat perintah SQL 
  4. Jika membutuhkan parameter dari input user, kita wajib menggunakan function prepare(sql) yang akan kita bahas selanjutnya
  5. Atau bisa juga memastikan input user aman dengan menggunakan function quote()
 */
$connection = null;