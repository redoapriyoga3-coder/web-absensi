<?php
session_start();
// Cek apakah guru sudah login? Jika belum, tendang kembali ke index.php
if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Absensi</a>
            <a href="logout.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </nav>

    <div class="container">
        <div class="card p-4">
            <h2>Selamat Datang, Bapak/Ibu Guru!</h2>
            <p>Silakan pilih menu di bawah ini untuk memulai:</p>
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="btn btn-outline-primary w-100 mb-2">Input Absen</a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="btn btn-outline-success w-100 mb-2">Rekap Absen</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
