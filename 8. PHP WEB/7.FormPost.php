<!-- Form Post
  1. Saat kita belajar HTML, kita tahu bahasa di HTML terdapat form
  2. Form biasanya digunakan untuk mengirim data dari Client ke Server
  3. Secara default, method di form adalah GET, sehingga saat kita submit, data akan dikirim dalam bentuk Query Parameter yang bisa ditangkap menggunakan $_GET di PHP
  4. Namun jika kita gunakan Form dengan method POST, maka secara otomatis request dari Client ke Server akan beruba HTTP POST, hal ini menyebabkan data form yang dikirim akan dikirim melalui Body, bukan Query Parameter, dan untuk menerima datanya di PHP, kita perlu menggunnakan $_POST
 -->

<!--  $_POST
  1. $_POST adalah global variable yang berisikan data array yang dikirim dari Client ke Server dalam bentuk form post
  2. Cara penggunaan $_POST sama seperti $_GET
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Post</title>
</head>

<body>
  <!-- Kode : Form Post -->
  <h1>Register</h1>
  <form action="../8. PHP WEB/7.FormPost/Post.php" method="POST">
    <label> First Name:
      <input type="text" name="first_name">
    </label>
    </br>
    <label> Last Name:
      <input type="text" name="last_name">
    </label>
    </br>
    <input type="submit" value="Register">
  </form>
</body>

</html>