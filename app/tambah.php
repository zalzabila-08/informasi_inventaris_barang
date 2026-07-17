<?php
include 'koneksi.php';
$kategori_opt = mysqli_query($koneksi, "SELECT * FROM kategori");
$ruangan_opt  = mysqli_query($koneksi, "SELECT * FROM ruangan");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav>
    <a href="index.php">Dashboard</a> | 
    <a href="tambah.php">Tambah Barang</a> | 
    <a href="laporan.php">Laporan Inventaris</a>
</nav>

<div class="form-container">
    <h3>Form Tambah Barang</h3>
    <form action="simpan.php" method="POST">
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" placeholder="Masukkan nama barang" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select name="id_kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <?php while($k = mysqli_fetch_assoc($kategori_opt)) { ?>
                    <option value="<?= $k['id_kategori']; ?>"><?= htmlspecialchars($k['nama_kategori']); ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Ruangan</label>
            <select name="id_ruangan" required>
                <option value="">-- Pilih Ruangan --</option>
                <?php while($r = mysqli_fetch_assoc($ruangan_opt)) { ?>
                    <option value="<?= $r['id_ruangan']; ?>"><?= htmlspecialchars($r['nama_ruangan']); ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Stok Awal</label>
            <input type="number" name="stok" min="0" required>
        </div>
        <div class="form-group">
            <label>Kondisi</label>
            <select name="kondisi" required>
                <option value="Baik">Baik</option>
                <option value="Rusak Ringan">Rusak Ringan</option>
                <option value="Rusak Berat">Rusak Berat</option>
            </select>
        </div>
        <button type="submit" class="btn btn-add">Simpan Barang</button>
        <a href="index.php" style="margin-left: 10px; text-decoration: none; color: #555;">Kembali</a>
    </form>
</div>

</body>
</html>