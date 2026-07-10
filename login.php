<?php
session_start();

// Data login sederhana (nanti kita ganti dengan database)
$username_benar = "guru";
$password_benar = "12345";

$username = $_POST['username'];
$password = $_POST['password'];

if ($username == $username_benar && $password == $password_benar) {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
} else {
    echo "Login gagal! <a href='index.php'>Kembali ke Login</a>";
}
?>
