<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "data_mahasantri"; // Ganti dengan nama database yang benar
$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>