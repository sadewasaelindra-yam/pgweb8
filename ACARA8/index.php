<?php
include 'koneksi.php';

// Mengambil seluruh data dari tabel penduduk
$query = mysqli_query($koneksi, "SELECT * FROM penduduk");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Penduduk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; margin-bottom: 20px; }
        table, th, td { border: 1px solid #ccc; }
        th, td { padding: 10px; text-align: left; }
        th { background-color: #f4f4f4; }
        
        /* CSS Tombol Input */
        .btn-input {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            font-weight: bold;
            transition: background-color 0.2s ease;
        }
        .btn-input:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h2>Daftar Data Penduduk</h2>

    <table>
        <thead>
            <tr>
                <th>Kecamatan</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>Luas (km²)</th>
                <th>Jumlah Penduduk</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?= $row['Kecamatan']; ?></td>
                <td><?= $row['Longitude']; ?></td>
                <td><?= $row['Latitude']; ?></td>
                <td><?= $row['Luas']; ?></td>
                <td><?= number_format($row['Jumlah_penduduk']); ?></td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

    <!-- Tombol Input diletakkan tepat di bawah </table> -->
    <a href="input.html" class="btn-input">Input Data</a>

</body>
</html>