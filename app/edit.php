<?php
include 'koneksi.php';

$id = isset($_GET['id']) ? intval($_GET['id']) : null;
if (!$id) {
    header("Location: index.php");
    exit;
}

$query = "SELECT * FROM barang WHERE id_barang = '$id'";
$result = mysqli_query($koneksi, $query);
$barang = mysqli_fetch_assoc($result);

if (!$barang) {
    echo "Data barang tidak ditemukan!";
    exit;
}

$kategori_opt = mysqli_query($koneksi, "SELECT * FROM kategori");
$ruangan_opt  = mysqli_query($koneksi, "SELECT * FROM ruangan");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav>
    <a href="index.php">Dashboard</a> | 
    <a href="tambah.php">Tambah Barang</a> | 
    <a href="laporan.php">Laporan Inventaris</a>
</nav>

<div class="form-container">
    <h3>Form Edit Barang</h3>
    <form action="update.php" method="POST">
        <input type="hidden" name="id_barang" value="<?= $barang['id_barang']; ?>">
        
        <div class="form-group">
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="<?= htmlspecialchars($barang['nama_barang']); ?>" required>
        </div>
        <div class="form-group">
            <label>Kategori</label>
            <select name="id_kategori" required>
                <?php while($k = mysqli_fetch_assoc($kategori_opt)) { ?>
                    <option value="<?= $k['id_kategori']; ?>" <?= $k['id_kategori'] == $barang['id_kategori'] ? 'selected' : ''; ?>>
                        <?= htmlspecialchars($k['nama_kategori']); ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Ruangan</label>
            <select name="id_ruangan" required>
                <?php while($r = mysqli_fetch_assoc($ruangan_opt)) { ?>
                    <option value="<?= $r['id_ruangan']; ?>" <?= $r['id_ruangan'] == $barang['id_ruangan'] ? 'selected' : ''; ?>>
                        <?= htmlspecialchars($r['nama_ruangan']); ?>
                    </option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-edit" style="color:white; background-color:#007BFF;">Update Barang</button>
        <a href="index.php" style="margin-left: 10px; text-decoration: none; color: #555;">Batal</a>
    </form>
</div>

</body>
</html>