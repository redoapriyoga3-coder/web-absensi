<?php
include 'koneksi.php';

$sql = "CREATE TABLE siswa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama_siswa VARCHAR(100),
    nisn VARCHAR(20),
    kelas VARCHAR(20)
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabel siswa berhasil dibuat!";
} else {
    echo "Gagal: " . mysqli_error($conn);
}
?>
