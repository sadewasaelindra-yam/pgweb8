<?php
$host     = "localhost";
$user     = "root";
$password = ""; 
$database = "acara8_pgw"; // Disesuaikan persis dengan gambar

$koneksi = mysqli_connect($host, $user, $password, $database);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>