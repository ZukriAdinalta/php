<?php
/*Query SQL
  1. Setelah kita tahu bagaimana cara mengirim SQL ke MYSQL yang tidak membutuhkan result data, sekarang bagaimana melakukan Query SQL yang membutuhkan result data seperti SQL SELECT?
  2. PDO memiliki function bernama query(sql), ini digunakan untuk melakukan query data dari database
  3. Return value dari function query(sql) adalah sebuah object dari PDOStatement
 */

//Kode : Query SQL dengan PDO

require_once __DIR__ . "/2.ExecuteSQL/2.ExecuteSQL.php";

$connection = getConnection();

// $sql = "select * from customers";
$sql = "select id, name, email from customers";
$statement = $connection->query($sql);

/* PDOStatement
  1. PDOStatement adalah sebuah class turunan dari IteratorAggregate
  2. Seperti yang sudah kita bahas di materi PHP Object Oriented Programming, bahwa turunan IteratorAggregate secara otomatis bisa menggunakan perulangan foreach
  3. Oleh karena itu, untuk melakukan iterasi data hasil query, kita bisa melakukan perulangan foreach untuk tiap baris record hasil dari Query SQL nya
 */

 //Kode : Foreach PDOStatement

 foreach ($statement as $row){
  //  var_dump($row);
      $id = $row["id"];
      $name = $row["name"];
      $email = $row["email"];
      echo "ID : $id " . PHP_EOL;
      echo "Name : $name " . PHP_EOL;
      echo "Email : $email " . PHP_EOL;
 }

 $connection = null;