<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
    <div class="card p-4">
        <h4>Tambah Siswa</h4>
        <form method="POST">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>NISN</label>
                <input type="text" name="nisn" class="form-control" required>
            </div>
            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        </form>
    </div>

    <?php
    if (isset($_POST['simpan'])) {
        $n = $_POST['nama'];
        $ni = $_POST['nisn'];
        
        // Cek apakah tabel siswa ada
        $query = "INSERT INTO siswa (nama_siswa, nisn) VALUES ('$n', '$ni')";
        $result = mysqli_query($conn, $query);
        
        if ($result) {
            echo "<div class='alert alert-success mt-2'>Berhasil! <a href='siswa.php'>Lihat Data</a></div>";
        } else {
            echo "<div class='alert alert-danger mt-2'>Error: " . mysqli_error($conn) . "</div>";
        }
    }
    ?>
</body>
</html>
