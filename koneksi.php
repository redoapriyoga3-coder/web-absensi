<?php
$url = getenv('DATABASE_URL');
if (!$url) { die("Error: DATABASE_URL tidak diset di Railway"); }

$dbparts = parse_url($url);
$conn = mysqli_connect($dbparts['host'], $dbparts['user'], $dbparts['pass'], ltrim($dbparts['path'], '/'), $dbparts['port']);

if (!$conn) { die("Koneksi gagal: " . mysqli_connect_error()); }
?>
