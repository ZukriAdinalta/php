<?php
session_start();
if($_SESSION['login'] != true ){
  header('location: ../11.Session/login.php');
  exit();
}

$say = "Hello " . $_SESSION['username'];
?>

<html>

<body>
  <h1><?= $say ?></h1>
  <a href="../11.Session/logout.php">Logout</a>
</body>

</html>