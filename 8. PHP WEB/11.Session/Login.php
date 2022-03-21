<!-- Session
  1. Session adalah mekanisme yang biasa digunakan untuk mengingat interaksi sebelumnya dari Client
  2. Di spesifikasi HTTP, tidak dikenal yang namanya session, karena HTTP di desain stateless '(tidak menyimpan state, data atau informasi apapun)'
  3. Session adalah teknik dimana kita bisa menyimpan informasi client di server, sehingga ketika ada request dari client yang sama, kita bisa tahu dari server
  4. Contohnya session biasanya digunakan ketika proses login, setelah login sukses, kita akan membuat session, dan request selanjutnya dari client akan membawa informasi session tersebut
-->

<!-- Memastikan Fitur Session di PHP 
  1. Untuk menggunakan fitur session di PHP, kita harus pastikan bahwa fitur tersebut aktif, kita bisa melihatnya di phpinfo
  2. https://www.php.net/manual/en/book.session.php 
-->

<!-- $_SESSION
  1. $_SESSION adalah global variable array yang berisi data di session
  2. Setelah session kita start, kita bisa menggunakan $_SESSION untuk menyimpan data di session, atau mengambil data di session
  3. Jika session belum di start, perubahan yang kita lakukan di $_SESSION atau pengambilan data di $_SESSION, tidak akan berpengaruh apa-apa
-->

<?php
session_start();
// jika sudah pernah login maka langsung di member.php
if($_SESSION['login'] == true){
  header('location: ../11.Session/member.php');
  exit();
}

$error = "";
if($_SERVER['REQUEST_METHOD'] == true){
  if($_POST['username'] == "zukri" && $_POST['password'] == "zukri"){
    //sukses
    $_SESSION['login'] = true;
    $_SESSION['username'] = "zukri";
    header('location: ../11.Session/member.php');
    exit();
    
  }else{
    //gagal
    $error =  "Login Gagal";
  }
}
?>
<html>

<body>
  <?php if($error != "") { ?>
  <h1><?= $error ?></h1>
  <?php } ?>
  <h1>Login</h1>
  <form action="../11.Session/Login.php" method="POST">
    <label> Username :
      <input type="text" name="username">
    </label>
    </br>
    <label> Password :
      <input type="password" name="password">
    </label>
    </br>
    <input type="submit" value="Login">
  </form>
</body>

</html>

<!-- Masalah dengan PHP Session
1. PHP menyimpan session di File
2. Hal ini tidak direkomendasikan untuk menyimpan data yang terlalu besar di session, karena setiap kita melakukan session_start, maka secara otomatis session akan di load dari file, dan setelah request selesai, session akan di save di file
3. Selain itu penggunaan File menyebabkan masalah scalability, karena jika kita menjalankan 2 Web PHP secara bersamaan di server yang berbeda, bisa jadi session nya menghilang ketika request dari client masuk ke server yang berbeda
4. Oleh karena itu, penggunaan fitur session di PHP sebenarnya jarang sekali digunakan di web yang sudah besar, biasanya akan menggunakan alternatif lain untuk management session, seperti Secure Cookie atau JWT '(Json Web Token)'
 -->