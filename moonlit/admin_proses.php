<?php

session_start();

// Koneksi ke database
$host = "localhost";
$user = "root";
$pass = "";
$db = "moonlit";

$conn = new mysqli($host, $user, $pass, $db);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}