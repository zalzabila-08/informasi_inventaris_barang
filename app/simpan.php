<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_barang = trim($_POST['nama_barang']);
    $id_kategori = $_POST['id_kategori'];
    $id_ruangan  = $_POST['id_ruangan'];
    $stok        = $_POST['stok'];
    $kondisi     = $_POST['kondisi'];

    // Validasi input kosong
    if (empty($nama_barang) || empty($id_kategori) || empty($id_ruangan) || $stok === '' || empty($kondisi)) {
        echo "<script>alert('Semua form wajib diisi!'); window.history.back();</script>";
        exit;
    }

    $nama_barang = mysqli_real_escape_string($koneksi, $nama_barang);

    $query = "INSERT INTO barang (nama_barang, id_kategori, id_ruangan, stok, kondisi) 
              VALUES ('$nama_barang', '$id_kategori', '$id_ruangan', '$stok', '$kondisi')";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location='index.php';</script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>