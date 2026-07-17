<?php
include 'koneksi.php';

// Ambil data lewat view_index
$query = "SELECT b.id_barang, b.nama_barang, k.nama_kategori, r.nama_ruangan, r.lokasi, b.stok, b.kondisi 
          FROM barang b
          LEFT JOIN kategori k ON b.id_kategori = k.id_kategori
          LEFT JOIN ruangan r ON b.id_ruangan = r.id_ruangan";
$result = mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Inventaris</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/img/logo.png">
</head>
<body>

    <h2>Dashboard Inventaris Barang</h2>
    <nav>
        <a href="index.php">Dashboard</a> | 
        <a href="tambah.php">Tambah Barang</a> | 
        <a href="laporan.php">Laporan Inventaris</a>
    </nav>

    <div style="margin-bottom: 15px;">
        <a href="tambah.php" class="btn btn-add">Tambah Barang Baru</a>
    </div>

    <div style="display: flex; align-items: center; gap: 12px; margin: 20px 0; padding-bottom: 10px; border-bottom: 2px solid #eee;">
       <img src="assets/img/logo.png" alt="Logo Aplikasi" width="45" height="45">
       <h3 style="margin: 0; color: #333;">Sistem Inventaris Barang</h3>
    </div>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Ruangan/Lokasi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $no = 1;
            while($row = mysqli_fetch_assoc($result)) { 
            ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><strong><?= htmlspecialchars($row['nama_barang']); ?></strong></td>
                <td><?= htmlspecialchars($row['nama_kategori'] ?? 'Tanpa Kategori'); ?></td>
                <td><?= htmlspecialchars($row['nama_ruangan'] ?? '-'); ?> (<?= htmlspecialchars($row['lokasi'] ?? '-'); ?>)</td>
                <td>
                    <a href="edit.php?id=<?= $row['id_barang']; ?>" class="btn btn-edit">Edit</a>
                    <a href="hapus.php?id=<?= $row['id_barang']; ?>" class="btn btn-delete">Hapus</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

    <script src="assets/js/script.js"></script>
</body>
</html>