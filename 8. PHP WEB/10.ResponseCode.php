<!-- Response Code
  1. Dalam spesifikasi HTTP, response dari server biasanya memiliki code, atau dikenal HTTP Response Code
  2. Secara  default, di PHP, response code adalah 200 OK
  3. Ada banyak sekali HTTP Response Code : https://developer.mozilla.org/id/docs/Web/HTTP/Status  
  4. Dalam pembuatan website mungkin kita jarang sekali melakukan perubahan response code, namun jika nanti kita ingin membuat API menggunakan PHP, response code sangat penting digunakan
 -->
<!-- Kode : Response Code -->
<?php
if(!isset($_GET['name']) || $_GET['name'] == ""){
  http_response_code(400);
  echo "Name is Required";
  exit();
}

$say = "Hello " . htmlspecialchars($_GET['name']);
?>

<html>

<body>
  <h1>
    <=? $say ?>
  </h1>
</body>

</html>