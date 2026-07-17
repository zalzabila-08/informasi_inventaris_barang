<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_informasi_inventaris_barang";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}
?>