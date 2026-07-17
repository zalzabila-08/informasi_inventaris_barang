INSERTINTO kategori (nama_kategori) VALUES
 -> ('Elektronik'),
 -> ('Mebel'),
 -> ('Alat Tulis Kantor');

INSERT INTO ruangan (nama_ruangan, lokasi) VALUES
 -> ('Lab Komputer A', 'Gedung Rektorat Lt. 2'),
 -> ('Gudang Utama', 'Gedung C Lt. 1');

INSERT IGNORE INTO petugas (nama_petugas, username, password) VALUES
 -> ('Admin Utama', 'admin', 'password123');

INSERT INTO barang (nama_barang, id_kategori, id_ruangan, stok, kondisi) VALUES
 -> ('Laptop ASUS ROG', 1, 1, 10, 'Baik'),
 -> ('Meja Kerja Kayu', 2, 2, 5, 'Baik'),
 -> ('Proyektor Epson', 1, 1, 3, 'Baik');

INSERT INTO peminjaman (id_barang, id_petugas, nama_peminjam, jumlah, tanggal_pinjam, status) VALUES
 -> (1, 1, 'Zalzabila', 1, '2026-07-10', 'Dipinjam'),
 -> (3, 1, 'Astria', 1, '2026-07-14', 'Dipinjam'),
 -> (1, 1, 'Andi Wijaya', 1, '2026-07-10', 'Dipinjam'),
