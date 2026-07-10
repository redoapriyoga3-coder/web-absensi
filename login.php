<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "guru" && $password == "12345") {
    $_SESSION['login'] = true;
    header("Location: dashboard.php"); // Otomatis pindah ke dashboard
} else {
    echo "Username atau Password salah! <a href='index.php'>Kembali</a>";
}
?>
