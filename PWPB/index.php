<?php
require "koneksi.php";
$query = $conn->query("SELECT * FROM siswa");
$data = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampilkan data</title>
</head>
<body>
    <h1>Data Siswa</h1>
<a href="tambah.php">Tambah</a>
<br><br>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>OPSI</th>
        </tr>
        <?php $i = 1 ?>
        <?php foreach($data as $d) : ?>
        <tr>
                <td><?= $d["id"] ?></td>
                <td><?= $d["nama"] ?></td>
                <td><?= $d["kelas"] ?></td>
                <td>
                    <a href="edit.php">Ubah</a>
                    ||
                    <a href="hapus.php?id=<?= $d["id"] ?>">Hapus</a>
                </td>
        </tr>
        <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</body>
</html>