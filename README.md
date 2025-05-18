# Buku Tamu Sekolah

Aplikasi web sederhana buku tamu digital untuk sekolah menggunakan **PHP**, **MySQL**, dan **Bootstrap**.

## 📋 Fitur

- Formulir tamu dengan field:
  - Nama Lengkap
  - Instansi
  - Tujuan Kedatangan
  - Tanggal & Waktu (otomatis)
- Penyimpanan data ke database MySQL
- Tabel daftar tamu dengan tampilan Bootstrap (striped, hover)
- Opsi pencarian (bisa ditambahkan kemudian)

## 🧱 Struktur Proyek

```
buku_tamu/
├── index.php           → Formulir tamu
├── daftar.php          → Tabel daftar tamu
├── koneksi.php         → Koneksi ke database MySQL
├── proses_simpan.php   → Proses simpan data tamu
└── db_bukutamu.sql     → File SQL struktur database
```

## 🛠️ Cara Instalasi

1. **Import Database**
   - Buka phpMyAdmin
   - Import `db_bukutamu.sql`

2. **Atur Koneksi Database**
   - Ubah konfigurasi di `koneksi.php` jika perlu:
     ```php
     $host = "localhost";
     $user = "root";
     $pass = "";
     $db   = "db_bukutamu";
     ```

3. **Jalankan di Web Server (XAMPP/Laragon/etc.)**
   - Simpan semua file ke dalam folder `htdocs` (untuk XAMPP)
   - Akses di browser melalui `http://localhost/buku_tamu`


## 📄 Lisensi

Proyek ini bebas digunakan untuk keperluan UTS Pemrograman WEB.

---

