<?php
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($db, "SELECT * FROM users WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    $data = mysqli_fetch_assoc($query);
    // Cek jika user login sebagai admin
    if($data['role']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "admin";
        header("location:admin.php");
    // Cek jika user login sebagai user
    }else if($data['role']=="pelanggan"){
        $_SESSION['username'] = $username;
        $_SESSION['role'] = "pelanggan";
        header("location:homepage.php");
    }
} else {
    echo "Username atau password salah";
}
?>