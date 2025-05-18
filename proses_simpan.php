<?php
include 'koneksi.php';

$nama     = $_POST['nama'];
$instansi = $_POST['instansi'];
$tujuan   = $_POST['tujuan'];
$tanggal  = date('Y-m-d');
$waktu    = date('H:i:s');

$sql = "INSERT INTO buku_tamu (nama, instansi, tujuan, tanggal, waktu) 
        VALUES ('$nama', '$instansi', '$tujuan', '$tanggal', '$waktu')";

if ($conn->query($sql) === TRUE) {
    header("Location: daftar.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>