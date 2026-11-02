<?php
    // Contoh data array (bisa diganti dengan data dari database MySQL/MariaDB)
    $data_kecamatan = [
        ["kecamatan" => "Moyudan", "longitude" => 110.248, "latitude" => -7.7774, "luas" => 27.62, "penduduk" => 31497],
        ["kecamatan" => "Minggir", "longitude" => 110.248, "latitude" => -7.7318, "luas" => 27.27, "penduduk" => 29886],
        ["kecamatan" => "Seyegan", "longitude" => 110.3,   "latitude" => -7.7265, "luas" => 26.63, "penduduk" => 47129],
        ["kecamatan" => "Godean",  "longitude" => 110.296, "latitude" => -7.7681, "luas" => 26.84, "penduduk" => 72028],
        ["kecamatan" => "Gamping", "longitude" => 110.32,  "latitude" => -7.7903, "luas" => 29.25, "penduduk" => 108675],
        ["kecamatan" => "YY",      "longitude" => 110.8,   "latitude" => -7.8,    "luas" => 1200,  "penduduk" => 6000],
        ["kecamatan" => "ABC",     "longitude" => 110,     "latitude" => -8,      "luas" => 1000,  "penduduk" => 6000],
    ];
    ?>

    <a href="input.php">Input</a>
    <br><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Kecamatan</th>
                <th>Longitude</th>
                <th>Latitude</th>
                <th>Luas</th>
                <th>Jumlah Penduduk</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_kecamatan as $row): ?>
                <tr>
                    <td><?php echo $row['kecamatan']; ?></td>
                    <td><?php echo $row['longitude']; ?></td>
                    <td><?php echo $row['latitude']; ?></td>
                    <td><?php echo $row['luas']; ?></td>
                    <td><?php echo $row['penduduk']; ?></td>
                    <td><a href="hapus.php?id=<?php echo $row['kecamatan']; ?>">hapus</a></td>
                    <td><a href="edit.php?id=<?php echo $row['kecamatan']; ?>">edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>