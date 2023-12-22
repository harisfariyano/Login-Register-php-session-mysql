<?php
session_start();

// Hancurkan semua variabel session
session_unset();

// Hancurkan session
session_destroy();

// Redirect ke halaman login atau halaman lainnya setelah logout
header("Location: ../index.php"); // Ganti dengan halaman login atau halaman lainnya
exit();
?>
