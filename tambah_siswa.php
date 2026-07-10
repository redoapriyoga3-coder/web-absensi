<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['login'])) { header("Location: index.php"); exit; }
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <form method="POST" class="card p-4">
        <h4>Tambah Siswa</h4>
        <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
        <input type="text" name="nisn" class="form-control mb-2" placeholder="NISN" required>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>
    <?php
    if (isset($_POST['simpan'])) {
        $n = $_POST['nama'];
        $ni = $_POST['nisn'];
        mysqli_query($conn, "INSERT INTO siswa (nama_siswa, nisn) VALUES ('$n', '$ni')");
        echo "<div class='alert alert-success mt-2'>Berhasil! <a href='siswa.php'>Lihat Data</a></div>";
    }
    ?>
</body>
</html>
