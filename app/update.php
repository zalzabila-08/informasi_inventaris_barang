<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_barang   = $_POST['id_barang'];
    $nama_barang = trim($_POST['nama_barang']);
    $id_kategori = $_POST['id_kategori'];
    $id_ruangan  = $_POST['id_ruangan'];

    if (empty($nama_barang) || empty($id_kategori) || empty($id_ruangan)) {
        echo "<script>alert('Semua data harus terisi!'); window.history.back();</script>";
        exit;
    }

    $nama_barang = mysqli_real_escape_string($koneksi, $nama_barang);

    $query = "UPDATE barang SET 
              nama_barang = '$nama_barang', 
              id_kategori = '$id_kategori', 
              id_ruangan = '$id_ruangan' 
              WHERE id_barang = '$id_barang'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil diperbarui!'); window.location='index.php';</script>";
    } else {
        echo "Gagal memperbarui data: " . mysqli_error($koneksi);
    }
}
?>