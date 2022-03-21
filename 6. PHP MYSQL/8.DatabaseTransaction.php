<?php
require_once __DIR__ . "/2.ExecuteSQL/2.ExecuteSQL.php";
$connection = getConnection();

/* Database Transaction
  1. Salah satu fitur andalan di database adalah transaction
  2. Materi database transaction sudah saya bahas dengan tuntas di materi MySQL database, jadi silahkan pelajari di course tersebut
  3. Di course ini kita akan fokus bagaimana menggunakan database transaction di PHP menggunakan PDO
*/

/* Transaction di PDO
1. Secara default, semua perintah SQL yang kita kirim menggunakan PDO akan otomatis di commit, atau istilahnya auto commit
2. Namun kita bisa menggunakan fitur transaksi sehingga SQL yang kita kirim tidak secara otomatis di commit ke database
3. Untuk memulai transaksi, kita bisa menggunakan function beginTransaction() di PDO
4. Dan untuk commit transaksi, kita bisa menggunakan function commit()
5. Sedangkan jika kita ingin melakukan rollback, kita bisa menggunakan function rollback()
 */

// Kode : Transaction
$connection->beginTransaction();
$connection->exec("INSERT INTO comment(email, comment) values('zukri@test.com', 'hai')");
$connection->exec("INSERT INTO comment(email, comment) values('zukri@test.com', 'hai lagi')");
$connection->exec("INSERT INTO comment(email, comment) values('zukri@test.com', 'hai juga')");
$connection->commit();


// Kode : Rollback Transaction 
// $connection->beginTransaction();
// $connection->exec("INSERT INTO comment(email, comment) values('zukri@test.com', 'hai')");
// $connection->exec("INSERT INTO comment(email, comment) values('zukri@test.com', 'hai lagi')");
// $connection->exec("INSERT INTO comment(email, comment) values('zukri@test.com', 'hai juga')");
// $connection->rollBack();

$connection = null;