<?php
session_start();
include '../config/koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id, username, password FROM users WHERE username='$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $row['id'];
            header("location: welcome.php"); // Ganti dengan halaman selamat datang
        } else {
            echo "Password salah";
        }
    } else {
        echo "Username tidak ditemukan";
    }
}

$conn->close();
?>
