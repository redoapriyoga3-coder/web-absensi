<?php
session_start();
if (!isset($_SESSION['login'])) { header("Location: index.php"); exit; }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body class="container mt-5">
    <h1>Dashboard Guru</h1>
    <div class="mt-4">
        <a href="siswa.php" class="btn btn-primary">Lihat Data Siswa</a>
        <a href="logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
