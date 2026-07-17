SELECT id_barang, nama_barang, stok FROM barang WHERE id_barang = 1;

START TRANSACTION;

 -> UPDATE barang 
 -> SET stok = stok - 1 
 -> WHERE id_barang = 1;
 -> INSERT INTO peminjaman (id_barang, id_petugas, nama_peminjam, jumlah, tanggal_pinjam, status) 
 -> VALUES (1, 1, 'Andi Wijaya', 1, '2026-07-10', 'Dipinjam');

COMMIT;

SELECT id_barang, nama_barang, stok FROM barang WHERE id_barang = 1;

SELECT id_barang, nama_barang, stok FROM barang WHERE id_barang = 7;

START TRANSACTION;

UPDATE barang 
 -> SET stok = stok - 1 
 -> WHERE id_barang = 7;

ROLLBACK;

SELECT id_barang, nama_barang, stok FROM barang WHERE id_barang = 7;