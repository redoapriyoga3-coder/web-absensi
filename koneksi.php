<?php
// Mengambil URL koneksi dari Environment Variables Railway
$url = getenv('DATABASE_URL');
$dbparts = parse_url($url);

$host = $dbparts['host'];
$user = $dbparts['user'];
$pass = $dbparts['pass'];
$db   = ltrim($dbparts['path'], '/');
$port = $dbparts['port'];

// Membuat koneksi ke database MySQL
$conn = mysqli_connect($host, $user, $pass, $db, $port);

// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
