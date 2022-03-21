<!-- Cross Site Scripting 
  1. XSS merupakan celah keamanan yang biasanya dieksploitasi oleh penyerang dengan cara mengirim script pada parameter
  2. Jika sampai pembuat kode salah melakukan render halaman web, maka script tersebut akan di render di halaman web, dan bisa menyebabkan penyerang mengirimkan kode JavaScript
  3. Hal ini sangat berbahaya, karena penyerang bisa mencuri session pengguna yang sedang login di web kita
 -->

<!-- Cara Mencegah XSS 
  1. Cara mencegah XSS adalah, kita perlu berhati-hati ketika ingin menampilkan text yang inputnya berasal dari user
  2. Jika kita tidak berharang sebuah text berisi tag HTML, kita menggunakan function htmlspecialchars'(value)'
  3. Function 'htmlspecialchars(value)' secara otomatis akan akan melakukan encode spesial character di html agar di render menjadi text biasa
  4. https://www.php.net/manual/en/function.htmlspecialchars.php 
-->

<?php
$say = "Hello " . htmlspecialchars($_GET['name']);
?>
<html>

<body>
  <h1><?= $say ?></h1>
</body>

</html>

<!-- Hasilnya 
  http://localhost/10.%20PHP/8.%20PHP%20WEB/6.xss.php?name=zukri%3Ch1%3E%3Cscript%3Ealert(%22Ups%20di%20Heck%22)%3C/script%3E%3Ch1%3E 
-->