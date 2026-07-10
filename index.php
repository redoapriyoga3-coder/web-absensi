<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login</title>
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height:100vh">
    <form action="login.php" method="POST" class="card p-4 shadow" style="width:300px">
        <h4 class="mb-3">Login Guru</h4>
        <input type="text" name="username" class="form-control mb-2" placeholder="Username" required>
        <input type="password" name="password" class="form-control mb-2" placeholder="Password" required>
        <button type="submit" class="btn btn-primary w-100">Masuk</button>
    </form>
</body>
</html>
