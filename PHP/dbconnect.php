<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "database";
$koneksi = mysqli_connect($host, $user, $pass, $db);

mysqli_set_charset($koneksi, "utf8");

if (!$koneksi) {
    die("Connection Failed: " . mysqli_connect_error());
}
?>