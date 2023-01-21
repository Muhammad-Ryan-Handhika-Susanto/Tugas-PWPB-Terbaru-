<?php
require "koneksi.php";
$id = $_GET["id"];
$query = $conn->query("DELETE FROM siswa WHERE id=$id");
header("Location: index.php");
?>