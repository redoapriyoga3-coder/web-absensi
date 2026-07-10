<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['login'])) { header("Location: index.php"); exit; }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Siswa</title>
</head>
<body class="container mt-4">
    <h3>Data Siswa</h3>
    <a href="tambah_siswa.php" class="btn btn-success mb-2">+ Tambah</a>
    <table class="table table-bordered">
        <tr><th>Nama</th><th>NISN</th></tr>
        <?php
        $res = mysqli_query($conn, "SELECT * FROM siswa");
        while($r = mysqli_fetch_array($res)) {
            echo "<tr><td>{$r['nama_siswa']}</td><td>{$r['nisn']}</td></tr>";
        }
        ?>
    </table>
</body>
</html>
