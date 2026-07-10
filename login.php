<?php
// login.php
session_start();

// Simulasi login sederhana (nanti kita hubungkan ke database sungguhan)
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "guru" && $password == "12345") {
    $_SESSION['login'] = true;
    echo "Login Berhasil! Selamat datang, Guru.";
} else {
    echo "Username atau Password salah! <a href='index.php'>Kembali</a>";
}
?>
