<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Form Buku Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
<div class="container mt-5">
    <h2 class="mb-4">Buku Tamu Sekolah</h2>
    <form action="proses_simpan.php" method="post">
        <div class="mb-3">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Instansi</label>
            <input type="text" name="instansi" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Tujuan Kedatangan</label>
            <textarea name="tujuan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
        <a href="daftar.php" class="btn btn-secondary">Lihat Daftar Tamu</a>
    </form>
</div>
</body>
</html>