<!-- Cookie 
1. Cookie adalah data dalam bentuk key-value yang dikirim oleh Server pada HTTP Response untuk disimpan di Client '(Web Browser)'
2. Ketika Web Browser menerima cookie, secara otomatis, request selanjutnya cookie tersebut akan dikirim di setiap HTTP Request yang dilakukan ke Server
3. https://developer.mozilla.org/en-US/docs/Web/HTTP/Cookies 
-->

<!-- Cookie di PHP
1. Untuk membuat cookie di PHP, kita bisa menggunakan function 'setcookie(...)'
2. https://www.php.net/manual/en/function.setcookie.php
3. Cookie merupakan bagian dari HTTP Header, jadi pastikan cookie dibuat sebelum content di render di PHP
4. Untuk membaca cookie yang dikirim oleh client, kita bisa menggunakan global variable $_COOKIE
https://www.php.net/manual/en/reserved.variables.cookies.php 
-->

<?php
setcookie("X-BELAJAR-COOKIE", "Zukri Adinalta");
header("location: ../12.Cookie/show-cookie.php");
?>


<!-- Hati-Hati Menggunakan Cookie 
  1. Jangan terlalu banyak data di cookie, karena semua data di cookie akan selalu dikirim di tiap HTTP Request, semakin banyak, semakin lambat karena data yang harus dikirim banyak
  2. Cookie bisa diubah oleh user, jadi jangan mudah percaya dengan isi cookie, misal menyimpan informasi hak akses di cookie
 -->

<!-- Session dan Cookie
1. Sebelumnya kita sudah belajar session di PHP, sebenarnya session id di PHP disimpan dalam cookie
2. Ketika kita membuat session, PHP akan membuat cookie session id, cookie session id tersebut digunakan sebagai id untuk file session di server PHP
3. Ketika web browser mengirim cookie berisi session id tersebut, PHP akan mengecek apakah nama file dengan session id tersebut ada atau tidak, jika ada, otomatis session nya valid dan akan di ambil semua data session di dalam file tersebut
-->