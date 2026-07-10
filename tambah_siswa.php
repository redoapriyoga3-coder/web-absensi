<?php
include 'koneksi.php';
session_start();
if (!isset($_SESSION['login'])) { header("Location: index.php"); exit; }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
    <div class="container col-md-6 card p-4">
        <h3>Tambah Data Siswa</h3>
        <form method="POST">
            <div class="mb-3">
                <label>Nama Lengkap</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>NISN</label>
                <input type="text" name="nisn" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan Data</button>
            <a href="dashboard.php" class="btn btn-secondary">Kembali</a>
        </form>

        <?php
        if (isset($_POST['simpan'])) {
            $nama = mysqli_real_escape_string($conn, $_POST['nama']);
            $nisn = mysqli_real_escape_string($conn, $_POST['nisn']);
            
            $query = "INSERT INTO siswa (nama_siswa, nisn) VALUES ('$nama', '$nisn')";
            if (mysqli_query($conn, $query)) {
                echo "<div class='alert alert-success mt-3'>Data berhasil disimpan!</div>";
            }
        }
        ?>
    </div>
</body>
</html>
