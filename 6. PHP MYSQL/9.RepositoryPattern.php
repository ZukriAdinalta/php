<?php
/* Repository Pattern
1. Dalam buku Domain-Driven Design, Eric Evans menjelaskan bahwa “repository is a mechanism for encapsulating storage, retrieval, and search behavior, which emulates a collection of objects”
2. Pattern Repository ini biasanya digunakan sebagai jembatan antar business logic aplikasi kita dengan semua perintah SQL ke database
3. Jadi semua perintah SQL akan ditulis di Repository, sedangkan business logic kode program kita hanya cukup menggunakan Repository tersebut
*/

/* Entity / Model
1. Dalam pemrograman berorientasi object, biasanya sebuah tabel di database akan selalu dibuat representasinya sebagai class Entity atau Model
2. Ini bisa mempermudah ketika membuat kode program
3. Misal ketika kita query ke Repository, dibanding mengembalikan array, alangkah baiknya Repository melakukan konversi terlebih dahulu ke class Entity / Model, sehingga kita tinggal menggunakan objectnya saja
*/

use Model\Comment;
use Repository\CommentRepositoryImpl;

require_once __DIR__ . "/2.ExecuteSQL/2.ExecuteSQL.php";
require_once __DIR__ . "/9.RepositoryPattern/Model/comment.php";
require_once __DIR__ . "/9.RepositoryPattern/Repository/commentRepository.php";

$connection = getConnection();
$repository = new CommentRepositoryImpl($connection);

// tambah data comment
// $comment = new Comment(email: "kumabbj@gmail.com", comment: "Hello guys");
// $newComment = $repository->insert($comment);
// var_dump($newComment->getId());

// lihat data 18
// $comment = $repository->findById(18);
// var_dump($comment);

//Lihat semua data
$comment = $repository->findAll();
var_dump($comment);

$connection = null;