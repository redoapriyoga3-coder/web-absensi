<!DOCTYPE html>
<html lang="id">
<head>
    <title>Dashboard Guru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section { background: #4e73df; color: white; padding: 50px 0; border-radius: 15px; margin-bottom: 20px; }
        .card-menu { transition: 0.3s; cursor: pointer; }
        .card-menu:hover { transform: scale(1.05); box-shadow: 0 10px 20px rgba(0,0,0,0.1); }
    </style>
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Sistem Absensi</a>
            <a href="logout.php" class="btn btn-outline-light btn-sm">Keluar</a>
        </div>
    </nav>

    <div class="container">
        <div class="hero-section text-center shadow">
            <h1>Selamat Datang, Bapak/Ibu Guru!</h1>
            <p>Kelola absensi siswa dengan mudah dan cepat.</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="card card-menu p-4 shadow-sm">
                    <h3>Data Siswa</h3>
                    <p>Lihat dan edit daftar siswa.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-menu p-4 shadow-sm">
                    <h3>Input Absensi</h3>
                    <p>Lakukan absen harian di sini.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
