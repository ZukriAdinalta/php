<?php
/* Integrasi dengan HTML
1. PHP adalah bahasa pemrograman yang secara default terintegrasi dengan baik dengan bahasa markup HTML
2. Dengan integrasi PHP dan HTML, kita bisa membuat web HTML yang dinamis, dalam artian tidak statis dan bisa berubah-ubah sesuai dengan logika kode program kita
3. Secara default ketika kita menggunakan kode <? dan diakhir ?>, artinya di dalamnya kita bisa memasukkan kode PHP,
namun diluar kode tersebut, kita bisa memasukkan kode HTML seperti biasa
*/

$tittle = "Belajar PHP Web";
$body = "Hello Belajar PHP Web";

/* Kode <?=
Kadang saat integrasi PHP dan HTML, kita sering sekali melakukan kode sederhana seperti ini :
1. <?php echo $title ?>
2. <?php echo $body ?>
Hal itu bisa dipersingkat menggunakan tanda <?=, misal :
1. <?= $title ?>
2. <?= $body ?>
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?= $tittle;  ?></title>
  <!-- ; pada php kaalau satu baris boleh digunakan atau tidak -->
</head>

<body>
  <h1><?= $body ?></h1>
</body>

</html>

<!-- Tidak Hanya HTML 
  1. Walaupun secara default, PHP terintegrasi dengan HTML, namun bukan berarti hanya bisa membuat content HTML yang dinamis
  2. PHP bisa mengembalikan konten apapun, seperti CSS, JavaScript, Image, Video dan lain-lain
 -->