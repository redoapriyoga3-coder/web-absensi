<?php
include 'koneksi.php';

// Cek apakah tabel sudah ada? Jika belum, buat.
$query = "CREATE TABLE IF NOT EXISTS siswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_siswa VARCHAR(100),
    nisn VARCHAR(20),
    kelas VARCHAR(20)
)";

if (mysqli_query($conn, $query)) {
    echo "<h1>Sukses! Tabel sudah siap.</h1>";
    echo "<p>Silakan hapus kode ini dan ganti kembali dengan form Login.</p>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
