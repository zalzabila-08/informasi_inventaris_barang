<?php
include 'koneksi.php';

$count_query = mysqli_query($koneksi, "SELECT COUNT(*) as total_barang FROM barang");
$total_barang = mysqli_fetch_assoc($count_query)['total_barang'];

$sum_query = mysqli_query($koneksi, "SELECT SUM(stok) as total_stok FROM barang");
$total_stok = mysqli_fetch_assoc($sum_query)['total_stok'];

$query_laporan = "SELECT b.nama_barang, k.nama_kategori, r.nama_ruangan, r.lokasi, b.stok, b.kondisi 
                  FROM barang b
                  LEFT JOIN kategori k ON b.id_kategori = k.id_kategori
                  LEFT JOIN ruangan r ON b.id_ruangan = r.id_ruangan";
$laporan_data = mysqli_query($koneksi, $query_laporan);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Inventaris Barang</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/logo.png">
    <style>
        @media print {
            .btn-print, nav { display: none; }
        }
    </style>
</head>
<body>

    <nav>
        <a href="index.php">Dashboard</a> | 
        <a href="tambah.php">Tambah Barang</a> | 
        <a href="laporan.php">Laporan Inventaris</a>
    </nav>

    <div style="display: flex; align-items: center; justify-content: center; gap: 15px; margin-top: 20px;">
       <img src="assets/img/logo.png" alt="Logo Aplikasi" width="50" height="50">
       <h2 style="margin: 0; text-transform: uppercase;">Laporan Data Inventaris Barang</h2>
    </div>

    <div class="summary-box">
        <div class="card">
            <h4>Total Varian Barang</h4>
            <p style="font-size: 20px; font-weight: bold;"><?= $total_barang; ?> Item</p>
        </div>
        <div class="card">
            <h4>Total Stok Fisik</h4>
            <p style="font-size: 20px; font-weight: bold;"><?= $total_stok ?? 0; ?> Unit</p>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Ruangan/Lokasi</th>
                <th>Stok</th>
                <th>Kondisi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_assoc($laporan_data)) { 
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= htmlspecialchars($row['nama_barang']); ?></td>
                <td><?= htmlspecialchars($row['nama_kategori'] ?? '-'); ?></td>
                <td><?= htmlspecialchars($row['nama_ruangan'] ?? '-'); ?> (<?= htmlspecialchars($row['lokasi'] ?? '-'); ?>)</td>
                <td><?= $row['stok']; ?></td>
                <td><?= htmlspecialchars($row['kondisi']); ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <div style="margin-top: 30px;">
        <button class="btn btn-add btn-print" onclick="window.print()">Cetak Laporan (Print/PDF)</button>
    </div>

</body>
</html>