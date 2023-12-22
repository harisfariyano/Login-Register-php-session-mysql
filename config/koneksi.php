<?php
$hostname = "localhost"; // Ganti dengan host database Anda
$username = "username_db"; // Ganti dengan username database Anda
$password = "password_db"; // Ganti dengan password database Anda
$database = "nama_database"; // Ganti dengan nama database Anda

$conn = new mysqli($hostname, $username, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
