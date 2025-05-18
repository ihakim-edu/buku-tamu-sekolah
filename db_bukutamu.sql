CREATE DATABASE IF NOT EXISTS db_bukutamu;
USE db_bukutamu;

CREATE TABLE IF NOT EXISTS buku_tamu (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    instansi VARCHAR(100),
    tujuan TEXT,
    tanggal DATE,
    waktu TIME
);