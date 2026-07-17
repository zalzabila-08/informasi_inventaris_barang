<?php
include 'koneksi.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $id = mysqli_real_escape_string($koneksi, $id);
    $query = "DELETE FROM barang WHERE id_barang = '$id'";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    header("Location: index.php");
}
?>