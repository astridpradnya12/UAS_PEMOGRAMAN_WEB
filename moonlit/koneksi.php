<?php
$db = mysqli_connect("localhost", "root", "", "moonlit");
if (!$db) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>