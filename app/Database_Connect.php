<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "db_tawakal";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (!$conn) {
  die("فشل الاتصال: " . mysqli_connect_error());
}
?>
