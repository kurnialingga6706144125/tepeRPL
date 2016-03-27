<?php
$host = "localhost";
$user = "Admin";
$pass = "Admin";
$name = "tanyadokter16";

$koneksi = mysql_connect($host, $user, $pass , $name) or die ("Koneksi ke Database gagal !");
mysql_select_db($name, $koneksi) or die("Tidak ada Database yang dipilih !");
?>