<?php
include 'koneksi.php';

// Menjalankan perintah SQL untuk membuat tabel
$sql = "CREATE TABLE IF NOT EXISTS siswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_siswa VARCHAR(100),
    nisn VARCHAR(20),
    kelas VARCHAR(20)
)";

if (mysqli_query($conn, $sql)) {
    echo "<h1>Sukses!</h1>";
    echo "<p>Tabel 'siswa' berhasil dibuat di database. Silakan <a href='index.php'>kembali ke Login</a></p>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>
