<?php
session_start();
session_destroy();

header('location: ../11.Session/login.php');
exit();
?>