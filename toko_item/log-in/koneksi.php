<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "172.17.0.1";
$user = "root";
$pass = "root";
$dbName ="paw";

$kon = mysqli_connect($host, $user, $pass);
if(!$kon)
die("Gagal Koneksi....");

$hasil = mysqli_select_db($kon, $dbName);
if (!$hasil){
$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
if(!$hasil)
die("Gagal Buat Database");
else
$hasil = mysqli_select_db($kon, $dbName);
if(!$hasil) die ("Gagal Konek Database");
}
?>
