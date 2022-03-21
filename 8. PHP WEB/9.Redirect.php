<!-- Redirect
1. Dalam pembuatan halaman web, melakukan redirect dari satu halaman ke halaman lain adalah hal biasa
2. Misal setelah sukses login, kita akan redirect halaman web nya ke halaman member atau admin
3. Atau bahkan melakukan redirect ke domain yang berbeda, misal ketika login dengan Google, setelah selesai, akan melakukan redirect ke halaman web kita lagi
-->

<!-- HTTP Redirect
1. Redirect sendiri sudah merupakan sesuatu yang standard di HTTP
2. Untuk melakukan redirect, kita hanya butuh menggunakan response header Location yang berisi url redirect nya, bisa dalam domain yang sama, atau ke domain berbeda, misal :
3. Location : /admin.php => artinya redirect ke halaman admin di domain yang sama
4. Location : https://www.google.com => artinya redirect ke halaman google
-->

<?php
header('Location: ../8. PHP WEB/2.PHPInfo.php');
exit();
?>