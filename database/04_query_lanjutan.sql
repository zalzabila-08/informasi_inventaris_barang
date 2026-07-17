SELECT b.id_barang, b.nama_barang, k.nama_kategori, r.nama_ruangan, b.stok, b.kondisi
FROM barang b
LEFT JOIN kategori k ON b.id_kategori = k.id_kategori
LEFT JOIN ruangan r ON b.id_ruangan = r.id_ruangan;

SELECT p.id_peminjaman, b.nama_barang, t.nama_petugas, p.jumlah, p.tanggal_pinjam, p.status
FROM peminjaman p
INNER JOIN barang b ON p.id_barang = b.id_barang
INNER JOIN petugas t ON p.id_petugas = t.id_petugas;

SELECT SUM(stok) AS total_seluruh_stok FROM barang;

SELECT k.nama_kategori, COUNT(b.id_barang) AS jumlah_jenis_barang
FROM barang b
INNER JOIN kategori k ON b.id_kategori = k.id_kategori
GROUP BY k.nama_kategori;