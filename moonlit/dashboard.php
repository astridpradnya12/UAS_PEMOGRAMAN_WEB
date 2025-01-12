<?php
session_start();

// Periksa apakah user sudah login
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

echo "Selamat datang, " . $_SESSION['username'] . "!";
?>
<a href="logout.php">Logout</a>
