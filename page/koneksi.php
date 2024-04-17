<?php
//membuat fil koneksi.php
$host = "localhost";
$user = "root";
$password = "";
$koneksi_db = "db_biodata";

$koneksi_db = mysqli_connect($host, $user, $password, $db);

if (!$koneksi_db) {
    die("Koneksi Gagal: " . mysqli_connect_error());
}
?>