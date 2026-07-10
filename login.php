<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "guru" && $password == "12345") {
    $_SESSION['login'] = true;
    header("Location: dashboard.php");
} else {
    echo "Login Gagal! <a href='index.php'>Kembali</a>";
}
?>
