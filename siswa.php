<?php
include 'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <h3>Daftar Siswa</h3>
    <a href="tambah_siswa.php" class="btn btn-success mb-3">+ Tambah Siswa</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NISN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $data = mysqli_query($conn, "SELECT * FROM siswa");
            while($row = mysqli_fetch_array($data)) {
                echo "<tr><td>".$row['nama_siswa']."</td><td>".$row['nisn']."</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
