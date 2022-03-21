<!-- Download File
1. Saat membuat web, kadang-kadang kita butuh mengembalikan content berupa file yang butuh di download oleh client
2. Sebenarnya, kita bisa langsung mengakses file tersebut melalui URL, namun kita kita mau, kita juga bisa menggunakan PHP untuk membuat content dalam bentuk file dan memaksa client untuk mendownload nya
 -->

<!-- Download File di PHP
1. Memaksa client untuk melakukan download file, sebenarnya sudah ada di standard HTTP Header, ini menggunakan Content-Disposition : https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Content-Disposition 
2. Jadi di PHP kita cukup dengan menambahkan header tersebut, maka kita bisa secara otomatis memaksa browser untuk download file yang kita buat menggunakan PHP
3. Untuk membaca file dan me-load nya di PHP, kita bisa menggunakan function 'readfile(filename)' : https://www.php.net/manual/en/function.readfile.php 
 -->

<?php
if(isset($_GET['key']) && $_GET['key'] =='rahasia'){
  header('Content-Disposition: attachment; filename="banana.png"');
  header('Content-Type: image/png');
  header(__DIR__ . '/file/banana.png');
  exit();
}else{
  echo "Invalid Link";
  exit();
}
?>
<!-- http://localhost/10.%20PHP/8.%20PHP%20WEB/13.UploadFile/Download.php?key=rahasia -->