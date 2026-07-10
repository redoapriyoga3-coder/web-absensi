<?php
// Cek apakah file koneksi ada
if (!file_exists('koneksi.php')) {
    die("File koneksi.php tidak ditemukan!");
}
include 'koneksi.php';

// Menampilkan pesan sederhana agar kita tahu web sudah terbaca
echo "<h1>Website Berhasil Terhubung!</h1>";
echo "<p>Sistem Absensi Online sedang berjalan dengan baik.</p>";
?>
