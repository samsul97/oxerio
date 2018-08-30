<?php
$hostname  = "localhost";
$user = "root";
$pass = "";
$koneksi = mysqli_connect($hostname, $user, $pass) or die("Koneksi Gagal");

$db_name = "hebat_art";
$db=mysqli_select_db($koneksi, $db_name) or die("database tidak ditemukan");
?>