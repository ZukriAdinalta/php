<!-- Header 
  1. Dalam HTTP request dan response, terdapat data yang bernama Header
  2. Header biasanya digunakan sebagai tempat menyimpan informasi tambahan diluar URL, METHOD dan BODY
  3. Di PHP, kita bisa menangkap data header yang dikirim oleh Client atau membuat header di response dari Server
 -->

<!-- Menerima Header Request
  1. Semua header yang dikirim oleh Client, secara otomatis akan dimasukkan ke global variable $_SERVER
  2. Namun key untuk header akan secara otomatis di konversi menjadi UPPERCASE, dan jika terdapat spasi atau - , akan otomatis diganti menjadi _ 
  3. Selain itu untuk membedakan request header dan lainnya, khusus request header, akan ditambah prefix HTTP_
  4. Misal header Content-Type akan menjadi HTTP_CONTENT_TYPE
  5. Header Accept-Language akan menjadi HTTP_ACCEPT_LANGUAGE
-->

<?php
$client = $_SERVER['HTTP_HOST'];

echo "Hello " . $client;
?>

<!-- Menambah Header Response
  1. Kadang kita ingin menambah informasi tambahan di HTTP response
  2. Seperti versi aplikasi kita atau lainnya
  3. Kita juga bisa menambahkan header dengan menggunakan function 'header(key, value)' di PHP
  4. Perlu diingat, di spesifikasi HTTP, header berada pada posisi atas sebelum content dibuat, oleh karena itu, pastikan menambah header sebelum kita membuat content
-->

<!-- <?php
header('Application: Belajar PHP Web');
header('Author: Zukri Adinalta');

$client = $_SERVER['HTTP_CLIENT_NAME'];
echo "Hello " . $client;
?> -->