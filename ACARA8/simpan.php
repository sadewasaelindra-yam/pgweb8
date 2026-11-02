<?php
include 'koneksi.php';

// Mengambil data dari form
$kecamatan       = $_POST['kecamatan'];
$longitude       = $_POST['longitude'];
$latitude        = $_POST['latitude'];
$luas            = $_POST['luas'];
$jumlah_penduduk = $_POST['jumlah_penduduk'];

// Validasi backend: memastikan luas dan jumlah penduduk tidak bernilai negatif
if ($luas < 0 || $jumlah_penduduk < 0) {
    echo "<script>alert('Error: Luas dan Jumlah Penduduk tidak boleh kurang dari 0!'); window.history.back();</script>";
    exit();
}

// Menyimpan data ke database
$query = "INSERT INTO penduduk (Kecamatan, Longitude, Latitude, Luas, Jumlah_penduduk) 
          VALUES ('$kecamatan', '$longitude', '$latitude', '$luas', '$jumlah_penduduk')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>alert('Data berhasil disimpan!'); window.location.href='index.php';</script>";
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}
?>