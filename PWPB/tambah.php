<?php
require "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah data siswa</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="username">Username : </label>
                <input type="text" name="username" id="username">
            </li>
            <br>
            <li>
                <label for="kelas">Kelas : </label>
                <input type="text" name="kelas" id="kelas">
            </li>
            <br><br>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>

<?php
if(isset($_POST["submit"])) {
    $nama = $_POST["username"];
    $kelas = $_POST["kelas"];
    $query = $conn->query("INSERT INTO siswa VALUES ('','$nama','$kelas')");
    header("Location: index.php");
} 
?>