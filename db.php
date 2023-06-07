<?php

$servername = "localhost";
$username = "//baza foydalanuvchi nomi";
$password = "//baza foydalanuvchi kodi";
$database= "veb_baza";
try {
  $pdo = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>